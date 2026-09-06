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


{{-- Main Container --}}
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
            My Profile
        </h1>

        <p class="mt-3 text-slate-500 text-sm md:text-base">
            Manage your personal information and account settings.
        </p>

    </div>


    {{-- Profile Card --}}
    <div class="bg-white/80 backdrop-blur-xl
                border border-white/70
                rounded-[2rem]
                shadow-2xl shadow-indigo-900/10
                overflow-hidden
                transition duration-500
                hover:shadow-indigo-900/20">


        {{-- Top Gradient Section --}}
        <div class="relative h-36
                    bg-gradient-to-r
                    from-indigo-600
                    via-purple-600
                    to-indigo-700
                    overflow-hidden">

            {{-- Decorative Circles --}}
            <div class="absolute -top-16 -right-10
                        w-48 h-48 rounded-full
                        bg-white/10">
            </div>

            <div class="absolute -bottom-20 left-10
                        w-40 h-40 rounded-full
                        bg-white/10">
            </div>

        </div>


        {{-- Profile Info --}}
        <div class="relative px-6 md:px-10 pb-10">


            {{-- Avatar --}}
            <div class="-mt-14 mb-8 flex flex-col items-center">

                <div class="relative group">

                    <div class="w-28 h-28 rounded-full
                                bg-gradient-to-br
                                from-indigo-500
                                to-purple-600
                                p-1
                                shadow-xl
                                shadow-indigo-500/30
                                transition duration-500
                                group-hover:scale-110
                                group-hover:rotate-3">

                        <div class="w-full h-full rounded-full
                                    bg-white
                                    flex items-center justify-center
                                    text-4xl font-black
                                    text-indigo-600">

                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                        </div>

                    </div>

                    {{-- Online Dot --}}
                    <div class="absolute bottom-2 right-2
                                w-5 h-5
                                bg-emerald-500
                                border-4 border-white
                                rounded-full
                                shadow-lg">
                    </div>

                </div>


                <h2 class="mt-4 text-xl font-bold text-slate-900">
                    {{ auth()->user()->name }}
                </h2>

                <p class="text-sm text-slate-500">
                    {{ auth()->user()->email }}
                </p>

            </div>


            {{-- Success Message --}}
            @if (session('status'))

                <div class="mb-6 flex items-center gap-3
                            p-4 rounded-2xl
                            bg-emerald-50
                            border border-emerald-100
                            text-emerald-700
                            animate-[fadeIn_.4s_ease-out]">

                    <div class="w-9 h-9 rounded-full
                                bg-emerald-100
                                flex items-center justify-center">

                        ✓

                    </div>

                    <div>
                        <p class="font-semibold text-sm">
                            Profile Updated
                        </p>

                        <p class="text-xs text-emerald-600">
                            Your information has been updated successfully.
                        </p>
                    </div>

                </div>

            @endif


            {{-- Form --}}
            <form method="POST"
                  action="{{ route('user-profile-information.update') }}"
                  class="space-y-6">

                @csrf
                @method('PUT')


                {{-- Name --}}
                <div class="group">

                    <label
                        for="name"
                        class="block text-sm font-bold
                               text-slate-700 mb-2">
                        Full Name
                    </label>

                    <div class="relative">

                        <div class="absolute inset-y-0 left-0
                                    pl-4 flex items-center
                                    text-slate-400
                                    group-focus-within:text-indigo-600
                                    transition">

                            <svg class="w-5 h-5"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0
                                         4 4 0 018 0z
                                         M12 14a7 7 0 00-7 7h14
                                         a7 7 0 00-7-7z"/>

                            </svg>

                        </div>

                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name', auth()->user()->name) }}"
                            required
                            class="w-full pl-12 pr-4 py-4
                                   rounded-2xl
                                   border border-slate-200
                                   bg-slate-50/70
                                   text-slate-900
                                   outline-none
                                   transition-all duration-300
                                   focus:bg-white
                                   focus:border-indigo-500
                                   focus:ring-4
                                   focus:ring-indigo-500/10
                                   focus:-translate-y-0.5"
                        >

                    </div>

                    @error('name')
                        <p class="mt-2 text-xs text-red-500">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Email --}}
                <div class="group">

                    <label
                        for="email"
                        class="block text-sm font-bold
                               text-slate-700 mb-2">
                        Email Address
                    </label>

                    <div class="relative">

                        <div class="absolute inset-y-0 left-0
                                    pl-4 flex items-center
                                    text-slate-400
                                    group-focus-within:text-indigo-600
                                    transition">

                            <svg class="w-5 h-5"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M3 8l9 6 9-6
                                         M5 19h14
                                         a2 2 0 002-2V7
                                         a2 2 0 00-2-2H5
                                         a2 2 0 00-2 2v10
                                         a2 2 0 002 2z"/>

                            </svg>

                        </div>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email', auth()->user()->email) }}"
                            required
                            class="w-full pl-12 pr-4 py-4
                                   rounded-2xl
                                   border border-slate-200
                                   bg-slate-50/70
                                   text-slate-900
                                   outline-none
                                   transition-all duration-300
                                   focus:bg-white
                                   focus:border-indigo-500
                                   focus:ring-4
                                   focus:ring-indigo-500/10
                                   focus:-translate-y-0.5"
                        >

                    </div>

                    @error('email')
                        <p class="mt-2 text-xs text-red-500">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Account Status --}}
                <div class="p-5 rounded-2xl
                            bg-slate-50
                            border border-slate-100">

                    <div class="flex items-center justify-between">

                        <div class="flex items-center gap-3">

                            <div class="w-10 h-10 rounded-xl
                                        bg-indigo-100
                                        text-indigo-600
                                        flex items-center justify-center">

                                <svg class="w-5 h-5"
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
                                             0-1.042-.133-2.052
                                             -.382-3.016z"/>

                                </svg>

                            </div>

                            <div>

                                <p class="text-sm font-bold text-slate-800">
                                    Account Status
                                </p>

                                <p class="text-xs text-slate-500">
                                    Your account is active
                                </p>

                            </div>

                        </div>

                        <span class="px-3 py-1.5
                                     rounded-full
                                     bg-emerald-100
                                     text-emerald-700
                                     text-xs font-bold">
                            Active
                        </span>

                    </div>

                </div>


                {{-- Buttons --}}
                <div class="flex flex-col sm:flex-row gap-3 pt-2">

                    <button
                        type="submit"
                        class="flex-1 py-4
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
                               hover:shadow-2xl
                               active:scale-[0.98]">

                        <span class="inline-flex items-center justify-center gap-2">

                            Save Changes

                            <svg class="w-5 h-5"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M5 13l4 4L19 7"/>

                            </svg>

                        </span>

                    </button>


                    <a
                        href="{{ url('/') }}"
                        class="flex-1 py-4
                               text-center
                               bg-slate-100
                               hover:bg-slate-200
                               text-slate-700
                               rounded-2xl
                               text-sm
                               font-bold
                               transition-all duration-300
                               hover:-translate-y-1">

                        Back to Home

                    </a>

                </div>

            </form>

            {{-- Change Password Section --}}
<div class="mt-10 pt-10 border-t border-slate-200">

    <div class="mb-6">

        <h2 class="text-xl font-extrabold text-slate-900">
            Change Password
        </h2>

        <p class="mt-1 text-sm text-slate-500">
            Keep your account secure by using a strong password.
        </p>

    </div>


    <form method="POST"
          action="{{ route('user-password.update') }}"
          class="space-y-6">

        @csrf
        @method('PUT')


        {{-- Current Password --}}
        <div class="group">

            <label
                for="current_password"
                class="block text-sm font-bold text-slate-700 mb-2">
                Current Password
            </label>

            <input
                id="current_password"
                type="password"
                name="current_password"
                required
                placeholder="Enter your current password"
                class="w-full px-4 py-4 rounded-2xl
                       border border-slate-200
                       bg-slate-50/70
                       text-slate-900
                       outline-none
                       transition-all duration-300
                       focus:bg-white
                       focus:border-indigo-500
                       focus:ring-4
                       focus:ring-indigo-500/10
                       focus:-translate-y-0.5"
            >

            @error('current_password')
                <p class="mt-2 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror

        </div>


        {{-- New Password --}}
        <div class="group">

            <label
                for="password"
                class="block text-sm font-bold text-slate-700 mb-2">
                New Password
            </label>

            <input
                id="password"
                type="password"
                name="password"
                required
                placeholder="Enter your new password"
                class="w-full px-4 py-4 rounded-2xl
                       border border-slate-200
                       bg-slate-50/70
                       text-slate-900
                       outline-none
                       transition-all duration-300
                       focus:bg-white
                       focus:border-indigo-500
                       focus:ring-4
                       focus:ring-indigo-500/10
                       focus:-translate-y-0.5"
            >

            @error('password')
                <p class="mt-2 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror

        </div>


        {{-- Confirm Password --}}
        <div class="group">

            <label
                for="password_confirmation"
                class="block text-sm font-bold text-slate-700 mb-2">
                Confirm New Password
            </label>

            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
                placeholder="Confirm your new password"
                class="w-full px-4 py-4 rounded-2xl
                       border border-slate-200
                       bg-slate-50/70
                       text-slate-900
                       outline-none
                       transition-all duration-300
                       focus:bg-white
                       focus:border-indigo-500
                       focus:ring-4
                       focus:ring-indigo-500/10
                       focus:-translate-y-0.5"
            >

            @error('password_confirmation')
                <p class="mt-2 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror

        </div>


        {{-- Button --}}
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

            Update Password

        </button>

    </form>

</div>


        </div>

    </div>

</div>


</div>

<style>
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

@endsection
