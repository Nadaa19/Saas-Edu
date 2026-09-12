@extends('website.layout.main')

@section('home')

<div class="min-h-screen bg-gray-50 px-4 py-12">


<div class="mx-auto max-w-7xl">

    {{-- Page Header --}}
    <div class="mb-12 text-center">

        <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl">
            Choose Your Plan
        </h1>

        <p class="mx-auto mt-3 max-w-2xl text-gray-600">
            Choose the subscription plan that suits you and enjoy learning without limits.
        </p>

    </div>


    {{-- Plans --}}
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">


       @foreach ($plans as $key=>$value )

          <div
            class="flex flex-col rounded-xl bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md"
        >

            {{-- Plan Name --}}
            <div>

                <h2 class="text-2xl font-bold text-gray-900">
                    {{$value->name}}
                </h2>



            </div>


            {{-- Price --}}
            <div class="my-6">

                <span class="text-4xl font-bold text-gray-900">
                    {{$value->price}}$
                </span>

                <span class="text-gray-500">
                   / {{$value->duration_in_days/ 30 }} Month
                </span>

            </div>


            {{-- Duration --}}
            <div class="mb-6">

                <span class="inline-flex rounded-full bg-indigo-50 px-3 py-1 text-sm font-medium text-indigo-600">
                   {{$value->duration_in_days/ 30 }} Month Access
                </span>

            </div>


            {{-- Features --}}
            <div class="flex-1 space-y-4">

                <div class="flex items-center gap-3 text-gray-600">

                    <svg
                        class="h-5 w-5 flex-shrink-0 text-green-500"
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

                    Access to selected courses

                </div>


                <div class="flex items-center gap-3 text-gray-600">

                    <svg
                        class="h-5 w-5 flex-shrink-0 text-green-500"
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

                    Learning materials

                </div>


                <div class="flex items-center gap-3 text-gray-600">

                    <svg
                        class="h-5 w-5 flex-shrink-0 text-green-500"
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

                    Community support

                </div>

            </div>


            {{-- Button --}}
            <a
                href="#"
                class="mt-8 block w-full rounded-lg border border-indigo-600 px-4 py-3 text-center font-semibold text-indigo-600 transition hover:bg-indigo-50"
            >
                Choose {{$value->name}}
            </a>

        </div>


       @endforeach







    </div>


    {{-- Bottom Section --}}
    <div class="mt-12 rounded-xl bg-white px-6 py-10 text-center shadow-sm">

        <h2 class="text-2xl font-bold text-gray-900">
            Learn Without Limits
        </h2>

        <p class="mx-auto mt-3 max-w-2xl text-gray-500">
            Choose the plan that works best for you and start your learning journey today.
        </p>

    </div>

</div>


</div>

@endsection
