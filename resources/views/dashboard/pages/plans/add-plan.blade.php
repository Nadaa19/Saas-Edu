@extends('dashboard.layout.main')

@section('body')

<div class="min-h-screen bg-gray-50 p-6">


<div class="mx-auto max-w-3xl">


    {{-- Header --}}
    <div class="mb-8">

        <h1 class="text-3xl font-bold text-gray-900">
            Add Subscription Plan
        </h1>

        <p class="mt-2 text-gray-500">
            Create a new monthly subscription plan.
        </p>

    </div>


    {{-- Form --}}
    <div class="rounded-xl bg-white p-6 shadow-sm">

        <form action="{{route('plans.store')}}" method="POST">

            @csrf


            {{-- Plan Name --}}
            <div class="mb-6">

                <label class="mb-2 block font-semibold text-gray-700">
                    Plan Name
                </label>

                <input
                    type="text"
                    name="name"
                    placeholder="Example: Premium"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
                >

            </div>


            {{-- Price --}}
            <div class="mb-6">

                <label class="mb-2 block font-semibold text-gray-700">
                    Monthly Price
                </label>

                <input
                    type="number"
                    name="price"
                    placeholder="Example: 19"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
                >

            </div>


            {{-- Duration --}}
            <div class="mb-6">

                <label class="mb-2 block font-semibold text-gray-700">
                    Duration
                </label>

                <select
                    name="duration"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
                >

                    <option value="1">
                        1 Month
                    </option>

                    <option value="3">
                        3 Months
                    </option>

                    <option value="6">
                        6 Months
                    </option>

                    <option value="12">
                        12 Months
                    </option>

                </select>

            </div>





            {{-- Year --}}
            <div class="mb-6">

                <label class="mb-2 block font-semibold text-gray-700">
                    Year
                </label>

                <select
                    name="year"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
                >

                @foreach ($years as $year)

                 <option value="{{$year->id}}">
                        {{$year->year}}
                    </option>

                @endforeach





                </select>

            </div>






            {{-- Buttons --}}
            <div class="flex justify-end gap-4">

                <a
                    href="{{ route('plans.index') }}"
                    class="rounded-lg border border-gray-300 px-5 py-3 font-semibold text-gray-600 transition hover:bg-gray-50"
                >
                    Cancel
                </a>


                <button

                    class="rounded-lg bg-indigo-600 px-6 py-3 font-semibold text-white transition hover:bg-indigo-700"
                >
                    Create Plan
                </button>

            </div>

        </form>

    </div>

</div>


</div>

@endsection
