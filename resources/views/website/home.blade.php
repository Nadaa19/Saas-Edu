
@extends('website.layout.main')
@section('home')
{{-- ================= HERO ================= --}}

<section class="relative overflow-hidden bg-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div
            class="grid lg:grid-cols-2
                   gap-14
                   items-center
                   min-h-[650px]
                   py-20"
        >


            {{-- Hero Content --}}

            <div>

                <div
                    class="inline-flex items-center gap-2
                           px-4 py-2
                           bg-indigo-50
                           text-indigo-600
                           rounded-full
                           text-xs font-semibold
                           mb-6"
                >

                    <span
                        class="w-2 h-2
                               bg-indigo-600
                               rounded-full"
                    ></span>

                    Start learning today

                </div>


                <h2
                    class="text-5xl lg:text-6xl
                           font-extrabold
                           tracking-tight
                           leading-tight
                           text-slate-900"
                >

                    Learn Skills.
                    <span class="text-indigo-600">
                        Build Your Future.
                    </span>

                </h2>


                <p
                    class="mt-6
                           text-lg
                           leading-8
                           text-slate-500
                           max-w-xl"
                >
                    Discover high-quality courses designed to help
                    you learn practical skills, improve your knowledge,
                    and achieve your goals.
                </p>


                <div class="mt-8 flex flex-wrap gap-4">

                    <a
                        href="courses"
                        class="px-7 py-3.5
                               bg-indigo-600
                               text-white
                               rounded-xl
                               text-sm font-semibold
                               shadow-xl shadow-indigo-200
                               hover:bg-indigo-700
                               transition"
                    >
                        Explore Courses
                    </a>

                    <a
                        href="about"
                        class="px-7 py-3.5
                               bg-white
                               border border-slate-200
                               text-slate-700
                               rounded-xl
                               text-sm font-semibold
                               hover:border-indigo-300
                               hover:text-indigo-600
                               transition"
                    >
                        Learn More
                    </a>

                </div>


                {{-- Stats --}}

                <div
                    class="mt-12
                           flex flex-wrap
                           items-center gap-8"
                >

                    <div>

                        <p class="text-2xl font-bold text-slate-900">
                            500+
                        </p>

                        <p class="text-sm text-slate-400">
                            Students
                        </p>

                    </div>


                    <div class="w-px h-10 bg-slate-200"></div>


                    <div>

                        <p class="text-2xl font-bold text-slate-900">
                            50+
                        </p>

                        <p class="text-sm text-slate-400">
                            Courses
                        </p>

                    </div>


                    <div class="w-px h-10 bg-slate-200"></div>


                    <div>

                        <p class="text-2xl font-bold text-slate-900">
                            20+
                        </p>

                        <p class="text-sm text-slate-400">
                            Expert Teachers
                        </p>

                    </div>

                </div>

            </div>



            {{-- Hero Visual --}}

            <div class="relative">

                <div
                    class="absolute
                           -top-10
                           -right-10
                           w-72 h-72
                           bg-indigo-100
                           rounded-full
                           blur-3xl
                           opacity-70"
                ></div>

                <div
                    class="absolute
                           -bottom-10
                           -left-10
                           w-72 h-72
                           bg-blue-100
                           rounded-full
                           blur-3xl
                           opacity-70"
                ></div>


                <div
                    class="relative
                           bg-slate-100
                           rounded-[2rem]
                           p-5
                           shadow-2xl
                           shadow-slate-200"
                >

                    <div
                        class="aspect-[4/3]
                               rounded-[1.5rem]
                               bg-gradient-to-br
                               from-indigo-500
                               to-blue-600
                               flex items-center justify-center
                               overflow-hidden"
                    >

                        <div class="text-center text-white">

                            <div
                                class="w-24 h-24
                                       mx-auto
                                       bg-white/20
                                       backdrop-blur
                                       rounded-3xl
                                       flex items-center justify-center
                                       mb-6"
                            >

                                <svg
                                    class="w-12 h-12"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.868v4.264a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                    />

                                </svg>

                            </div>


                            <h3 class="text-2xl font-bold">
                                Start Learning
                            </h3>

                            <p class="mt-2 text-white/70 text-sm">
                                Anytime. Anywhere.
                            </p>

                        </div>

                    </div>


                    {{-- Floating Card --}}

                    <div
                        class="absolute
                               -bottom-6
                               -left-6
                               bg-white
                               rounded-2xl
                               shadow-xl
                               p-4
                               flex items-center gap-3"
                    >

                        <div
                            class="w-11 h-11
                                   bg-emerald-50
                                   text-emerald-600
                                   rounded-xl
                                   flex items-center justify-center"
                        >

                            ✓

                        </div>

                        <div>

                            <p class="text-xs text-slate-400">
                                Learning Progress
                            </p>

                            <p class="text-sm font-bold text-slate-800">
                                Keep going!
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- ================= COURSES ================= --}}

<section
    id="courses"
    class="py-24 bg-slate-50"
>

    <div class="max-w-7xl mx-auto px-6 lg:px-8">


        {{-- Section Header --}}

        <div
            class="flex flex-col md:flex-row
                   md:items-end
                   md:justify-between
                   gap-6
                   mb-12"
        >

            <div>

                <span
                    class="text-xs font-bold
                           uppercase tracking-widest
                           text-indigo-600"
                >
                    Our Courses
                </span>

                <h2
                    class="mt-3
                           text-3xl md:text-4xl
                           font-extrabold
                           text-slate-900"
                >
                    Explore Popular Courses
                </h2>

                <p
                    class="mt-3
                           text-slate-500
                           max-w-xl"
                >
                    Learn from carefully designed courses
                    and build skills that matter.
                </p>

            </div>


            <a
                href="courses"
                class="text-sm font-semibold
                       text-indigo-600
                       hover:text-indigo-700
                       transition"
            >
                View All Courses →
            </a>

        </div>



        {{-- Course Cards --}}

        <div
            class="grid
                   sm:grid-cols-2
                   lg:grid-cols-3
                   gap-7"
        >


            {{-- Course 1 --}}

            @foreach ($courses as $key=> $value )
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
                               flex items-center justify-center"
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
                        class="flex items-center
                               justify-between
                               text-xs text-slate-400"
                    >

                        <span>
                            {{$value->lessons()->count()}} lessons
                        </span>

                        <span>
                            Beginner
                        </span>

                    </div>


                    <h3
                        class="mt-3
                               text-lg
                               font-bold
                               text-slate-900"
                    >
                    {{ $value->name}}
                </h3>


                    <p
                        class="mt-2
                               text-sm
                               text-slate-500
                               line-clamp-2"
                    >
                                            {{ $value->description}}

                    </p>


                    <div
                        class="mt-5
                               pt-5
                               border-t border-slate-100
                               flex items-center
                               justify-between"
                    >

                        <div>

                            <p class="text-xs text-slate-400">
                                Course Price
                            </p>

                            <p
                                class="text-xl
                                       font-extrabold
                                       text-indigo-600"
                            >
                                ${{$value->price}}
                            </p>

                        </div>


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

    </div>

</section>



{{-- ================= WHY US ================= --}}

<section
    id="about"
    class="py-24 bg-white"
>

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div
            class="grid lg:grid-cols-2
                   gap-16
                   items-center"
        >


            <div>

                <span
                    class="text-xs font-bold
                           uppercase tracking-widest
                           text-indigo-600"
                >
                    Why EduLearn
                </span>


                <h2
                    class="mt-4
                           text-3xl md:text-4xl
                           font-extrabold
                           text-slate-900
                           leading-tight"
                >
                    Everything You Need
                    to Learn Better
                </h2>


                <p
                    class="mt-5
                           text-slate-500
                           leading-7"
                >
                    Our platform gives students access to practical
                    courses, experienced teachers, and an easy
                    learning experience.
                </p>


                <div class="mt-8 space-y-6">


                    <div class="flex gap-4">

                        <div
                            class="shrink-0
                                   w-12 h-12
                                   bg-indigo-50
                                   text-indigo-600
                                   rounded-xl
                                   flex items-center
                                   justify-center
                                   font-bold"
                        >
                            ✓
                        </div>

                        <div>

                            <h3
                                class="font-bold text-slate-900"
                            >
                                Learn at Your Own Pace
                            </h3>

                            <p
                                class="mt-1
                                       text-sm
                                       text-slate-500"
                            >
                                Access your courses whenever
                                and wherever you want.
                            </p>

                        </div>

                    </div>


                    <div class="flex gap-4">

                        <div
                            class="shrink-0
                                   w-12 h-12
                                   bg-indigo-50
                                   text-indigo-600
                                   rounded-xl
                                   flex items-center
                                   justify-center
                                   font-bold"
                        >
                            ✓
                        </div>

                        <div>

                            <h3
                                class="font-bold text-slate-900"
                            >
                                Expert Teachers
                            </h3>

                            <p
                                class="mt-1
                                       text-sm
                                       text-slate-500"
                            >
                                Learn from instructors with
                                practical experience.
                            </p>

                        </div>

                    </div>


                    <div class="flex gap-4">

                        <div
                            class="shrink-0
                                   w-12 h-12
                                   bg-indigo-50
                                   text-indigo-600
                                   rounded-xl
                                   flex items-center
                                   justify-center
                                   font-bold"
                        >
                            ✓
                        </div>

                        <div>

                            <h3
                                class="font-bold text-slate-900"
                            >
                                Practical Courses
                            </h3>

                            <p
                                class="mt-1
                                       text-sm
                                       text-slate-500"
                            >
                                Focus on skills that you can
                                actually use in real projects.
                            </p>

                        </div>

                    </div>

                </div>

            </div>



            <div
                class="bg-slate-50
                       rounded-[2rem]
                       p-8
                       border border-slate-100"
            >

                <div
                    class="grid grid-cols-2
                           gap-5"
                >

                    <div
                        class="bg-white
                               rounded-2xl
                               p-6
                               shadow-sm"
                    >

                        <p
                            class="text-3xl
                                   font-extrabold
                                   text-indigo-600"
                        >
                            50+
                        </p>

                        <p
                            class="mt-2
                                   text-sm
                                   text-slate-500"
                        >
                            Professional Courses
                        </p>

                    </div>


                    <div
                        class="bg-white
                               rounded-2xl
                               p-6
                               shadow-sm
                               mt-8"
                    >

                        <p
                            class="text-3xl
                                   font-extrabold
                                   text-indigo-600"
                        >
                            20+
                        </p>

                        <p
                            class="mt-2
                                   text-sm
                                   text-slate-500"
                        >
                            Expert Teachers
                        </p>

                    </div>


                    <div
                        class="bg-white
                               rounded-2xl
                               p-6
                               shadow-sm"
                    >

                        <p
                            class="text-3xl
                                   font-extrabold
                                   text-indigo-600"
                        >
                            500+
                        </p>

                        <p
                            class="mt-2
                                   text-sm
                                   text-slate-500"
                        >
                            Happy Students
                        </p>

                    </div>


                    <div
                        class="bg-white
                               rounded-2xl
                               p-6
                               shadow-sm
                               mt-8"
                    >

                        <p
                            class="text-3xl
                                   font-extrabold
                                   text-indigo-600"
                        >
                            4.9
                        </p>

                        <p
                            class="mt-2
                                   text-sm
                                   text-slate-500"
                        >
                            Average Rating
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- ================= CTA ================= --}}

<section class="py-20 bg-indigo-600">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <h2
            class="text-3xl md:text-4xl
                   font-extrabold
                   text-white"
        >
            Ready to Start Learning?
        </h2>


        <p
            class="mt-4
                   text-indigo-100
                   max-w-2xl
                   mx-auto"
        >
            Choose your course and start building
            the skills you need for your future.
        </p>


        <a
            href="#courses"
            class="inline-flex
                   mt-8
                   px-7 py-3.5
                   bg-white
                   text-indigo-600
                   rounded-xl
                   text-sm font-bold
                   shadow-xl
                   hover:bg-slate-50
                   transition"
        >
            Browse Courses
        </a>

    </div>

</section>

@endsection

