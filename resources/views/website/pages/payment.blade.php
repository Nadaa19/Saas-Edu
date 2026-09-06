@extends('website.layout.main')

@section('home')

<div class="mx-auto max-w-4xl px-4 py-12">

    <div class="mx-auto max-w-2xl">

        <div class="rounded-xl border-0 bg-white shadow-sm">

            <div class="p-6">

                <h2 class="mb-6 text-2xl font-bold text-gray-900">
                    Checkout
                </h2>

                {{-- Course --}}
                <div class="mb-6">

                    <h4 class="text-lg font-semibold text-gray-900">
                        Course Details
                    </h4>

                    <div class="mt-4 flex items-center gap-4">

                        <img
                            src="{{asset('storage/' . $course_details->img)}}"
                            alt="Course"
                            class="h-20 w-30 rounded-lg object-cover"
                        >

                        <div>
                            <h5 class="mb-1 text-lg font-semibold text-gray-900">
                              {{$course_details->name}}
                            </h5>

                            <p class="text-gray-500">
                                Price:
                                <strong class="text-gray-900">
                                    $ {{$course_details->price}}

                                </strong>
                            </p>
                        </div>

                    </div>

                </div>


                {{-- Student Information --}}
                <div class="mb-6">

                    <h4 class="text-lg font-semibold text-gray-900">
                        Student Information
                    </h4>

                    <div class="mt-4 space-y-3">

                        <p class="text-gray-600">
                            <strong class="text-gray-900">Name:</strong>
                        {{   Auth::user()->name}}
                        </p>

                        <p class="text-gray-600">
                            <strong class="text-gray-900">Email:</strong>
                             {{   Auth::user()->email}}

                        </p>

                    </div>

                </div>


                {{-- Payment --}}
                <div class="border-t border-gray-200 pt-6">

                    <div class="mb-4 flex items-center justify-between">

                        <span class="text-gray-600">
                            Total
                        </span>

                        <strong class="text-lg text-gray-900">
                       $ {{$course_details->price}}

                        </strong>

                    </div>

                    <a href="{{route('create.order' , $course_details->id)}}"

                            class="w-full rounded-lg bg-indigo-600 px-4 py-3 font-semibold text-white transition hover:bg-indigo-700"
                        >
                            Pay with PayPal
                        </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
