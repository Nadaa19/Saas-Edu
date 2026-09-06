@extends('website.layout.main')

@section('home')

<div class="min-h-screen bg-gray-50 px-4 py-12">

    <div class="mx-auto max-w-7xl">

        {{-- Page Header --}}
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-gray-900">
                My Courses
            </h1>

            <p class="mt-2 text-gray-600">
                Courses you are currently enrolled in.
            </p>
        </div>


        {{-- Courses --}}
        @if($orders->count() > 0)

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @foreach($orders as $order)

                    <div class="overflow-hidden rounded-xl bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                        {{-- Course Image --}}
                        <div class="h-48 w-full overflow-hidden">

                            <img
                                src="{{ asset('storage/' . $order->course->img) }}"
                                alt="{{ $order->course->name }}"
                                class="h-full w-full object-cover"
                            >

                        </div>


                        {{-- Course Information --}}
                        <div class="p-5">

                            <h2 class="mb-2 text-xl font-bold text-gray-900">
                                {{ $order->course->name }}
                            </h2>


                            {{-- Teacher --}}
                            @if($order->course->teacher)

                                <p class="mb-2 text-sm text-gray-500">
                                    Teacher:
                                    <span class="font-medium text-gray-700">
                                        {{ $order->course->teacher->name }}
                                    </span>
                                </p>

                            @endif


                            {{-- Price --}}
                            <p class="mb-4 text-sm text-gray-500">
                                Price:
                                <span class="font-semibold text-gray-900">
                                    ${{ $order->course->price }}
                                </span>
                            </p>


                            {{-- Status --}}
                            <div class="mb-5">

                                <span class="inline-flex rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-700">
                                    Enrolled
                                </span>

                            </div>


                            {{-- Button --}}
                            <a
                                href="{{route('my.lessons' ,$order->course->id )}}"
                                class="block w-full rounded-lg bg-indigo-600 px-4 py-3 text-center font-semibold text-white transition hover:bg-indigo-700"
                            >
                                View Course
                            </a>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            {{-- No Courses --}}
            <div class="rounded-xl bg-white px-6 py-16 text-center shadow-sm">

                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-gray-100">

                    <svg
                        class="h-8 w-8 text-gray-400"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5S19.832 5.477 21 6.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253"
                        />
                    </svg>

                </div>

                <h2 class="mb-2 text-2xl font-bold text-gray-900">
                    No Courses Yet
                </h2>

                <p class="mb-6 text-gray-500">
                    You haven't enrolled in any courses yet.
                </p>

                <a
                    href="{{ url('/') }}"
                    class="inline-block rounded-lg bg-indigo-600 px-6 py-3 font-semibold text-white transition hover:bg-indigo-700"
                >
                    Browse Courses
                </a>

            </div>

        @endif

    </div>

</div>

@endsection
