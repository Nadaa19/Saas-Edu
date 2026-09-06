<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50">

    <div class="min-h-screen flex items-center justify-center p-6">

        <div class="w-full max-w-6xl grid grid-cols-1 lg:grid-cols-2
                    bg-white rounded-3xl overflow-hidden
                    border border-slate-200 shadow-xl">


            {{-- ================= LEFT SIDE ================= --}}

            <div class="relative overflow-hidden
                        bg-gradient-to-br from-indigo-600 to-violet-600
                        p-10 lg:p-14 flex items-center">

                {{-- Decorative circles --}}

                <div class="absolute -top-24 -right-24
                            w-72 h-72 rounded-full
                            bg-white/10">
                </div>

                <div class="absolute -bottom-32 -left-20
                            w-80 h-80 rounded-full
                            bg-white/10">
                </div>

                <div class="absolute top-1/2 right-1/4
                            w-24 h-24 rounded-full
                            bg-violet-400/20">
                </div>


                {{-- Content --}}

                <div class="relative z-10 text-white">




                    <p class="text-sm font-semibold
                              uppercase tracking-widest
                              text-indigo-100">

                        Learning Platform

                    </p>


                    <h1 class="mt-4 text-4xl lg:text-5xl
                               font-bold leading-tight">

                        Welcome
                        <br>

                        <span class="text-indigo-100">
                            Back
                        </span>

                    </h1>


                    <p class="mt-6 max-w-md
                              text-sm lg:text-base
                              leading-7 text-indigo-100">

                        Manage your courses, students and instructors
                        from one powerful and simple dashboard.

                    </p>


                    {{-- Features --}}

                    <div class="mt-10 space-y-5">

                        <div class="flex items-center gap-4">

                            <div class="w-10 h-10 rounded-xl
                                        bg-white/15
                                        flex items-center justify-center">

                                <svg
                                    class="w-5 h-5"
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

                            <span class="text-sm text-indigo-100">
                                Manage your courses easily
                            </span>

                        </div>


                        <div class="flex items-center gap-4">

                            <div class="w-10 h-10 rounded-xl
                                        bg-white/15
                                        flex items-center justify-center">

                                <svg
                                    class="w-5 h-5"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M17 20h5v-2a4 4 0 00-4-4h-1
                                           M9 20H4v-2a4 4 0 014-4h1
                                           m4-10a4 4 0 110 8
                                           4 4 0 000-8z"
                                    />
                                </svg>

                            </div>

                            <span class="text-sm text-indigo-100">
                                Track your students
                            </span>

                        </div>


                        <div class="flex items-center gap-4">

                            <div class="w-10 h-10 rounded-xl
                                        bg-white/15
                                        flex items-center justify-center">

                                <svg
                                    class="w-5 h-5"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 8c-1.1 0-2 .9-2 2
                                           s.9 2 2 2 2-.9 2-2-.9-2-2-2z
                                           M4 6h16M4 18h16"
                                    />
                                </svg>

                            </div>

                            <span class="text-sm text-indigo-100">
                                Monitor your platform
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ================= RIGHT SIDE ================= --}}

            <div class="p-8 sm:p-12 lg:p-16
                        flex items-center">

                <div class="w-full max-w-md mx-auto">


                    {{-- Header --}}

                    <div class="mb-8">

                        <div class="flex items-center gap-2 mb-3">

                            <span class="w-2 h-2 rounded-full
                                         bg-indigo-600">
                            </span>

                            <span class="text-xs font-semibold
                                         uppercase tracking-widest
                                         text-indigo-600">

                                Welcome Back

                            </span>

                        </div>


                        <h2 class="text-3xl font-bold
                                   text-slate-900">

                            Sign in to your account

                        </h2>


                        <p class="mt-2 text-sm
                                  text-slate-500">

                            Enter your details to access your dashboard.

                        </p>

                    </div>


                    {{-- Form --}}

                    <form class="space-y-6" method="post" action="{{route('dash.login')}}">
                        @csrf


                        {{-- Email --}}

                        <div>

                            <label
                                for="email"
                                class="block text-sm font-semibold
                                       text-slate-700 mb-2"
                            >

                                Email Address

                            </label>


                            <div class="relative">

                                <div class="absolute inset-y-0 left-0
                                            flex items-center pl-4
                                            text-slate-400">

                                    <svg
                                        class="w-5 h-5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M3 8l9 6 9-6
                                               M5 5h14a2 2 0 012 2v10
                                               a2 2 0 01-2 2H5
                                               a2 2 0 01-2-2V7
                                               a2 2 0 012-2z"
                                        />
                                    </svg>

                                </div>


                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email"
                                    class="w-full pl-12 pr-4 py-3.5
                                           bg-slate-50
                                           border border-slate-200
                                           rounded-xl
                                           text-sm text-slate-800
                                           placeholder:text-slate-400
                                           outline-none
                                           focus:bg-white
                                           focus:border-indigo-500
                                           focus:ring-4
                                           focus:ring-indigo-500/10
                                           transition"
                                >

                            </div>

                        </div>


                        {{-- Password --}}

                        <div>

                            <div class="flex items-center
                                        justify-between mb-2">

                                <label
                                    for="password"
                                    class="text-sm font-semibold
                                           text-slate-700"
                                >

                                    Password

                                </label>


                                <a
                                    href="#"
                                    class="text-xs font-semibold
                                           text-indigo-600
                                           hover:text-indigo-700
                                           transition"
                                >

                                    Forgot password?

                                </a>

                            </div>


                            <div class="relative">

                                <div class="absolute inset-y-0 left-0
                                            flex items-center pl-4
                                            text-slate-400">

                                    <svg
                                        class="w-5 h-5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M7 10V7a5 5 0 0110 0v3
                                               M5 10h14v10H5V10z"
                                        />
                                    </svg>

                                </div>


                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    placeholder="Enter your password"
                                    class="w-full pl-12 pr-4 py-3.5
                                           bg-slate-50
                                           border border-slate-200
                                           rounded-xl
                                           text-sm text-slate-800
                                           placeholder:text-slate-400
                                           outline-none
                                           focus:bg-white
                                           focus:border-indigo-500
                                           focus:ring-4
                                           focus:ring-indigo-500/10
                                           transition"
                                >

                            </div>

                        </div>


                        {{-- Remember Me --}}

                        <div class="flex items-center gap-3">

                            <input
                                type="checkbox"
                                id="remember"
                                class="w-4 h-4 rounded
                                       border-slate-300
                                       text-indigo-600
                                       focus:ring-indigo-500"
                            >

                            <label
                                for="remember"
                                class="text-sm text-slate-500"
                            >

                                Remember me

                            </label>

                        </div>


                        {{-- Login Button --}}

                        <button
                            
                            class="w-full py-3.5
                                   bg-indigo-600
                                   text-white
                                   rounded-xl
                                   text-sm font-semibold
                                   shadow-lg shadow-indigo-200
                                   hover:bg-indigo-700
                                   hover:shadow-xl
                                   transition duration-200"
                        >

                            Sign In

                        </button>

                    </form>


                    {{-- Register --}}

                    <div class="mt-8 pt-6
                                border-t border-slate-100
                                text-center">

                        <p class="text-sm text-slate-500">

                            Don't have an account?

                            <a
                                href="#"
                                class="font-semibold
                                       text-indigo-600
                                       hover:text-indigo-700"
                            >

                                Create Account

                            </a>

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
