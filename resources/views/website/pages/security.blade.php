@extends('website.layout.main')

@section('home')

<div class="min-h-screen relative overflow-hidden bg-slate-50 px-6 py-16">


{{-- Animated Background --}}
<div class="absolute -top-32 -left-32 w-80 h-80
            bg-indigo-300/30 rounded-full blur-3xl
            animate-pulse">
</div>

<div class="absolute top-1/3 -right-32 w-96 h-96
            bg-purple-300/20 rounded-full blur-3xl
            animate-pulse"
     style="animation-delay: 1s;">
</div>

<div class="absolute -bottom-40 left-1/3 w-96 h-96
            bg-blue-300/20 rounded-full blur-3xl
            animate-pulse"
     style="animation-delay: 2s;">
</div>


<div class="relative z-10 max-w-4xl mx-auto">

    {{-- Header --}}
    <div class="text-center mb-10">

        <a href="{{ url('/') }}"
           class="inline-block text-3xl font-black
                  text-transparent bg-clip-text
                  bg-gradient-to-r from-indigo-600 to-purple-600
                  hover:scale-105 transition duration-300">
            EduLearn
        </a>

        <h1 class="mt-6 text-4xl md:text-5xl font-black
                   text-slate-900 tracking-tight">
            Security
        </h1>

        <p class="mt-3 text-slate-500">
            Protect your account with an extra layer of security.
        </p>

    </div>


    {{-- Main Card --}}
    <div class="bg-white/80 backdrop-blur-xl
                border border-white/70
                rounded-[2rem]
                shadow-2xl shadow-indigo-900/10
                overflow-hidden">


        {{-- Gradient Header --}}
        <div class="relative p-8 md:p-10
                    bg-gradient-to-r
                    from-indigo-600
                    via-purple-600
                    to-indigo-700
                    text-white overflow-hidden">

            <div class="absolute -top-20 -right-10
                        w-56 h-56 rounded-full
                        bg-white/10">
            </div>

            <div class="absolute -bottom-24 left-20
                        w-48 h-48 rounded-full
                        bg-white/10">
            </div>


            <div class="relative flex items-center gap-5">

                <div class="w-16 h-16 rounded-2xl
                            bg-white/15
                            backdrop-blur-md
                            flex items-center justify-center">

                    <svg class="w-8 h-8"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M12 15v2m-6 4h12
                                 a2 2 0 002-2v-6
                                 a2 2 0 00-2-2H6
                                 a2 2 0 00-2 2v6
                                 a2 2 0 002 2zm10-10V7
                                 a4 4 0 00-8 0v2h8z"/>

                    </svg>

                </div>

                <div>

                    <h2 class="text-2xl font-extrabold">
                        Two-Factor Authentication
                    </h2>

                    <p class="mt-1 text-sm text-indigo-100">
                        Add an extra layer of protection to your account.
                    </p>

                </div>

            </div>

        </div>


        <div class="p-8 md:p-10">


            {{-- Success --}}
            @if (session('status'))

                <div class="mb-6 p-4 rounded-2xl
                            bg-emerald-50
                            border border-emerald-100
                            text-emerald-700">

                    <div class="flex items-center gap-3">

                        <div class="w-9 h-9 rounded-full
                                    bg-emerald-100
                                    flex items-center justify-center">
                            ✓
                        </div>

                        <span class="text-sm font-semibold">
                            {{ session('status') }}
                        </span>

                    </div>

                </div>

            @endif


            {{-- 2FA Status --}}
            <div class="flex flex-col md:flex-row
                        md:items-center
                        md:justify-between
                        gap-5
                        p-6 rounded-2xl
                        bg-slate-50
                        border border-slate-100">

                <div class="flex items-center gap-4">

                    <div class="w-12 h-12 rounded-2xl
                                bg-indigo-100
                                text-indigo-600
                                flex items-center justify-center">

                        <svg class="w-6 h-6"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 12l2 2 4-4
                                     m5.618-4.016A11.955
                                     11.955 0 0112 2.944
                                     a11.955 11.955 0
                                     01-8.618 3.04
                                     A12.02 12.02 0
                                     003 9c0 5.591
                                     3.824 10.29
                                     9 11.622
                                     5.176-1.332
                                     9-6.03
                                     9-11.622
                                     0-1.042-.133
                                     -2.052-.382-3.016z"/>

                        </svg>

                    </div>

                    <div>

                        <h3 class="font-bold text-slate-900">
                            2FA Protection
                        </h3>

                        <p class="text-sm text-slate-500">
                            @if(auth()->user()->two_factor_secret)
                                Your account is protected with 2FA.
                            @else
                                2FA is currently disabled.
                            @endif
                        </p>

                    </div>

                </div>


                @if(auth()->user()->two_factor_secret)

                    <span class="px-4 py-2 rounded-full
                                 bg-emerald-100
                                 text-emerald-700
                                 text-xs font-bold">
                        Enabled
                    </span>

                @else

                    <span class="px-4 py-2 rounded-full
                                 bg-slate-200
                                 text-slate-600
                                 text-xs font-bold">
                        Disabled
                    </span>

                @endif

            </div>


            {{-- Enable 2FA --}}
            @if(! auth()->user()->two_factor_secret)

                <div class="mt-8">

                    <div class="mb-6">

                        <h3 class="text-xl font-extrabold text-slate-900">
                            Enable Two-Factor Authentication
                        </h3>

                        <p class="mt-2 text-sm text-slate-500">
                            Secure your account using an authenticator app.
                        </p>

                    </div>


                    <form method="POST"
                          action="{{ route('two-factor.enable') }}">

                        @csrf

                        <button
                            type="submit"
                            class="w-full py-4
                                   bg-gradient-to-r
                                   from-indigo-600
                                   to-purple-600
                                   hover:from-indigo-700
                                   hover:to-purple-700
                                   text-white
                                   rounded-2xl
                                   text-sm
                                   font-bold
                                   shadow-xl
                                   shadow-indigo-600/20
                                   transition-all duration-300
                                   hover:-translate-y-1
                                   active:scale-[0.98]">

                            Enable 2FA

                        </button>

                    </form>

                </div>

            @else


                {{-- QR Code --}}
                <div class="mt-8">

                    <div class="mb-6">

                        <h3 class="text-xl font-extrabold text-slate-900">
                            Authenticator Setup
                        </h3>

                        <p class="mt-2 text-sm text-slate-500">
                            Scan the QR code using your authenticator app.
                        </p>

                    </div>


                    <div class="flex flex-col items-center
                                p-8 rounded-3xl
                                bg-slate-50
                                border border-slate-100">

                        <div class="p-5 bg-white rounded-2xl shadow-lg">

                            {!! auth()->user()->twoFactorQrCodeSvg() !!}

                        </div>


                        <p class="mt-5 text-xs text-slate-500 text-center">
                            Scan this QR code with Google Authenticator,
                            Microsoft Authenticator, or another compatible app.
                        </p>

                    </div>


                    {{-- Secret Key --}}
                    <div class="mt-6 p-5 rounded-2xl
                                bg-indigo-50
                                border border-indigo-100">

                        <p class="text-xs font-bold
                                  text-indigo-700 mb-2">
                            Setup Key
                        </p>

                        <code class="block break-all
                                     text-sm font-mono
                                     text-indigo-900">
                            {{ decrypt(auth()->user()->two_factor_secret) }}
                        </code>

                    </div>

                </div>


                {{-- Recovery Codes --}}
                <div class="mt-10 pt-10
                            border-t border-slate-200">

                    <div class="mb-6">

                        <h3 class="text-xl font-extrabold text-slate-900">
                            Recovery Codes
                        </h3>

                        <p class="mt-2 text-sm text-slate-500">
                            Keep these codes somewhere safe.
                            You can use them if you lose access to your authenticator.
                        </p>

                    </div>


                    <div class="p-5 rounded-2xl
                                bg-slate-900
                                text-white
                                font-mono text-sm
                                space-y-2">

                        @foreach(auth()->user()->recoveryCodes() as $code)

                            <div class="tracking-wider">
                                {{ $code }}
                            </div>

                        @endforeach

                    </div>


                    <form method="POST"
                          action="{{ route('two-factor.regenerate-recovery-codes') }}"
                          class="mt-4">

                        @csrf

                        <button
                            type="submit"
                            class="w-full py-3.5
                                   rounded-2xl
                                   bg-slate-100
                                   hover:bg-slate-200
                                   text-slate-700
                                   text-sm
                                   font-bold
                                   transition">

                            Regenerate Recovery Codes

                        </button>

                    </form>

                </div>


                {{-- Disable --}}
                <div class="mt-10 pt-10
                            border-t border-red-100">

                    <div class="mb-6">

                        <h3 class="text-xl font-extrabold text-slate-900">
                            Disable 2FA
                        </h3>

                        <p class="mt-2 text-sm text-slate-500">
                            This will remove the extra security layer from your account.
                        </p>

                    </div>


                    <form method="POST"
                          action="{{ route('two-factor.disable') }}">

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="w-full py-4
                                   rounded-2xl
                                   bg-red-50
                                   hover:bg-red-100
                                   text-red-600
                                   text-sm
                                   font-bold
                                   transition-all duration-300
                                   hover:-translate-y-0.5">

                            Disable Two-Factor Authentication

                        </button>

                    </form>

                </div>

            @endif


            {{-- Back --}}
            <div class="mt-10 pt-6
                        border-t border-slate-100
                        text-center">

                <a
                    href="{{ route('profile.info') }}"
                    class="text-sm font-bold
                           text-indigo-600
                           hover:text-indigo-700">
                    ← Back to Profile
                </a>

            </div>

        </div>

    </div>

</div>


</div>

@endsection
