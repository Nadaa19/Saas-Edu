@extends('website.layout.main')

@section('home')

<div class="min-h-screen bg-slate-50 flex items-center justify-center px-6 py-16">


<div class="w-full max-w-md">

    {{-- Logo --}}
    <div class="text-center mb-8">

        <a href="{{ url('/') }}"
           class="text-3xl font-extrabold text-indigo-600">
            EduLearn
        </a>

        <h1 class="mt-6 text-3xl font-extrabold text-slate-900">
            Reset Password
        </h1>

        <p class="mt-2 text-sm text-slate-500">
            Enter your new password below.
        </p>

    </div>


    {{-- Reset Password Card --}}
    <div class="bg-white rounded-3xl border border-slate-200
                shadow-sm p-8">

        <form method="POST"
              action="{{ route('password.update') }}"
              class="space-y-5">

            @csrf

            {{-- Token --}}
            <input
                type="hidden"
                name="token"
                value="{{ $token }}"
            >


            {{-- Email --}}
            <div>

                <label
                    for="email"
                    class="block text-sm font-semibold text-slate-700 mb-2">
                    Email Address
                </label>

                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email', $email) }}"
                    required
                    autofocus
                    class="w-full px-4 py-3.5
                           rounded-xl
                           border border-slate-200
                           bg-slate-50
                           text-sm
                           text-slate-900
                           outline-none
                           transition
                           focus:bg-white
                           focus:border-indigo-500
                           focus:ring-4
                           focus:ring-indigo-500/10"
                >

                @error('email')
                    <p class="mt-2 text-xs text-red-500">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            {{-- New Password --}}
            <div>

                <label
                    for="password"
                    class="block text-sm font-semibold text-slate-700 mb-2">
                    New Password
                </label>

                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    placeholder="Enter your new password"
                    class="w-full px-4 py-3.5
                           rounded-xl
                           border border-slate-200
                           bg-slate-50
                           text-sm
                           text-slate-900
                           outline-none
                           transition
                           focus:bg-white
                           focus:border-indigo-500
                           focus:ring-4
                           focus:ring-indigo-500/10"
                >

                @error('password')
                    <p class="mt-2 text-xs text-red-500">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            {{-- Confirm Password --}}
            <div>

                <label
                    for="password_confirmation"
                    class="block text-sm font-semibold text-slate-700 mb-2">
                    Confirm Password
                </label>

                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    placeholder="Confirm your new password"
                    class="w-full px-4 py-3.5
                           rounded-xl
                           border border-slate-200
                           bg-slate-50
                           text-sm
                           text-slate-900
                           outline-none
                           transition
                           focus:bg-white
                           focus:border-indigo-500
                           focus:ring-4
                           focus:ring-indigo-500/10"
                >

                @error('password_confirmation')
                    <p class="mt-2 text-xs text-red-500">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            {{-- Submit --}}
            <button
                type="submit"
                class="w-full py-3.5
                       bg-indigo-600
                       hover:bg-indigo-700
                       text-white
                       rounded-xl
                       text-sm
                       font-bold
                       shadow-lg
                       shadow-indigo-600/20
                       transition duration-200
                       hover:-translate-y-0.5"
            >
                Reset Password
            </button>

        </form>


        {{-- Back to Login --}}
        <div class="mt-7 pt-6 border-t border-slate-100 text-center">

            <p class="text-sm text-slate-500">

                Remember your password?

                <a
                    href="{{ route('login') }}"
                    class="font-bold text-indigo-600 hover:text-indigo-700">
                    Back to Login
                </a>

            </p>

        </div>

    </div>

</div>


</div>

@endsection
