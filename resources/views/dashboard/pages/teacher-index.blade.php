@extends('dashboard.layout.main')

@section('body')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

    <!-- Header -->
    <div class="px-6 py-5 border-b border-gray-100 flex items-center justify-between">

        <div>
            <h2 class="text-xl font-bold text-gray-800">
                Teachers
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Manage all teachers
            </p>
        </div>
       <a href="{{route('teachers.create')}}"
         class="bg-indigo-600 hover:bg-indigo-700 text-white
                   px-5 py-2.5 rounded-xl font-medium transition"> Add Teacher

       </a>






    </div>


    <!-- Search -->
    <div class="p-6 border-b border-gray-100">

        <input
            type="text"
            placeholder="Search teachers..."
            class="w-full md:w-80 px-4 py-2.5 rounded-xl
                   border border-gray-200
                   focus:outline-none focus:ring-2
                   focus:ring-indigo-500">

    </div>


    <!-- Table -->
    <div class="overflow-x-auto">

        <table class="w-full text-sm text-left">

            <!-- Header -->
            <thead class="bg-gray-50 text-gray-600 uppercase text-xs">

                <tr>

                    <th class="px-6 py-4">
                        #
                    </th>

                    <th class="px-6 py-4">
                        Name
                    </th>

                    <th class="px-6 py-4">
                        Email
                    </th>

                    <th class="px-6 py-4">
                        Phone
                    </th>

                    <th class="px-6 py-4">
                        Image
                    </th>

                    <th class="px-6 py-4">
                        Bio
                    </th>

                    <th class="px-6 py-4">
                        Subject
                    </th>

                    <th class="px-6 py-4 text-center">
                        Actions
                    </th>

                </tr>

            </thead>


            <!-- Body -->
            <tbody class="divide-y divide-gray-100">


                @foreach ($teachers as $key=>$value )
                     <!-- Teacher 1 -->
                <tr class="hover:bg-gray-50 transition">

                    <td class="px-6 py-5 text-gray-500">
                        {{++$key}}
                    </td>

                    <td class="px-6 py-5">

                        <div class="flex items-center gap-3">



                            <span class="font-semibold text-gray-800">
                               {{$value->name}}
                            </span>

                        </div>

                    </td>

                    <td class="px-6 py-5 text-gray-600">
                        {{$value->email}}
                    </td>

                    <td class="px-6 py-5 text-gray-600">
                        {{$value->phone}}

                    </td>

                    <td class="px-6 py-5">

                        <img
                            src="{{asset('storage/'.$value->img)}}"
                            class="w-12 h-12 rounded-lg object-cover">

                    </td>

                    <td class="px-6 py-5 max-w-xs">

                        <p class="text-gray-600 truncate">
                    {{$value->bio}}

                        </p>

                    </td>

                    <td class="px-6 py-5">

                        <span
                            class="px-3 py-1 rounded-full
                                   bg-blue-50 text-blue-600
                                   text-xs font-semibold">

                              {{$value->subject->name}}

                        </span>

                    </td>

                    <!-- Actions -->
                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-2">

                            <button
                                class="px-4 py-2 rounded-lg
                                       bg-indigo-50 text-indigo-600
                                       hover:bg-indigo-100
                                       font-medium transition">

                                Edit

                            </button>

                            <form action="{{route('teachers.destroy' , $value->id)}}" method="post">
                                @csrf
                                @method('delete')

                                <button
                                class="px-4 py-2 rounded-lg
                                       bg-red-50 text-red-600
                                       hover:bg-red-100
                                       font-medium transition">

                                Delete

                            </button>
                            </form>


                        </div>

                    </td>

                </tr>
                @endforeach





            </tbody>

        </table>

    </div>


    <!-- Pagination -->
    <div class="px-6 py-4 border-t border-gray-100
                flex items-center justify-between">

        <p class="text-sm text-gray-500">
            Showing 1 to 3 of 3 teachers
        </p>

        <div class="flex gap-2">

            <button
                class="px-3 py-2 rounded-lg border
                       border-gray-200 text-gray-400">

                Previous

            </button>

            <button
                class="px-3 py-2 rounded-lg
                       bg-indigo-600 text-white">

                1

            </button>

            <button
                class="px-3 py-2 rounded-lg border
                       border-gray-200 text-gray-600
                       hover:bg-gray-50">

                Next

            </button>

        </div>

    </div>

</div>


@endsection
