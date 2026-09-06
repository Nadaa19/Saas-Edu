@extends('website.layout.main')

@section('home')

<div class="min-h-[70vh] flex items-center justify-center px-4 py-12">

    <div class="w-full max-w-2xl rounded-2xl bg-white p-8 text-center shadow-sm">

        {{-- Error Icon --}}
        <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full bg-red-100">
            <svg
                class="h-10 w-10 text-red-600"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        </div>

        {{-- Title --}}
        <h1 class="mb-3 text-3xl font-bold text-gray-900">
            Payment Failed
        </h1>

        {{-- Message --}}
        <p class="mb-8 text-gray-600">
            Unfortunately, your payment could not be completed.
            Please try again later.
        </p>

        {{-- Error Information --}}
        <div class="mb-8 rounded-xl bg-gray-50 p-5 text-left">

            <div class="flex items-center justify-between">
                <span class="text-gray-500">
                    Payment Status
                </span>

                <span class="font-semibold text-red-600">
                    Failed
                </span>
            </div>

            @if(isset($message))
                <div class="mt-4 border-t border-gray-200 pt-4">
                    <span class="text-gray-500">
                        Message
                    </span>

                    <p class="mt-1 text-gray-700">
                        {{ $message }}
                    </p>
                </div>
            @endif

        </div>

        {{-- Buttons --}}
        <div class="flex flex-col justify-center gap-3 sm:flex-row">

            <a
                href="{{ url()->previous() }}"
                class="rounded-lg border border-gray-300 px-6 py-3 font-semibold text-gray-700 transition hover:bg-gray-50"
            >
                Try Again
            </a>

            <a
                href="{{ url('/') }}"
                class="rounded-lg bg-indigo-600 px-6 py-3 font-semibold text-white transition hover:bg-indigo-700"
            >
                Back to Home
            </a>

        </div>

    </div>

</div>

@endsection
