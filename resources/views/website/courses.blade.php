@extends('website.layout.main')
@section('home')

{{-- ================= PAGE HEADER ================= --}}

<section class="bg-white border-b border-slate-100">

    <div
        class="max-w-7xl mx-auto
               px-6 lg:px-8
               py-16"
    >

        <span
            class="text-xs font-bold
                   uppercase tracking-widest
                   text-indigo-600"
        >
            Browse Courses
        </span>


        <h2
            class="mt-3
                   text-4xl
                   font-extrabold
                   text-slate-900"
        >
            Find the Right Course for You
        </h2>


        <p
            class="mt-4
                   text-slate-500
                   max-w-2xl"
        >
            Explore our collection of courses and start
            learning skills that will help you grow.
        </p>


        {{-- Search --}}

        <div class="mt-8 max-w-2xl relative">

            <input
                type="text"
                placeholder="Search for a course..."
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



{{-- ================= COURSES ================= --}}

<section class="py-16">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">


        {{-- Filters --}}

        <div
            class="flex flex-wrap
                   items-center gap-3
                   mb-10"
        >

            <button
                class="px-5 py-2.5
                       bg-indigo-600
                       text-white
                       rounded-xl
                       text-sm font-semibold"
            >
                All Courses
            </button>


            @foreach ($subjects as $subjects)
            <button
                class="px-5 py-2.5 bg-white border border-slate-200 text-slate-600 rounded-xl text-sm font-medium hover:border-indigo-300 hover:text-indigo-600 transition"
            >
                {{$subjects->name}}
            </button>


            @endforeach





        </div>



        {{-- Course Grid --}}

        <div
            class="grid
                   sm:grid-cols-2
                   lg:grid-cols-3
                   gap-7"
        >


            {{-- Course 1 --}}

            @foreach ($allCourses as $key=>$value )
             <div
                class="bg-white
                       rounded-2xl
                       overflow-hidden
                       border border-slate-200
                       shadow-sm
                       hover:shadow-xl
                       hover:-translate-y-1
                       transition duration-300"
            >

                <div class="relative">

                    <div
                        class="h-52
                               bg-gradient-to-br
                               from-orange-400
                               to-red-500
                               flex items-center
                               justify-center"
                    >

                       <img src="{{asset('storage/' . $value->img)}}" alt="">

                    </div>


                    <span
                        class="absolute top-4 left-4
                               px-3 py-1.5
                               bg-white
                               rounded-lg
                               text-xs font-bold
                               text-slate-700
                               shadow"
                    >
                        {{$value->subject->name}}
                    </span>

                </div>


                <div class="p-6">

                    <div
                        class="flex justify-between
                               text-xs text-slate-400"
                    >

                            {{$value->lessons()->count()}} lessons
                        <span></span>



                    </div>


                    <h3
                        class="mt-3
                               text-lg
                               font-bold
                               text-slate-900"
                    >
                                                                   {{ $value->name}}

                    </h3>


                    <div
                        class="mt-3
                               flex items-center gap-2"
                    >

                        <div

                        >
                        Instractor Name :

                        </div>

                        <span
                            class="text-sm
                                   text-slate-500"
                        >
                                            {{ $value->teacher->name}}

                        </span>

                    </div>


                    <div
                        class="mt-5
                               pt-5
                               border-t
                               border-slate-100
                               flex items-center
                               justify-between"
                    >

                        <span
                            class="text-xl
                                   font-extrabold
                                   text-indigo-600"
                        >
                            $ {{ $value->price}}

                        </span>


                        <a
                            href="{{route('course.details' , $value->id)}}"
                            class="px-4 py-2.5
                                   bg-indigo-50
                                   text-indigo-600
                                   rounded-xl
                                   text-xs font-bold
                                   hover:bg-indigo-600
                                   hover:text-white
                                   transition"
                        >
                            View Course
                        </a>

                    </div>

                </div>

            </div>

            @endforeach











        </div>
    
{{-- ================= PAGINATION ================= --}}

@if ($allCourses->hasPages())

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
