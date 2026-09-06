@extends('website.layout.main')

@section('home')

{{-- ================= COURSE DETAILS ================= --}}

<section class="min-h-screen bg-slate-50 py-16">

    <div class="max-w-6xl mx-auto px-6 lg:px-8">

        {{-- Back --}}

        <a
            href="/home"
            class="inline-flex items-center gap-2
                   text-sm font-semibold
                   text-slate-500
                   hover:text-indigo-600
                   transition mb-8"
        >
            ← Back to Courses
        </a>
        @if(session('error'))
    <div class="mb-6 flex items-center gap-3 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700">

        <svg
            class="h-5 w-5 flex-shrink-0"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"
            />
        </svg>

        <p class="font-medium">
            {{ session('error') }}
        </p>

    </div>
@endif


        {{-- ================= TOP ================= --}}

        <div
            class="grid lg:grid-cols-5
                   gap-10
                   items-start"
        >

            {{-- ================= IMAGE ================= --}}

            <div class="lg:col-span-3">

                <div
                    class="relative
                           overflow-hidden
                           rounded-3xl
                           bg-gradient-to-br
                           from-indigo-600
                           via-indigo-500
                           to-blue-500
                           aspect-[16/10]
                           shadow-xl"
                >

                   <img src="{{asset('storage/'. $course[0]['img'])}}" alt="">

                </div>


                {{-- ================= COURSE INFO ================= --}}

                <div class="mt-8">

                    <span
                        class="inline-flex
                               px-3 py-1.5
                               rounded-lg
                               bg-indigo-50
                               text-indigo-600
                               text-xs
                               font-bold"
                    >
                        {{$course[0]->subject->name}}
                    </span>


                    <h1
                        class="mt-4
                               text-4xl
                               font-extrabold
                               tracking-tight
                               text-slate-900"
                    >
                   {{$course[0]->name}}

                    </h1>


                    <p
                        class="mt-5
                               text-base
                               leading-7
                               text-slate-500"
                    >
                        {{$course[0]->name}}

                    </p>


                    {{-- Meta --}}

                    <div
                        class="mt-7
                               flex flex-wrap
                               gap-6"
                    >

                        <div class="flex items-center gap-2">

                            <span class="text-yellow-500">
                                ★
                            </span>

                            <strong
                                class="text-sm
                                       text-slate-800"
                            >
                                4.9
                            </strong>

                            <span
                                class="text-sm
                                       text-slate-400"
                            >
                                (120 ratings)
                            </span>

                        </div>


                        <div
                            class="text-sm
                                   text-slate-400"
                        >
                            •
                        </div>







                        <div
                            class="text-sm
                                   text-slate-500"
                        >
                        {{$course[0]->lessons()->count()}} lessons

                        </div>

                    </div>

                </div>

            </div>



            {{-- ================= BUY CARD ================= --}}

            <div
                class="lg:col-span-2
                       lg:sticky
                       lg:top-24"
            >

                <div
                    class="bg-white
                           rounded-3xl
                           border border-slate-200
                           shadow-xl
                           p-7"
                >

                    <p
                        class="text-sm
                               font-semibold
                               text-slate-400"
                    >
                        Course Price
                    </p>


                    <div
                        class="mt-2
                               flex items-end
                               gap-3"
                    >

                        <span
                            class="text-4xl
                                   font-black
                                   text-slate-900"
                        >
                            $ {{$course[0]->price}}

                        </span>



                    </div>


                    <div
                        class="mt-3
                               inline-flex
                               px-3 py-1
                               rounded-lg
                               bg-emerald-50
                               text-emerald-600
                               text-xs
                               font-bold"
                    >
                        Limited Offer
                    </div>


                    {{-- Buy Button --}}

                    <a
                         href="{{route('checkout' , $course[0]->id
                          )}}"
                        class="mt-7
                               flex
                               items-center
                               justify-center
                               w-full
                               py-4
                               rounded-2xl
                               bg-indigo-600
                               text-white
                               text-sm
                               font-bold
                               shadow-lg
                               shadow-indigo-200
                               hover:bg-indigo-700
                               hover:-translate-y-0.5
                               transition"
                    >
                        Buy Course
                    </a>


                    <p
                        class="mt-3
                               text-center
                               text-xs
                               text-slate-400"
                    >
                        Secure checkout • Instant access
                    </p>


                    {{-- Includes --}}

                    <div
                        class="mt-8
                               pt-7
                               border-t
                               border-slate-100"
                    >

                        <h3
                            class="text-sm
                                   font-bold
                                   text-slate-900"
                        >
                            This course includes
                        </h3>


                        <div
                            class="mt-5
                                   space-y-4"
                        >

                            <div class="flex gap-3">

                                <span
                                    class="w-9 h-9
                                           rounded-xl
                                           bg-indigo-50
                                           text-indigo-600
                                           flex items-center
                                           justify-center"
                                >
                                    ▶
                                </span>

                                <div>

                                    <p
                                        class="text-sm
                                               font-semibold
                                               text-slate-800"
                                    >
                                      {{$course[0]->lessons()->count()}} Lessons
                                    </p>

                                    <p
                                        class="text-xs
                                               text-slate-400
                                               mt-1"
                                    >
                                        High-quality video content
                                    </p>

                                </div>

                            </div>





                            <div class="flex gap-3">

                                <span
                                    class="w-9 h-9
                                           rounded-xl
                                           bg-indigo-50
                                           text-indigo-600
                                           flex items-center
                                           justify-center"
                                >
                                    ✓
                                </span>

                                <div>

                                    <p
                                        class="text-sm
                                               font-semibold
                                               text-slate-800"
                                    >
                                        Certificate
                                    </p>

                                    <p
                                        class="text-xs
                                               text-slate-400
                                               mt-1"
                                    >
                                        Certificate after completion
                                    </p>

                                </div>

                            </div>


                            <div class="flex gap-3">

                                <span
                                    class="w-9 h-9
                                           rounded-xl
                                           bg-indigo-50
                                           text-indigo-600
                                           flex items-center
                                           justify-center"
                                >
                                    ∞
                                </span>

                                <div>

                                    <p
                                        class="text-sm
                                               font-semibold
                                               text-slate-800"
                                    >
                                        Lifetime Access
                                    </p>

                                    <p
                                        class="text-xs
                                               text-slate-400
                                               mt-1"
                                    >
                                        Access whenever you want
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>







    </div>

</section>

@endsection
