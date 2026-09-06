@extends('website.layout.main')

@section('home')

<div class="min-h-screen flex items-center justify-center">

    <div class="text-center">

        <h1 class="text-3xl font-bold mb-4">
            Verify Your Email
        </h1>

        <p class="text-gray-600 mb-6">
            We have sent a verification link to your email address.
            Please check your inbox and click the link to verify your account.
        </p>

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <button
                type="submit"
                class="px-6 py-3 bg-blue-600 text-white rounded-lg"
            >
                Resend Verification Email
            </button>

        </form>

    </div>

</div>

@endsection
