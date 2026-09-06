```php
@extends('dashboard.layout.main')

@section('body')

<div class="p-6 lg:p-8">

    {{-- Page Header --}}
    <div class="flex flex-col sm:flex-row sm:items-center
                sm:justify-between gap-4 mb-8">

        <div>
            <h1 class="text-2xl font-bold text-slate-800">
                Courses
            </h1>

            <p class="text-slate-500 mt-1">
                Manage all courses from one place.
            </p>
        </div>


        {{-- Add Course Button --}}
        <a href="{{route('course.create')}}"
           class="inline-flex items-center justify-center gap-2
                  px-5 py-3 rounded-xl
                  bg-indigo-600 text-white
                  font-semibold
                  hover:bg-indigo-700
                  transition">

            <span class="text-xl">+</span>

            Add Course
        </a>

    </div>



    {{-- Courses Table --}}
    <div class="bg-white rounded-2xl
                border border-slate-200
                shadow-sm overflow-hidden">

        <div class="overflow-x-auto">

            <table class="w-full text-left">

                {{-- Table Head --}}
                <thead class="bg-slate-50 border-b border-slate-200">

                    <tr>

                        <th class="px-6 py-4 text-sm font-semibold text-slate-600">
                            #
                        </th>

                        <th class="px-6 py-4 text-sm font-semibold text-slate-600">
                            Course
                        </th>

                        <th class="px-6 py-4 text-sm font-semibold text-slate-600">
                            Instructor
                        </th>


                        <th class="px-6 py-4 text-sm font-semibold text-slate-600">
                            Price
                        </th>

                        <th class="px-6 py-4 text-sm font-semibold text-slate-600">
                            Actions
                        </th>

                    </tr>

                </thead>



                {{-- Table Body --}}
                <tbody class="divide-y divide-slate-100">
                    @foreach ( $courses as $key=>$value)
                    <tr class="hover:bg-slate-50 transition">

                        <td class="px-6 py-4 text-slate-500">
                            {{++$key}}
                        </td>


                        {{-- Course --}}
                        <td class="px-6 py-4">

                            <div class="flex items-center gap-3">

                                <img
                                    src="{{asset('storage/' . $value->img)}}"
                                    class="w-12 h-12 rounded-xl object-cover"
                                    alt="course">

                                <div>

                                    <a href="{{route('course.lessons.index' , $value->id)}}" class="font-semibold text-slate-800">
                                        {{$value->name}}
                                    </a>

                                    <p class="text-sm text-slate-500">
                                        {{$value->description}}
                                    </p>

                                </div>

                            </div>

                        </td>


                        {{-- Instructor --}}
                        <td class="px-6 py-4 text-slate-600">
                                        {{$value->teacher->name}}
                        </td>






                        {{-- price --}}
                        <td class="px-6 py-4">

                            <span class="px-3 py-1 rounded-full
                                         bg-green-50
                                         text-green-600
                                         text-sm font-medium">

                                         {{$value->price}}


                            </span>

                        </td>


                        {{-- Actions --}}
                        <td class="px-6 py-4">

                            <div class="flex items-center gap-3">

                                <a href="{{route('course.edit' , $value->id)}}"
                                   class="text-indigo-600
                                          hover:text-indigo-800
                                          font-medium">

                                    Edit

                                </a>


                                <form action="{{route('course.destroy', $value->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button
                                    class="text-red-500
                                           hover:text-red-700
                                           font-medium">

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

    </div>

</div>

@endsection
```
