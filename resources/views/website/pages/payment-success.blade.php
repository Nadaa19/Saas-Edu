@extends('website.layout.main')

@section('home')

<div class="min-h-[70vh] flex items-center justify-center px-4 py-12">

    <div class="w-full max-w-2xl rounded-2xl bg-white p-8 text-center shadow-sm">

        {{-- Success Icon --}}
        <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full bg-green-100">
            <svg
                class="h-10 w-10 text-green-600"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M5 13l4 4L19 7"
                />
            </svg>
        </div>

        {{-- Title --}}
        <h1 class="mb-3 text-3xl font-bold text-gray-900">
            Payment Successful!
        </h1>

        {{-- Message --}}
        <p class="mb-8 text-gray-600">
            Your payment has been completed successfully.
            You are now enrolled in the course.
        </p>

        {{-- Order Information --}}
        <div class="mb-8 rounded-xl bg-gray-50 p-5 text-left">

            <div class="mb-3 flex items-center justify-between">
                <span class="text-gray-500">
                    Course
                </span>

                <span class="font-semibold text-gray-900">
                    {{ $order->course->name }}
                </span>
            </div>

            <div class="mb-3 flex items-center justify-between">
                <span class="text-gray-500">
                    Order ID
                </span>

                <span class="font-semibold text-gray-900">
                    #{{ $order->id }}
                </span>
            </div>

            <div class="flex items-center justify-between">
                <span class="text-gray-500">
                    Payment Status
                </span>

                <span class="font-semibold text-green-600">
                    Paid
                </span>
            </div>

        </div>

        {{-- Button --}}
        <a
            href="{{ url('/') }}"
            class="inline-block rounded-lg bg-indigo-600 px-6 py-3 font-semibold text-white transition hover:bg-indigo-700"
        >
            Back to Home
        </a>

    </div>

</div>

@endsection
