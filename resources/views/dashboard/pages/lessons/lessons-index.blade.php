
@extends('dashboard.layout.main')

@section('body')
@if(session('success'))

    <div class="mb-6 px-4 py-3
                bg-green-50
                border border-green-200
                text-green-700
                rounded-xl
                text-sm font-medium">

        {{ session('success') }}

    </div>

@endif

<div class="p-6 lg:p-8">

    {{-- Page Header --}}
    <div class="mb-8">

        <h1 class="text-2xl font-bold text-slate-800">
            Course Lessons
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Add and manage lessons for this course.
        </p>

    </div>


    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">


        {{-- ========================= --}}
        {{-- Add Lesson Form --}}
        {{-- ========================= --}}

        <div class="xl:col-span-1">

            <div class="bg-white rounded-2xl
                        border border-slate-200
                        shadow-sm p-6">

                <div class="mb-6">

                    <h2 class="text-lg font-bold text-slate-800">
                        Add New Lesson
                    </h2>

                    <p class="text-sm text-slate-500 mt-1">
                        Upload a video lesson to this course.
                    </p>

                </div>


                <form
                    action="{{ route('course.lessons.store', $course->id) }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="space-y-5"
                >

                    @csrf


                    {{-- Lesson Title --}}

                    <div>

                        <label
                            for="title"
                            class="block text-sm font-semibold
                                   text-slate-700 mb-2"
                        >
                            Lesson Title
                        </label>

                        <input
                            type="text"
                            name="title"
                            id="title"
                            value="{{ old('title') }}"
                            placeholder="Enter lesson title"
                            class="w-full px-4 py-3
                                   bg-slate-50
                                   border border-slate-200
                                   rounded-xl
                                   text-sm
                                   outline-none
                                   focus:bg-white
                                   focus:border-indigo-500
                                   focus:ring-4
                                   focus:ring-indigo-500/10
                                   transition"
                        >

                        @error('title')
                            <p class="mt-1 text-xs text-red-500">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Video --}}

                    <div>

                        <label
                            for="video"
                            class="block text-sm font-semibold
                                   text-slate-700 mb-2"
                        >
                            Lesson Video
                        </label>


                        <label
                            for="video"
                            class="flex flex-col items-center
                                   justify-center
                                   w-full h-36
                                   border-2 border-dashed
                                   border-slate-300
                                   rounded-xl
                                   bg-slate-50
                                   hover:bg-slate-100
                                   cursor-pointer
                                   transition"
                        >

                            <svg
                                class="w-8 h-8 text-slate-400 mb-2"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M15 10l4.5-2.5v9L15 14
                                       M4 6h11a2 2 0 012 2v8a2 2 0 01-2 2H4
                                       a2 2 0 01-2-2V8a2 2 0 012-2z"
                                />
                            </svg>

                            <span class="text-sm text-slate-500">
                                Click to upload video
                            </span>

                            <span
                                id="file-name"
                                class="text-xs text-slate-400 mt-1"
                            >
                                MP4, MOV, AVI
                            </span>

                        </label>


                        <input
                            type="file"
                            name="video"
                            id="video"
                            accept="video/*"
                            class="hidden"
                            onchange="showFileName(this)"
                        >


                        @error('video')
                            <p class="mt-1 text-xs text-red-500">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Submit --}}

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

                        Upload Lesson

                    </button>

                </form>

            </div>

        </div>



        {{-- ========================= --}}
        {{-- Lessons Table --}}
        {{-- ========================= --}}

        <div class="xl:col-span-2">

            <div class="bg-white rounded-2xl
                        border border-slate-200
                        shadow-sm overflow-hidden">


                {{-- Table Header --}}

                <div
                    class="px-6 py-5
                           border-b border-slate-200
                           flex items-center justify-between"
                >

                    <div>

                        <h2 class="text-lg font-bold text-slate-800">
                            Available Lessons
                        </h2>

                        <p class="text-sm text-slate-500 mt-1">
                            Lessons in this course
                        </p>

                    </div>


                    <span
                        class="px-3 py-1.5
                               bg-indigo-50
                               text-indigo-600
                               rounded-lg
                               text-xs font-semibold"
                    >
                        {{ $lessons->count() }} Lessons
                    </span>

                </div>



                {{-- Table --}}

                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead>

                            <tr class="bg-slate-50">

                                <th
                                    class="px-6 py-4
                                           text-left
                                           text-xs font-semibold
                                           text-slate-500
                                           uppercase"
                                >
                                    #
                                </th>

                                <th
                                    class="px-6 py-4
                                           text-left
                                           text-xs font-semibold
                                           text-slate-500
                                           uppercase"
                                >
                                    Lesson
                                </th>

                                <th
                                    class="px-6 py-4
                                           text-left
                                           text-xs font-semibold
                                           text-slate-500
                                           uppercase"
                                >
                                    Video
                                </th>

                                <th
                                    class="px-6 py-4
                                           text-left
                                           text-xs font-semibold
                                           text-slate-500
                                           uppercase"
                                >
                                    Date
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-slate-100">

                            @forelse($lessons as $index => $lesson)

                                <tr class="hover:bg-slate-50 transition">

                                    <td
                                        class="px-6 py-4
                                               text-sm text-slate-500"
                                    >
                                        {{ $index + 1 }}
                                    </td>


                                    <td
                                        class="px-6 py-4
                                               text-sm font-semibold
                                               text-slate-800"
                                    >
                                        {{ $lesson->title }}
                                    </td>


                                    <td class="px-6 py-4">

                                        @if($lesson->video)

                                            <a
                                                href="{{ asset('storage/' . $lesson->video) }}"
                                                target="_blank"
                                                class="inline-flex items-center
                                                       gap-2
                                                       px-3 py-2
                                                       bg-indigo-50
                                                       text-indigo-600
                                                       rounded-lg
                                                       text-xs font-semibold
                                                       hover:bg-indigo-100
                                                       transition"
                                            >

                                                <svg
                                                    class="w-4 h-4"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="1.8"
                                                        d="M14.5 12l-5 3V9l5 3z"
                                                    />
                                                </svg>

                                                Watch Video

                                            </a>

                                        @else

                                            <span
                                                class="text-xs text-slate-400"
                                            >
                                                No video

                                            </span>

                                        @endif

                                    </td>


                                    <td
                                        class="px-6 py-4
                                               text-sm text-slate-500"
                                    >
                                        {{ $lesson->created_at?->format('Y-m-d') }}
                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td
                                        colspan="4"
                                        class="px-6 py-12 text-center"
                                    >

                                        <div
                                            class="flex flex-col
                                                   items-center"
                                        >

                                            <svg
                                                class="w-12 h-12
                                                       text-slate-300 mb-3"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1.5"
                                                    d="M15 10l4.5-2.5v9L15 14
                                                       M4 6h11a2 2 0 012 2v8a2 2 0 01-2 2H4
                                                       a2 2 0 01-2-2V8a2 2 0 012-2z"
                                                />
                                            </svg>

                                            <p
                                                class="text-sm
                                                       font-semibold
                                                       text-slate-500"
                                            >
                                                No lessons yet
                                            </p>

                                            <p
                                                class="text-xs
                                                       text-slate-400 mt-1"
                                            >
                                                Add the first lesson
                                                using the form.
                                            </p>

                                        </div>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>


@endsection
