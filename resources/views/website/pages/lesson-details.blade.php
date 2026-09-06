@extends('website.layout.main')

@section('home')

<div class="min-h-screen bg-gray-50 px-4 py-12">

    <div class="mx-auto max-w-5xl">

        <div class="rounded-2xl bg-white p-6 shadow-sm">

            <h1 class="mb-2 text-3xl font-bold text-gray-900">
               {{$lesson->title}}
            </h1>



            {{-- Video --}}
            <div class="overflow-hidden rounded-xl bg-black">

                <video
                    controls
                    class="h-auto w-full"
                >
                    <source src="{{asset('storage/' . $lesson->video)}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

            </div>



            {{-- Navigation --}}
            <div class="mt-8 flex items-center justify-between border-t border-gray-200 pt-6">

                <a
                    href=""
                    class="rounded-lg border border-gray-300 px-5 py-2.5 font-semibold text-gray-700 hover:bg-gray-50"
                >
                    ← Previous
                </a>

                <a
                    href="#"
                    class="rounded-lg bg-indigo-600 px-5 py-2.5 font-semibold text-white hover:bg-indigo-700"
                >
                    Next →
                </a>

            </div>

        </div>

    </div>

</div>

@endsection
