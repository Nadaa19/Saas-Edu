```php
@extends('dashboard.layout.main')

@section('body')

<div class="p-6 lg:p-8 max-w-5xl mx-auto">


    {{-- Page Header --}}
    <div class="mb-8">

        <h1 class="text-2xl font-bold text-slate-800">
            Add New Course
        </h1>

        <p class="text-slate-500 mt-1">
            Fill in the information below to create a new course.
        </p>

    </div>



    {{-- Form --}}
    <form
        action="{{route('course.store')}}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white border border-slate-200
               rounded-2xl shadow-sm p-6 lg:p-8">

        @csrf


        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


            {{-- Course Name --}}
            <div>


                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <label class="block text-sm font-semibold
                              text-slate-700 mb-2">

                    Course Name

                </label>

                <input
                    type="text"
                    name="name"
                    placeholder="Enter course name"
                    class="w-full px-4 py-3
                           rounded-xl
                           border border-slate-300
                           outline-none
                           focus:ring-2
                           focus:ring-indigo-500
                           focus:border-indigo-500">

            </div>

             {{-- Course price --}}
            <div>
                 @error('price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <label class="block text-sm font-semibold
                              text-slate-700 mb-2">

                    Course Price

                </label>

                <input

                    name="price"
                    placeholder="Enter course price"
                    class="w-full px-4 py-3
                           rounded-xl
                           border border-slate-300
                           outline-none
                           focus:ring-2
                           focus:ring-indigo-500
                           focus:border-indigo-500">

            </div>

            {{-- Subjects --}}
            <div>
                @error('subjects')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <label class="block text-sm font-semibold
                              text-slate-700 mb-2">

                    Subjects

                </label>

                <select class="w-full px-4 py-3
                           rounded-xl
                           border border-slate-300
                           outline-none
                           focus:ring-2
                           focus:ring-indigo-500" name="subject_id" id="">
                    @foreach ($subjects as $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>

            </div>



            {{-- Instructor --}}
            <div>
                @error('teacher')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <label class="block text-sm font-semibold
                              text-slate-700 mb-2">

                    Instructor

                </label>

                <select class="w-full px-4 py-3
                           rounded-xl
                           border border-slate-300
                           outline-none
                           focus:ring-2
                           focus:ring-indigo-500" name="teacher_id" id="">
                    @foreach ($teachers as $teacher)
                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                    @endforeach
                </select>

            </div>





            {{-- Description --}}
            <div class="mt-6">
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <label class="block text-sm font-semibold
                            text-slate-700 mb-2">

                    Course Description

                </label>

                <textarea
                    rows="5"
                    name="description"
                    placeholder="Write course description..."
                    class="w-full px-4 py-3
                        rounded-xl
                        border border-slate-300
                        outline-none
                        focus:ring-2
                        focus:ring-indigo-500"></textarea>

            </div>




        </div>






        {{-- Image --}}
        <div class="mt-6">
            @error('img')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            <label class="block text-sm font-semibold
                          text-slate-700 mb-2">

                Course Image

            </label>

            <input
                type="file"
                name="img"
                class="w-full px-4 py-3
                       rounded-xl
                       border border-slate-300">

        </div>



        {{-- Buttons --}}
        <div class="flex items-center justify-end gap-4 mt-8">

            <a href="#"
               class="px-5 py-3 rounded-xl
                      border border-slate-300
                      text-slate-600
                      hover:bg-slate-50
                      transition">

                Cancel

            </a>


            <button
                type="submit"
                class="px-6 py-3 rounded-xl
                       bg-indigo-600
                       text-white
                       font-semibold
                       hover:bg-indigo-700
                       transition">

                Create Course

            </button>

        </div>


    </form>

</div>

@endsection

