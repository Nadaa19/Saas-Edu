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
            Welcome back
        </h1>

        <p class="mt-2 text-sm text-slate-500">
            Sign in to continue learning.
        </p>

    </div>


    {{-- Login Card --}}
    <div class="bg-white rounded-3xl border border-slate-200
                shadow-sm p-8">

        <form method="POST"
              action="{{ route('login') }}"
              class="space-y-5">

            @csrf

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
                    value="{{ old('email') }}"
                    required
                    autofocus
                    placeholder="you@example.com"
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


            {{-- Password --}}
            <div>

                <div class="flex items-center justify-between mb-2">

                    <label
                        for="password"
                        class="block text-sm font-semibold text-slate-700">
                        Password
                    </label>

                    <a
                        href="{{ route('password.request') }}"
                        class="text-xs font-semibold text-indigo-600 hover:text-indigo-700">
                        Forgot password?
                    </a>

                </div>

                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    placeholder="Enter your password"
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


            {{-- Remember Me --}}
            <div class="flex items-center gap-2">

                <input
                    id="remember"
                    type="checkbox"
                    name="remember"
                    class="w-4 h-4 rounded border-slate-300 text-indigo-600"
                >

                <label
                    for="remember"
                    class="text-sm text-slate-600">
                    Remember me
                </label>

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
                Sign In
            </button>

        </form>


        {{-- Register --}}
        <div class="mt-7 pt-6 border-t border-slate-100 text-center">

            <p class="text-sm text-slate-500">

                Don't have an account?

                <a
                    href="{{ route('register') }}"
                    class="font-bold text-indigo-600 hover:text-indigo-700">
                    Create account
                </a>

            </p>

        </div>

    </div>

</div>

</div>

@endsection
