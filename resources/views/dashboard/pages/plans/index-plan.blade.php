@extends('dashboard.layout.main')

@section('body')

<div class="min-h-screen bg-gray-50 p-6">


{{-- Header --}}
<div class="mb-8 flex items-center justify-between">

    <div>

        <h1 class="text-3xl font-bold text-gray-900">
            Subscription Plans
        </h1>

        <p class="mt-2 text-gray-500">
            Manage your monthly subscription plans.
        </p>

    </div>


    {{-- Add Plan --}}
    <a
        href="{{ route('plans.create') }}"
        class="rounded-lg bg-indigo-600 px-5 py-3 font-semibold text-white transition hover:bg-indigo-700"
    >
        + Add Plan
    </a>

</div>


{{-- Plans Table --}}
<div class="overflow-hidden rounded-xl bg-white shadow-sm">

    <div class="overflow-x-auto">

        <table class="w-full text-left">

            <thead class="bg-gray-50">

                <tr>

                    <th class="px-6 py-4 text-sm font-semibold text-gray-700">
                        #
                    </th>

                    <th class="px-6 py-4 text-sm font-semibold text-gray-700">
                        Plan Name
                    </th>

                    <th class="px-6 py-4 text-sm font-semibold text-gray-700">
                        Price
                    </th>

                    <th class="px-6 py-4 text-sm font-semibold text-gray-700">
                        Duration
                    </th>

                    <th class="px-6 py-4 text-sm font-semibold text-gray-700">
                        Year
                    </th>

                    <th class="px-6 py-4 text-sm font-semibold text-gray-700">
                        Actions
                    </th>

                </tr>

            </thead>


            <tbody class="divide-y divide-gray-100">


                @foreach ($plans as $key => $value)

                 <tr class="transition hover:bg-gray-50">

                    <td class="px-6 py-4 text-gray-500">
                        {{++$key}}
                    </td>

                    <td class="px-6 py-4">

                        <span class="font-semibold text-gray-900">
                           {{$value->name}}
                        </span>

                    </td>

                    <td class="px-6 py-4 font-medium text-gray-700">
                       {{$value->price}} $

                    </td>

                    <td class="px-6 py-4 text-gray-600">
                    {{ $value->duration_in_months }} Months
                </td>


                    <td class="px-6 py-4">

                        <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-700">
                           {{$value->year->year}}
                        </span>

                    </td>

                    <td class="px-6 py-4">

                        <a
                            href="{{ route('plans.edit', $value->id) }}"
                            class="mr-3 font-medium text-indigo-600 hover:text-indigo-800"
                        >
                            Edit
                        </a>

                        <form action="{{route('plans.destroy' , $value->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button
                            class="font-medium text-red-600 hover:text-red-800"
                        >
                            Delete
                        </button>

                        </form>


                    </td>

                </tr>

                @endforeach




            </tbody>

        </table>

    </div>

</div>


</div>

@endsection
