@extends('website.layout.main')

@section('home')

<div class="min-h-screen bg-gray-50 px-4 py-12">

    <div class="mx-auto max-w-5xl">

        {{-- Course Header --}}
        <div class="mb-8 rounded-2xl bg-white p-6 shadow-sm">

            <div class="flex flex-col gap-6 sm:flex-row sm:items-center">

                <img
                    src="{{ asset('storage/' . $lessons->img) }}"
                    alt="Course"
                    class="h-32 w-full rounded-xl object-cover sm:h-24 sm:w-40"
                >

                <div>
                    <h1 class="text-3xl font-bold text-gray-900">
                       {{$lessons->name}}
                    </h1>

                    <p class="mt-2 text-gray-500">
                       {{$lessons->description}}
                    </p>
                </div>

            </div>

        </div>


        {{-- Lessons --}}
        <div class="rounded-2xl bg-white p-6 shadow-sm">

            <div class="mb-6 flex items-center justify-between">

                <h2 class="text-2xl font-bold text-gray-900">
                    Course Lessons
                </h2>

                <span class="rounded-full bg-indigo-100 px-3 py-1 text-sm font-semibold text-indigo-700">
                    {{$lessons->lessons()->count()}} Lessons
                </span>

            </div>


            <div class="space-y-4">
                @foreach ($lessons['lessons'] as $key=>$value)
                 <div class="flex flex-col gap-4 rounded-xl border border-gray-200 p-5 transition hover:shadow-sm sm:flex-row sm:items-center sm:justify-between">

                    <div class="flex items-center gap-4">

                        <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-indigo-100 font-bold text-indigo-600">
                            {{++$key}}
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">
                                {{$value->title}}
                            </h3>


                        </div>

                    </div>

                    <a
                        href="{{route('lesson.details' , $value->id)}}"
                        class="rounded-lg bg-indigo-600 px-5 py-2.5 text-center font-semibold text-white transition hover:bg-indigo-700"
                    >
                        View Lesson
                    </a>

                </div>

                @endforeach








            </div>

        </div>

    </div>

</div>

@endsection
