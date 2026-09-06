<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PaypalController extends Controller
{
    // دالة مساعدة لمنع تكرار رابط الـ API الخاص بـ PayPal
    private function getPayPalBaseUrl()
    {
        return config('services.paypal.mode') === 'sandbox'
            ? 'https://api-m.sandbox.paypal.com'
            : 'https://api-m.paypal.com';
    }

    public function checkout($course_id)
    {
        // تم تغيير get() إلى firstOrFail() لأننا نتوقع كورس واحد فقط لعرض تفاصيله
        $course_details = Course::where('id', $course_id)
            ->with('teacher', 'subject', 'lessons')
            ->firstOrFail();

        return view('website.pages.payment', compact('course_details'));
    }

    private function getPayPalAccessToken()
    {
        $response = Http::withBasicAuth(
            config('services.paypal.client_id'),
            config('services.paypal.client_secret')
        )->asForm()->post($this->getPayPalBaseUrl().'/v1/oauth2/token', [
            'grant_type' => 'client_credentials',
        ]);

        return $response->json('access_token');
    }

    public function createOrder($id)
    {
        $course = Course::findOrFail($id);

        $course = Course::findOrFail($id);

        // Check if the student already purchased this course
        $alreadyPurchased = Order::where('user_id', Auth::id())
            ->where('course_id', $course->id)
            ->where('status', 'completed') // Assuming 'completed' is the status for successful purchases
            ->exists();

        if ($alreadyPurchased) {
            return redirect()
                ->route('course.details', ['id' => $course->id])
                ->with('error', 'You have already purchased this course.');
        }

        // إنشاء الطلب في قاعدة البيانات
        $order = Order::create([
            'user_id' => Auth::id(),
            'course_id' => $course->id,
            'status' => 'pending',
            // افترضت هنا وجود حلف لحفظ السعر وقت الشراء لتوثيق الفواتير
            'amount' => $course->price,
        ]);

        $accessToken = $this->getPayPalAccessToken();

        $response = Http::withToken($accessToken)
            ->post($this->getPayPalBaseUrl().'/v2/checkout/orders', [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    [
                        'amount' => [
                            'currency_code' => 'USD',
                            'value' => number_format($course->price, 2, '.', ''), // تحويل السعر لديناميكي وبصيغة عشرية صحيحة
                        ],
                    ],
                ],
                'application_context' => [
                    'return_url' => route('order.success'),
                    'cancel_url' => route('order.cancel'), // تعديل الخطأ الإملائي cansel -> cancel
                ],
            ]);

        if ($response->successful()) {
            $paypalOrderId = $response->json('id');

            $order->update([
                'paypal_order_id' => $paypalOrderId,
            ]);

            $approveLink = collect($response->json('links'))
                ->firstWhere('rel', 'approve')['href'];

            return redirect()->away($approveLink);
        }

        // في حال فشل الاتصال بـ بيبال، يفضل إرجاع المستخدم لصفحة الدفع مع رسالة خطأ
        return redirect()->back()->with('error', 'حدث خطأ أثناء الاتصال ببوابة الدفع.');
    }

    public function success(Request $request)
    {
        $paypalOrderId = $request->query('token');
        $accessToken = $this->getPayPalAccessToken();

        $response = Http::withToken($accessToken)
            ->withBody('{}', 'application/json')
            ->post($this->getPayPalBaseUrl().'/v2/checkout/orders/'.$paypalOrderId.'/capture');

        // التحقق من أن بيبال أكد سحب المبلغ بنجاح
        if ($response->successful() && $response->json('status') === 'COMPLETED') {

            // تحديث حالة الطلب المرتبط بـ paypal_order_id في قاعدة البيانات
            $order = Order::where('paypal_order_id', $paypalOrderId)->first();

            if ($order) {
                $order->update(['status' => 'completed']);

                // هنا يمكنك إضافة منطق إضافي مثل (إرسال إيميل للمستخدم أو تفعيل الكورس له)
            }

            return view('website.pages.payment-success', compact('order'))->with('success', 'تم شراء الكورس بنجاح!');
        }
        // بدلاً من التوجيه التلقائي، اطبعي الرد لمعرفة الخطأ

        return redirect()->route('order.cancel')->with('error', 'فشلت عملية تأكيد الدفع.');
    }

    public function cancel()
    {
        return view('website.pages.payment-error')->with('error', 'تم إلغاء عملية الدفع.');
    }
}
