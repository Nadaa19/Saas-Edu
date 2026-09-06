 @extends('website.layout.main')

@section('home')

<div class="min-h-screen bg-slate-50 flex items-center justify-center px-6 py-16">

<div class="w-full max-w-md">

    {{-- Logo / Brand --}}
    <div class="text-center mb-8">

        <a href="{{ url('/') }}"
           class="text-3xl font-extrabold text-indigo-600">
            EduLearn
        </a>

        <h1 class="mt-6 text-3xl font-extrabold text-slate-900">
            Create your account
        </h1>

        <p class="mt-2 text-sm text-slate-500">
            Start learning and grow your skills with EduLearn.
        </p>

    </div>


    {{-- Register Card --}}
    <div class="bg-white rounded-3xl border border-slate-200
                shadow-sm p-8">

        <form method="POST" action="{{ route('register') }}" class="space-y-5">

            @csrf

            {{-- Name --}}
            <div>

                <label
                    for="name"
                    class="block text-sm font-semibold text-slate-700 mb-2">
                    Full Name
                </label>

                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    placeholder="Enter your full name"
                    class="w-full px-4 py-3.5
                           rounded-xl
                           border border-slate-200
                           bg-slate-50
                           text-sm text-slate-900
                           outline-none
                           transition
                           focus:bg-white
                           focus:border-indigo-500
                           focus:ring-4
                           focus:ring-indigo-500/10"
                >

                @error('name')
                    <p class="mt-2 text-xs text-red-500">
                        {{ $message }}
                    </p>
                @enderror

            </div>


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
                    placeholder="you@example.com"
                    class="w-full px-4 py-3.5
                           rounded-xl
                           border border-slate-200
                           bg-slate-50
                           text-sm text-slate-900
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

                <label
                    for="password"
                    class="block text-sm font-semibold text-slate-700 mb-2">
                    Password
                </label>

                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    placeholder="Create a strong password"
                    class="w-full px-4 py-3.5
                           rounded-xl
                           border border-slate-200
                           bg-slate-50
                           text-sm text-slate-900
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
                    placeholder="Confirm your password"
                    class="w-full px-4 py-3.5
                           rounded-xl
                           border border-slate-200
                           bg-slate-50
                           text-sm text-slate-900
                           outline-none
                           transition
                           focus:bg-white
                           focus:border-indigo-500
                           focus:ring-4
                           focus:ring-indigo-500/10"
                >

            </div>


            {{-- Submit --}}
            <button
                type="submit"
                class="w-full py-3.5
                       bg-indigo-600
                       hover:bg-indigo-700
                       text-white
                       rounded-xl
                       text-sm font-bold
                       shadow-lg shadow-indigo-600/20
                       transition duration-200
                       hover:-translate-y-0.5"
            >
                Create Account
            </button>

        </form>


        {{-- Login --}}
        <div class="mt-7 pt-6 border-t border-slate-100 text-center">

            <p class="text-sm text-slate-500">
                Already have an account?

                <a
                    href="{{ route('login') }}"
                    class="font-bold text-indigo-600 hover:text-indigo-700"
                >
                    Sign in
                </a>
            </p>

        </div>

    </div>


    {{-- Footer --}}
    <p class="mt-6 text-center text-xs text-slate-400">
        By creating an account, you agree to our terms and privacy policy.
    </p>

</div>

</div>

@endsection
