@extends('dashboard.layout.main')

@section('body')

<div class="min-h-screen bg-slate-50 p-6 lg:p-8">

    {{-- Page Header --}}
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        <div>
            <p class="text-sm font-medium text-indigo-600">
                Academic Management
            </p>

            <h1 class="mt-1 text-2xl font-bold text-slate-800">
                Academic Subjects
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Manage the academic Subjects available on the platform.
            </p>
        </div>

        <div
            class="flex h-11 w-11 items-center justify-center rounded-xl
                   bg-indigo-100 text-indigo-600"
        >
            <svg
                class="h-5 w-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.8"
                    d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V6a1 1 0 011-1z"
                />
            </svg>
        </div>

    </div>


    {{-- Add New Subject --}}
    <div
        class="mb-8 overflow-hidden rounded-2xl border border-slate-200
               bg-white shadow-sm"
    >

        <div class="border-b border-slate-100 px-6 py-5">

            <div class="flex items-center gap-3">

                <div
                    class="flex h-10 w-10 items-center justify-center
                           rounded-xl bg-indigo-50 text-indigo-600"
                >
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M12 4v16M4 12h16"
                        />
                    </svg>
                </div>

                <div>
                    <h2 class="font-semibold text-slate-800">
                        Add New Academic Subject
                    </h2>

                    <p class="mt-0.5 text-xs text-slate-500">
                        Create a new academic Subject for the platform.
                    </p>
                </div>

            </div>

        </div>


        {{-- Form --}}
        <form
            action="{{route('subjects.store')}}"
            method="post"
            class="p-6"
        >
        @csrf


            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                {{-- Subject --}}
                <div>

                    <label
                        for="Subject"
                        class="mb-2 block text-sm font-medium text-slate-700"
                    >
                        Academic Subject
                    </label>

                    <div class="relative">

                        <div
                            class="pointer-events-none absolute inset-y-0 left-0
                                   flex items-center pl-3 text-slate-400"
                        >
                            <svg
                                class="h-5 w-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V6a1 1 0 011-1z"
                                />
                            </svg>
                        </div>

                        <input
                            type="text"
                            id="subject"
                            name="name"
                            placeholder="subject"
                            class="w-full rounded-xl border border-slate-200
                                   bg-slate-50 py-3 pl-11 pr-4 text-sm
                                   text-slate-800 outline-none
                                   transition
                                   placeholder:text-slate-400
                                   focus:border-indigo-500
                                   focus:bg-white
                                   focus:ring-4
                                   focus:ring-indigo-500/10"
                        >

                    </div>
                    <br><br><br>


                <div class="mt-6">
    <label
        for="year_id"
        class="mb-2 block text-sm font-medium text-slate-700"
    >
        Academic Year
    </label>

    <div class="relative">
        <select
            name="year_id"
            id="year_id"
            class="w-full appearance-none rounded-xl border border-slate-200
                   bg-slate-50 px-4 py-3 pr-10 text-sm text-slate-800
                   outline-none transition
                   hover:border-slate-300
                   focus:border-indigo-500
                   focus:bg-white
                   focus:ring-4
                   focus:ring-indigo-500/10"
        >
            <option value="" disabled selected>
                Select Academic Year
            </option>

            @foreach ($years as $year)
                <option value="{{ $year->id }}">
                    {{ $year->year }}
                </option>
            @endforeach
        </select>

        {{-- Arrow --}}
        <div
            class="pointer-events-none absolute inset-y-0 right-0
                   flex items-center pr-4 text-slate-400"
        >
            <svg
                class="h-5 w-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7"
                />
            </svg>
        </div>
    </div>
</div>


                </div>


            </div>


            {{-- Submit --}}
            <div
                class="mt-6 flex justify-end border-t border-slate-100 pt-5"
            >



                <button

                    class="inline-flex items-center gap-2 rounded-xl
                           bg-indigo-600 px-5 py-3 text-sm font-semibold
                           text-white shadow-sm
                           transition
                           hover:bg-indigo-700
                           hover:shadow-md
                           focus:outline-none
                           focus:ring-4
                           focus:ring-indigo-500/20"
                >

                    <svg
                        class="h-4 w-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 4v16m8-8H4"
                        />
                    </svg>

                    Add Subject

                </button>



            </div>

        </form>

    </div>


    {{-- Subjects Table --}}
    <div
        class="overflow-hidden rounded-2xl border border-slate-200
               bg-white shadow-sm"
    >

        {{-- Table Header --}}
        <div
            class="flex flex-col gap-3 border-b border-slate-100
                   px-6 py-5 sm:flex-row sm:items-center
                   sm:justify-between"
        >

            <div>

                <h2 class="font-semibold text-slate-800">
                    Academic Subjects
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    All academic Subjects in your platform.
                </p>

            </div>

            <div
                class="rounded-lg bg-slate-100 px-3 py-1.5
                       text-xs font-medium text-slate-500"
            >

            </div>

        </div>


        {{-- Table --}}
        <div class="overflow-x-auto">

            <table class="w-full text-left">

                <thead class="bg-slate-50">

                    <tr>

                        <th
                            class="px-6 py-4 text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500"
                        >
                            #
                        </th>

                        <th
                            class="px-6 py-4 text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500"
                        >
                            Academic Subject
                        </th>

                        <th
                            class="px-6 py-4 text-xs font-semibold
                                   uppercase tracking-wider
                                   text-slate-500"
                        >
                            Academic Year
                        </th>




                        <th
                            class="px-6 py-4 text-right text-xs
                                   font-semibold uppercase
                                   tracking-wider text-slate-500"
                        >
                            Actions
                        </th>

                    </tr>

                </thead>


                <tbody class="divide-y divide-slate-100">

                    {{-- Example Row 1 --}}



                    @foreach ($subjects as $key=>$value )
                        <tr class="transition hover:bg-slate-50">

                        <td class="px-6 py-4 text-sm text-slate-500">
                            {{++$key}}
                        </td>

                        <td class="px-6 py-4 text-sm text-slate-500">
                            {{$value->name}}
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500">
                            {{$value->year->year}}
                        </td>

                        <td class="px-6 py-4">

                            <div class="flex justify-end gap-2">

                                <form action="{{route('subjects.destroy' , $value->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                 <button

                                    class="rounded-lg p-2 text-slate-400
                                           transition hover:bg-red-50
                                           hover:text-red-600"
                                    title="Delete"
                                >
                                    <svg
                                        class="h-4 w-4"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M4 7h16M10 11v6M14 11v6"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M6 7l1 13h10l1-13M9 7V4h6v3"
                                        />
                                    </svg>
                                </button>

                                </form>

                            </div>

                        </td>
                    </tr>

                    @endforeach






                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
