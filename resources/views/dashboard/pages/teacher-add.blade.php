@extends('dashboard.layout.main')

@section('body')
<div class="min-h-screen bg-gray-50 p-6">

    <!-- Header -->
    <div class="max-w-5xl mx-auto mb-6">

        <a href="{{ route('teachers.index') }}"
           class="inline-flex items-center gap-2 text-gray-500
                  hover:text-indigo-600 transition mb-4">

            ← Back to Teachers

        </a>

        <h1 class="text-2xl font-bold text-gray-800">
            Add New Teacher
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            Add a new teacher to your system
        </p>

    </div>


    <!-- Form Card -->
    <div class="max-w-5xl mx-auto bg-white rounded-2xl
                shadow-sm border border-gray-100 overflow-hidden">


        <!-- Form Header -->
        <div class="px-6 py-5 border-b border-gray-100">

            <h2 class="text-lg font-semibold text-gray-800">
                Teacher Information
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Fill in the information below
            </p>

        </div>


        <!-- Form -->
        <form action="{{route('teachers.store')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="p-6 space-y-6">


                <!-- Name + Email -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Name -->
                    <div>

                        <label class="block text-sm font-medium
                                      text-gray-700 mb-2">

                            Teacher Name

                        </label>

                        <input
                            type="text"
                            name="name"
                            placeholder="Enter teacher name"
                            class="w-full px-4 py-3 rounded-xl
                                   border border-gray-200
                                   focus:outline-none
                                   focus:ring-2 focus:ring-indigo-500
                                   focus:border-indigo-500">

                    </div>


                    <!-- Email -->
                    <div>

                        <label class="block text-sm font-medium
                                      text-gray-700 mb-2">

                            Email

                        </label>

                        <input
                            type="email"
                            name="email"
                            placeholder="teacher@example.com"
                            class="w-full px-4 py-3 rounded-xl
                                   border border-gray-200
                                   focus:outline-none
                                   focus:ring-2 focus:ring-indigo-500
                                   focus:border-indigo-500">

                    </div>

                </div>


                <!-- Phone + Subject -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Phone -->
                    <div>

                        <label class="block text-sm font-medium
                                      text-gray-700 mb-2">

                            Phone

                        </label>

                        <input
                            type="text"
                            name="phone"
                            placeholder="01xxxxxxxxx"
                            class="w-full px-4 py-3 rounded-xl
                                   border border-gray-200
                                   focus:outline-none
                                   focus:ring-2 focus:ring-indigo-500
                                   focus:border-indigo-500">

                    </div>


                    <!-- Subject -->
                    <div>

                        <label class="block text-sm font-medium
                                      text-gray-700 mb-2">

                            Subject

                        </label>

                        <select
                            name="subject"
                            class="w-full px-4 py-3 rounded-xl
                                   border border-gray-200
                                   bg-white
                                   focus:outline-none
                                   focus:ring-2 focus:ring-indigo-500
                                   focus:border-indigo-500">

                                   @foreach ($subjects as $sub )
                                            <option value="{{$sub->id}}">
                                                  {{$sub->name}}
                                            </option>
                                   @endforeach





                        </select>

                    </div>

                </div>
                <div>

                        <label class="block text-sm font-medium
                                      text-gray-700 mb-2">

                            Password

                        </label>

                        <input

                            name="password"
                            placeholder="*****"
                            class="w-full px-4 py-3 rounded-xl
                                   border border-gray-200
                                   focus:outline-none
                                   focus:ring-2 focus:ring-indigo-500
                                   focus:border-indigo-500">

                </div>

                 <div>

                        <label class="block text-sm font-medium
                                      text-gray-700 mb-2">

                            Confirm Password

                        </label>

                        <input

                            name="password_confirmation"
                            placeholder="*****"
                            class="w-full px-4 py-3 rounded-xl
                                   border border-gray-200
                                   focus:outline-none
                                   focus:ring-2 focus:ring-indigo-500
                                   focus:border-indigo-500">

                </div>


                <!-- Image -->
                <div>

                    <label class="block text-sm font-medium
                                  text-gray-700 mb-2">

                        Teacher Image

                    </label>

                    <div class="flex items-center gap-5">

                        <div
                            class="w-20 h-20 rounded-xl
                                   bg-gray-100 flex items-center
                                   justify-center text-gray-400">

                            <span class="text-2xl">
                                📷
                            </span>

                        </div>

                        <div>

                            <input
                                type="file"
                                name="img"
                                accept="image/*"
                                class="block w-full text-sm text-gray-500
                                       file:mr-4 file:py-2 file:px-4
                                       file:rounded-lg file:border-0
                                       file:bg-indigo-50
                                       file:text-indigo-600
                                       hover:file:bg-indigo-100">

                            <p class="text-xs text-gray-400 mt-2">
                                PNG, JPG or JPEG. Max size 2MB.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Bio -->
                <div>

                    <label class="block text-sm font-medium
                                  text-gray-700 mb-2">

                        Bio

                    </label>

                    <textarea
                        name="bio"
                        rows="5"
                        placeholder="Write a short bio about the teacher..."
                        class="w-full px-4 py-3 rounded-xl
                               border border-gray-200
                               resize-none
                               focus:outline-none
                               focus:ring-2 focus:ring-indigo-500
                               focus:border-indigo-500"></textarea>

                </div>


            </div>


            <!-- Form Footer -->
            <div class="px-6 py-5 bg-gray-50 border-t
                        border-gray-100 flex justify-end gap-3">

                <a
                    href="{{ route('teachers.index') }}"
                    class="px-5 py-2.5 rounded-xl
                           border border-gray-200
                           bg-white text-gray-600
                           hover:bg-gray-50
                           font-medium transition">

                    Cancel

                </a>


                    <button
                        type="submit"
                        class="px-6 py-2.5 rounded-xl
                            bg-indigo-600 text-white
                            hover:bg-indigo-700
                            font-medium transition shadow-sm">

                        Add Teacher

                    </button>



            </div>

        </form>

    </div>

</div>


@endsection
