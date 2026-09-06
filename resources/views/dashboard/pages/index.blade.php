@extends('dashboard.layout.main')

@section('title', 'Dashboard')

@section('body')

<div class="space-y-8">

    {{-- ================= HEADER ================= --}}

    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5">

        <div>

            <div class="flex items-center gap-2 mb-2">

                <span class="w-2 h-2 rounded-full bg-indigo-600"></span>

                <span class="text-xs font-semibold uppercase tracking-widest text-indigo-600">
                    Overview
                </span>

            </div>

            <h1 class="text-3xl lg:text-4xl font-bold text-slate-900 tracking-tight">
                Good morning, Admin 👋
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                Here's what's happening with your learning platform today.
            </p>

        </div>


        <div class="flex gap-3">

            <button
                class="px-4 py-2.5 bg-white border border-slate-200
                       rounded-xl text-sm font-medium text-slate-600
                       hover:border-indigo-300 hover:text-indigo-600
                       transition shadow-sm"
            >
                Export
            </button>

            <button
                class="px-5 py-2.5 bg-indigo-600 text-white
                       rounded-xl text-sm font-semibold
                       shadow-lg shadow-indigo-200
                       hover:bg-indigo-700 transition"
            >
                + Create Course
            </button>

        </div>

    </div>


    {{-- ================= STATISTICS ================= --}}

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5">


        {{-- Courses --}}

        <div class="group bg-white rounded-2xl border border-slate-200
                    p-6 shadow-sm hover:shadow-lg hover:-translate-y-1
                    transition duration-300">

            <div class="flex items-center justify-between">

                <div class="w-12 h-12 rounded-xl bg-indigo-50
                            flex items-center justify-center">

                    <svg class="w-6 h-6 text-indigo-600"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M12 6.253v13m0-13C10.832 5.477
                               9.246 5 7.5 5S4.168 5.477 3 6.253v13
                               C4.168 18.477 5.754 18 7.5 18
                               s3.332.477 4.5 1.253
                               m0-13C13.168 5.477 14.754 5
                               16.5 5s3.332.477 4.5 1.253v13
                               C19.832 18.477 18.246 18
                               16.5 18s-3.332.477-4.5 1.253"
                        />

                    </svg>

                </div>

                <span class="text-xs font-medium text-slate-400">
                    +12.5%
                </span>

            </div>


            <p class="mt-5 text-sm text-slate-500">
                Total Courses
            </p>

            <h2 class="mt-1 text-3xl font-bold text-slate-900">
                128
            </h2>

            <div class="mt-4 flex items-center gap-2">

                <div class="flex-1 h-1.5 bg-slate-100 rounded-full overflow-hidden">

                    <div class="h-full w-[72%] bg-indigo-600 rounded-full"></div>

                </div>

                <span class="text-xs text-slate-400">
                    72%
                </span>

            </div>

        </div>


        {{-- Students --}}

        <div class="group bg-white rounded-2xl border border-slate-200
                    p-6 shadow-sm hover:shadow-lg hover:-translate-y-1
                    transition duration-300">

            <div class="flex items-center justify-between">

                <div class="w-12 h-12 rounded-xl bg-emerald-50
                            flex items-center justify-center">

                    <svg class="w-6 h-6 text-emerald-600"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M17 20h5v-2a4 4 0 00-4-4h-1
                               M9 20H4v-2a4 4 0 014-4h1
                               m4-10a4 4 0 110 8 4 4 0 000-8z"
                        />

                    </svg>

                </div>

                <span class="text-xs font-semibold text-emerald-600">
                    +8.2%
                </span>

            </div>


            <p class="mt-5 text-sm text-slate-500">
                Active Students
            </p>

            <h2 class="mt-1 text-3xl font-bold text-slate-900">
                2,540
            </h2>

            <p class="mt-4 text-xs text-slate-400">
                Compared to last month
            </p>

        </div>


        {{-- Instructors --}}

        <div class="group bg-white rounded-2xl border border-slate-200
                    p-6 shadow-sm hover:shadow-lg hover:-translate-y-1
                    transition duration-300">

            <div class="flex items-center justify-between">

                <div class="w-12 h-12 rounded-xl bg-violet-50
                            flex items-center justify-center">

                    <span class="text-xl">
                        🎓
                    </span>

                </div>

                <span class="text-xs font-semibold text-emerald-600">
                    +4.6%
                </span>

            </div>


            <p class="mt-5 text-sm text-slate-500">
                Instructors
            </p>

            <h2 class="mt-1 text-3xl font-bold text-slate-900">
                86
            </h2>

            <p class="mt-4 text-xs text-slate-400">
                12 new instructors this month
            </p>

        </div>


        {{-- Revenue --}}

        <div class="relative overflow-hidden rounded-2xl
                    bg-gradient-to-br from-indigo-600
                    via-indigo-600 to-violet-600
                    p-6 text-white shadow-xl
                    shadow-indigo-200">

            <div class="absolute -right-10 -top-10
                        w-32 h-32 rounded-full
                        bg-white/10"></div>

            <div class="relative">

                <div class="flex items-center justify-between">

                    <div class="w-12 h-12 rounded-xl bg-white/15
                                flex items-center justify-center">

                        <span class="text-xl font-bold">
                            $
                        </span>

                    </div>

                    <span class="text-xs text-indigo-100">
                        +15.3%
                    </span>

                </div>


                <p class="mt-5 text-sm text-indigo-100">
                    Total Revenue
                </p>

                <h2 class="mt-1 text-3xl font-bold">
                    $24,580
                </h2>

                <p class="mt-4 text-xs text-indigo-100">
                    This month
                </p>

            </div>

        </div>

    </div>


    {{-- ================= ANALYTICS ================= --}}

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">


        {{-- Revenue Chart --}}

        <div class="xl:col-span-2 bg-white rounded-2xl
                    border border-slate-200 shadow-sm p-6">

            <div class="flex items-center justify-between">

                <div>

                    <h2 class="text-lg font-bold text-slate-900">
                        Revenue Overview
                    </h2>

                    <p class="text-sm text-slate-400 mt-1">
                        Your revenue performance over time
                    </p>

                </div>


                <button
                    class="px-3 py-2 border border-slate-200
                           rounded-lg text-xs font-medium
                           text-slate-500 hover:border-indigo-300
                           hover:text-indigo-600 transition"
                >
                    Last 6 months
                </button>

            </div>


            {{-- Chart --}}

            <div class="mt-8 relative">

                <div class="absolute inset-0 flex flex-col
                            justify-between pointer-events-none">

                    <div class="border-t border-slate-100"></div>
                    <div class="border-t border-slate-100"></div>
                    <div class="border-t border-slate-100"></div>
                    <div class="border-t border-slate-100"></div>
                    <div class="border-t border-slate-100"></div>

                </div>


                <div class="relative h-64 flex items-end
                            justify-between gap-3 px-2">

                    @foreach([42,55,48,70,61,78,68,85,74,91,82,96] as $height)

                        <div class="group relative flex-1 h-full
                                    flex items-end">

                            <div
                                style="height: {{ $height }}%"
                                class="w-full max-w-8 mx-auto
                                       rounded-t-lg
                                       bg-gradient-to-t
                                       from-indigo-600
                                       to-indigo-400
                                       group-hover:from-violet-600
                                       group-hover:to-violet-400
                                       transition"
                            ></div>

                        </div>

                    @endforeach

                </div>


                <div class="mt-4 flex justify-between
                            text-xs text-slate-400">

                    <span>Jan</span>
                    <span>Feb</span>
                    <span>Mar</span>
                    <span>Apr</span>
                    <span>May</span>
                    <span>Jun</span>
                    <span>Jul</span>
                    <span>Aug</span>
                    <span>Sep</span>
                    <span>Oct</span>
                    <span>Nov</span>
                    <span>Dec</span>

                </div>

            </div>

        </div>


        {{-- Student Progress --}}

        <div class="bg-white rounded-2xl border border-slate-200
                    shadow-sm p-6">

            <h2 class="text-lg font-bold text-slate-900">
                Student Progress
            </h2>

            <p class="text-sm text-slate-400 mt-1">
                Overall learning progress
            </p>


            <div class="flex justify-center py-8">

                <div class="relative w-44 h-44">

                    <div class="absolute inset-0 rounded-full
                                border-[14px] border-slate-100">
                    </div>

                    <div
                        class="absolute inset-0 rounded-full
                               border-[14px] border-indigo-600
                               border-r-violet-500
                               border-b-indigo-200
                               rotate-[-45deg]"
                    ></div>

                    <div class="absolute inset-0 flex
                                flex-col items-center justify-center">

                        <span class="text-3xl font-bold text-slate-900">
                            74%
                        </span>

                        <span class="text-xs text-slate-400">
                            Completed
                        </span>

                    </div>

                </div>

            </div>


            <div class="space-y-4">

                <div class="flex justify-between items-center">

                    <div class="flex items-center gap-2">

                        <span class="w-2.5 h-2.5 rounded-full bg-indigo-600"></span>

                        <span class="text-sm text-slate-500">
                            Completed
                        </span>

                    </div>

                    <span class="text-sm font-semibold">
                        74%
                    </span>

                </div>


                <div class="flex justify-between items-center">

                    <div class="flex items-center gap-2">

                        <span class="w-2.5 h-2.5 rounded-full bg-violet-500"></span>

                        <span class="text-sm text-slate-500">
                            In Progress
                        </span>

                    </div>

                    <span class="text-sm font-semibold">
                        18%
                    </span>

                </div>


                <div class="flex justify-between items-center">

                    <div class="flex items-center gap-2">

                        <span class="w-2.5 h-2.5 rounded-full bg-slate-200"></span>

                        <span class="text-sm text-slate-500">
                            Not Started
                        </span>

                    </div>

                    <span class="text-sm font-semibold">
                        8%
                    </span>

                </div>

            </div>

        </div>

    </div>


    {{-- ================= COURSES + ACTIVITY ================= --}}

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">


        {{-- Popular Courses --}}

        <div class="xl:col-span-2 bg-white rounded-2xl
                    border border-slate-200 shadow-sm overflow-hidden">

            <div class="px-6 py-5 border-b border-slate-200
                        flex items-center justify-between">

                <div>

                    <h2 class="text-lg font-bold text-slate-900">
                        Popular Courses
                    </h2>

                    <p class="text-sm text-slate-400 mt-1">
                        Most enrolled courses
                    </p>

                </div>

                <a href="#"
                   class="text-sm font-semibold text-indigo-600
                          hover:text-indigo-700">
                    View all
                </a>

            </div>


            <div class="divide-y divide-slate-100">


                {{-- Course 1 --}}

                <div class="p-5 flex items-center gap-4
                            hover:bg-slate-50 transition">

                    <div class="w-14 h-14 rounded-xl
                                bg-indigo-50 flex items-center
                                justify-center text-2xl">
                        💻
                    </div>

                    <div class="flex-1">

                        <h3 class="font-semibold text-slate-800">
                            Complete Laravel Course
                        </h3>

                        <p class="text-xs text-slate-400 mt-1">
                            Web Development · 42 Lessons
                        </p>

                    </div>

                    <div class="text-right">

                        <p class="font-bold text-slate-800">
                            320
                        </p>

                        <p class="text-xs text-slate-400">
                            Students
                        </p>

                    </div>

                </div>


                {{-- Course 2 --}}

                <div class="p-5 flex items-center gap-4
                            hover:bg-slate-50 transition">

                    <div class="w-14 h-14 rounded-xl
                                bg-violet-50 flex items-center
                                justify-center text-2xl">
                        🎨
                    </div>

                    <div class="flex-1">

                        <h3 class="font-semibold text-slate-800">
                            UI/UX Design Masterclass
                        </h3>

                        <p class="text-xs text-slate-400 mt-1">
                            Design · 36 Lessons
                        </p>

                    </div>

                    <div class="text-right">

                        <p class="font-bold text-slate-800">
                            275
                        </p>

                        <p class="text-xs text-slate-400">
                            Students
                        </p>

                    </div>

                </div>


                {{-- Course 3 --}}

                <div class="p-5 flex items-center gap-4
                            hover:bg-slate-50 transition">

                    <div class="w-14 h-14 rounded-xl
                                bg-emerald-50 flex items-center
                                justify-center text-2xl">
                        📊
                    </div>

                    <div class="flex-1">

                        <h3 class="font-semibold text-slate-800">
                            Data Analysis with Python
                        </h3>

                        <p class="text-xs text-slate-400 mt-1">
                            Data Science · 51 Lessons
                        </p>

                    </div>

                    <div class="text-right">

                        <p class="font-bold text-slate-800">
                            241
                        </p>

                        <p class="text-xs text-slate-400">
                            Students
                        </p>

                    </div>

                </div>


                {{-- Course 4 --}}

                <div class="p-5 flex items-center gap-4
                            hover:bg-slate-50 transition">

                    <div class="w-14 h-14 rounded-xl
                                bg-orange-50 flex items-center
                                justify-center text-2xl">
                        ⚛️
                    </div>

                    <div class="flex-1">

                        <h3 class="font-semibold text-slate-800">
                            React From Zero to Hero
                        </h3>

                        <p class="text-xs text-slate-400 mt-1">
                            Frontend · 44 Lessons
                        </p>

                    </div>

                    <div class="text-right">

                        <p class="font-bold text-slate-800">
                            198
                        </p>

                        <p class="text-xs text-slate-400">
                            Students
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- Recent Activity --}}

        <div class="bg-white rounded-2xl
                    border border-slate-200 shadow-sm">

            <div class="px-6 py-5 border-b border-slate-200">

                <h2 class="text-lg font-bold text-slate-900">
                    Recent Activity
                </h2>

                <p class="text-sm text-slate-400 mt-1">
                    Latest platform activity
                </p>

            </div>


            <div class="p-6 space-y-6">


                <div class="flex gap-3">

                    <div class="w-10 h-10 rounded-full bg-indigo-50
                                flex items-center justify-center shrink-0">
                        👤
                    </div>

                    <div>

                        <p class="text-sm text-slate-600">
                            <span class="font-semibold text-slate-900">
                                Ahmed
                            </span>

                            enrolled in Laravel Course.
                        </p>

                        <p class="text-xs text-slate-400 mt-1">
                            10 minutes ago
                        </p>

                    </div>

                </div>


                <div class="flex gap-3">

                    <div class="w-10 h-10 rounded-full bg-emerald-50
                                flex items-center justify-center shrink-0">
                        ✓
                    </div>

                    <div>

                        <p class="text-sm text-slate-600">
                            A new course was published.
                        </p>

                        <p class="text-xs text-slate-400 mt-1">
                            35 minutes ago
                        </p>

                    </div>

                </div>


                <div class="flex gap-3">

                    <div class="w-10 h-10 rounded-full bg-amber-50
                                flex items-center justify-center shrink-0">
                        ⭐
                    </div>

                    <div>

                        <p class="text-sm text-slate-600">
                            You received a new 5-star review.
                        </p>

                        <p class="text-xs text-slate-400 mt-1">
                            1 hour ago
                        </p>

                    </div>

                </div>


                <div class="flex gap-3">

                    <div class="w-10 h-10 rounded-full bg-violet-50
                                flex items-center justify-center shrink-0">
                        🎓
                    </div>

                    <div>

                        <p class="text-sm text-slate-600">
                            Sara completed UI/UX Design.
                        </p>

                        <p class="text-xs text-slate-400 mt-1">
                            2 hours ago
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ================= CTA ================= --}}

    <div class="relative overflow-hidden rounded-2xl
                bg-gradient-to-r from-slate-950
                via-indigo-950 to-indigo-900
                p-7 lg:p-9 text-white">

        <div class="absolute -right-20 -top-20
                    w-64 h-64 rounded-full
                    bg-indigo-500/10 blur-3xl">
        </div>

        <div class="relative flex flex-col lg:flex-row
                    lg:items-center lg:justify-between gap-6">

            <div>

                <span class="inline-flex px-3 py-1 rounded-full
                             bg-white/10 text-indigo-200
                             text-xs font-medium">
                    Platform Management
                </span>

                <h2 class="mt-4 text-2xl font-bold">
                    Grow your learning platform 🚀
                </h2>

                <p class="mt-2 text-sm text-slate-300 max-w-xl">
                    Create engaging courses, manage your instructors
                    and keep track of student performance.
                </p>

            </div>


            <div class="flex gap-3">

                <a
                    href="#"
                    class="px-5 py-3 bg-white text-indigo-700
                           rounded-xl text-sm font-semibold
                           hover:bg-indigo-50 transition"
                >
                    Add Course
                </a>

                <a
                    href="#"
                    class="px-5 py-3 bg-white/10
                           border border-white/10 rounded-xl
                           text-sm font-semibold
                           hover:bg-white/20 transition"
                >
                    Reports
                </a>

            </div>

        </div>

    </div>

</div>

@endsection
