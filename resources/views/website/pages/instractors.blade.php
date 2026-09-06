@extends('website.layout.main')

@section('home')

{{-- ================= PAGE HEADER ================= --}}

<section class="bg-white border-b border-slate-100">

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">

        <span
            class="text-xs font-bold
                   uppercase tracking-widest
                   text-indigo-600"
        >
            Our Instructors
        </span>


        <h1
            class="mt-3
                   text-4xl
                   lg:text-5xl
                   font-extrabold
                   tracking-tight
                   text-slate-900"
        >
            Learn from Expert Instructors
        </h1>


        <p
            class="mt-4
                   max-w-2xl
                   text-base
                   leading-7
                   text-slate-500"
        >
            Meet our experienced instructors and discover the
            knowledge, skills, and experience they bring to
            every course.
        </p>


        {{-- Search --}}

        <div class="mt-8 max-w-2xl relative">

            <input
                type="text"
                placeholder="Search for an instructor..."
                class="w-full
                       pl-12 pr-5 py-4
                       bg-slate-50
                       border border-slate-200
                       rounded-2xl
                       text-sm
                       outline-none
                       focus:bg-white
                       focus:border-indigo-500
                       focus:ring-4
                       focus:ring-indigo-500/10
                       transition"
            >


            <svg
                class="absolute left-4 top-1/2
                       -translate-y-1/2
                       w-5 h-5
                       text-slate-400"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.8"
                    d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 11-16 0 8 8 0 0116 0z"
                />

            </svg>

        </div>

    </div>

</section>



{{-- ================= INSTRUCTORS ================= --}}

<section class="py-16 bg-slate-50">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">


        {{-- Section Top --}}

        <div
            class="flex flex-col
                   sm:flex-row
                   sm:items-end
                   sm:justify-between
                   gap-4
                   mb-10"
        >

            <div>

                <h2
                    class="text-2xl
                           font-extrabold
                           text-slate-900"
                >
                    Our Instructors
                </h2>

                <p
                    class="mt-1
                           text-sm
                           text-slate-400"
                >
                    Experienced professionals ready to help you learn.
                </p>

            </div>


            <span
                class="self-start
                       sm:self-auto
                       px-4 py-2
                       bg-white
                       border border-slate-200
                       rounded-xl
                       text-xs
                       font-semibold
                       text-slate-500"
            >
                20+ Instructors
            </span>

        </div>



        {{-- ================= INSTRUCTOR GRID ================= --}}

        <div
            class="grid
                   sm:grid-cols-2
                   lg:grid-cols-3
                   gap-7"
        >


            @foreach ($instractors as  $key=>$value)

              <div
                class="group
                       bg-white
                       rounded-3xl
                       border border-slate-200
                       overflow-hidden
                       shadow-sm
                       hover:shadow-xl
                       hover:-translate-y-1
                       transition duration-300"
            >

                {{-- Cover --}}

                <div
                    class="h-28
                           bg-gradient-to-br
                           from-indigo-500
                           to-blue-600
                           relative"
                >

                    <div
                        class="absolute
                               -top-10
                               -right-10
                               w-32 h-32
                               rounded-full
                               bg-white/10"
                    ></div>

                </div>


                {{-- Content --}}

                <div class="px-6 pb-6">


                    {{-- Avatar --}}

                    <div
                        class="-mt-14
                               relative
                               w-24 h-24
                               rounded-2xl
                               bg-white
                               border-4
                               border-white
                               shadow-lg
                               flex items-center
                               justify-center
                               overflow-hidden"
                    >

                        <img
                            src="{{asset('storage/' . $value->img)}}"
                            class="w-full h-full object-cover"
                            alt="{{$value->name}}"
                        >

                    </div>


                    <div class="mt-4">

                        <div
                            class="flex items-center
                                   justify-between
                                   gap-3"
                        >

                            <h3
                                class="text-lg
                                       font-bold
                                       text-slate-900"
                            >
                               {{$value->name}}
                            </h3>


                            <span
                                class="text-xs
                                       text-emerald-600
                                       font-semibold"
                            >
                                ● Verified
                            </span>

                        </div>


                        <p
                            class="mt-1
                                   text-sm
                                   font-medium
                                   text-indigo-600"
                        >
                           {{$value->subject->name}}
                        </p>


                        <p
                            class="mt-4
                                   text-sm
                                   leading-6
                                   text-slate-500"
                        >
                            {{$value->bio}}
                        </p>


                        {{-- Stats --}}

                        <div
                            class="mt-6
                                   pt-5
                                   border-t border-slate-100
                                   grid grid-cols-3"
                        >







                            <div>

                                <p
                                    class="text-lg
                                           font-bold
                                           text-slate-900"
                                >
                                    ★ 4.9
                                </p>

                                <p
                                    class="text-xs
                                           text-slate-400"
                                >
                                    Rating
                                </p>

                            </div>

                        </div>


                        {{-- Button --}}

                        <a
                            href=""
                            class="mt-6
                                   flex items-center
                                   justify-center
                                   w-full
                                   py-3
                                   rounded-xl
                                   bg-indigo-50
                                   text-indigo-600
                                   text-sm
                                   font-bold
                                   group-hover:bg-indigo-600
                                   group-hover:text-white
                                   transition"
                        >
                            View Profile
                        </a>

                    </div>

                </div>

            </div>


            @endforeach








        </div>


{{-- ================= PAGINATION ================= --}}

@if ($instractors->hasPages())

    <div
        class="mt-14
               pt-8
               border-t border-slate-100
               flex flex-col
               sm:flex-row
               items-center
               justify-between
               gap-5"
    >

        {{-- Results Count --}}

        <p class="text-sm text-slate-500">

            Showing
            <span class="font-semibold text-slate-800">
                {{ $allCourses->firstItem() }}
            </span>

            -

            <span class="font-semibold text-slate-800">
                {{ $allCourses->lastItem() }}
            </span>

            of

            <span class="font-semibold text-slate-800">
                {{ $allCourses->total() }}
            </span>

            courses

        </p>


        {{-- Pagination --}}

        <div class="flex items-center gap-2">

            {{-- Previous --}}

            @if ($allCourses->onFirstPage())

                <span
                    class="w-10 h-10
                           flex items-center justify-center
                           rounded-xl
                           border border-slate-200
                           bg-slate-50
                           text-slate-300"
                >
                    ←
                </span>

            @else

                <a
                    href="{{ $allCourses->previousPageUrl() }}"
                    class="w-10 h-10
                           flex items-center justify-center
                           rounded-xl
                           border border-slate-200
                           bg-white
                           text-slate-500
                           hover:border-indigo-300
                           hover:text-indigo-600
                           transition"
                >
                    ←
                </a>

            @endif


            {{-- Page Numbers --}}

            @foreach ($allCourses->getUrlRange(1, $allCourses->lastPage()) as $page => $url)

                @if ($page == $allCourses->currentPage())

                    <span
                        class="w-10 h-10
                               flex items-center justify-center
                               rounded-xl
                               bg-indigo-600
                               text-white
                               text-sm font-bold
                               shadow-lg shadow-indigo-100"
                    >
                        {{ $page }}
                    </span>

                @else

                    <a
                        href="{{ $url }}"
                        class="w-10 h-10
                               flex items-center justify-center
                               rounded-xl
                               border border-slate-200
                               bg-white
                               text-slate-600
                               text-sm font-semibold
                               hover:border-indigo-300
                               hover:text-indigo-600
                               transition"
                    >
                        {{ $page }}
                    </a>

                @endif

            @endforeach


            {{-- Next --}}

            @if ($allCourses->hasMorePages())

                <a
                    href="{{ $allCourses->nextPageUrl() }}"
                    class="w-10 h-10
                           flex items-center justify-center
                           rounded-xl
                           border border-slate-200
                           bg-white
                           text-slate-500
                           hover:border-indigo-300
                           hover:text-indigo-600
                           transition"
                >
                    →
                </a>

            @else

                <span
                    class="w-10 h-10
                           flex items-center justify-center
                           rounded-xl
                           border border-slate-200
                           bg-slate-50
                           text-slate-300"
                >
                    →
                </span>

            @endif

        </div>

    </div>

@endif




    </div>

</section>

@endsection
