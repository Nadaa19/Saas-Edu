@extends('dashboard.layout.main')

@section('body')

<div class="p-6 lg:p-8">

    {{-- Page Header --}}
    <div class="mb-8">

        <h1 class="text-2xl font-bold text-slate-800">
            Add Manager
        </h1>

        <p class="mt-1 text-sm text-slate-400">
            Create a new manager account.
        </p>

    </div>


    {{-- Form Card --}}
    <div class="max-w-4xl">

        <div class="bg-white
                    border border-slate-200
                    rounded-2xl
                    shadow-sm
                    overflow-hidden">

            {{-- Card Header --}}
            <div class="px-6 py-5
                        border-b border-slate-100">

                <h2 class="text-base font-semibold text-slate-800">
                    Manager Information
                </h2>

                <p class="text-xs text-slate-400 mt-1">
                    Enter the manager's account details.
                </p>

            </div>


            {{-- Form --}}
            <form action="{{route('managers.store')}}" method="POST">

                @csrf

                <div class="p-6">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


                        {{-- Name --}}
                        <div>

                            <label
                                for="name"
                                class="block text-sm font-semibold
                                       text-slate-700 mb-2">
                                Full Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter manager name"
                                class="w-full px-4 py-3
                                       rounded-xl
                                       border border-slate-200
                                       bg-slate-50
                                       text-sm text-slate-700
                                       placeholder-slate-400
                                       outline-none
                                       focus:border-indigo-500
                                       focus:ring-2
                                       focus:ring-indigo-100
                                       transition"
                            >

                        </div>


                        {{-- Email --}}
                        <div>

                            <label
                                for="email"
                                class="block text-sm font-semibold
                                       text-slate-700 mb-2">
                                Email Address
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="manager@example.com"
                                class="w-full px-4 py-3
                                       rounded-xl
                                       border border-slate-200
                                       bg-slate-50
                                       text-sm text-slate-700
                                       placeholder-slate-400
                                       outline-none
                                       focus:border-indigo-500
                                       focus:ring-2
                                       focus:ring-indigo-100
                                       transition"
                            >

                        </div>

                        {{-- Password --}}
                        <div>

                            <label
                                for="password"
                                class="block text-sm font-semibold
                                       text-slate-700 mb-2">
                                Password
                            </label>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Enter password"
                                class="w-full px-4 py-3
                                       rounded-xl
                                       border border-slate-200
                                       bg-slate-50
                                       text-sm text-slate-700
                                       placeholder-slate-400
                                       outline-none
                                       focus:border-indigo-500
                                       focus:ring-2
                                       focus:ring-indigo-100
                                       transition"
                            >

                        </div>


                        {{-- Confirm Password --}}
                        <div>

                            <label
                                for="password_confirmation"
                                class="block text-sm font-semibold
                                       text-slate-700 mb-2">
                                Confirm Password
                            </label>

                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Confirm password"
                                class="w-full px-4 py-3
                                       rounded-xl
                                       border border-slate-200
                                       bg-slate-50
                                       text-sm text-slate-700
                                       placeholder-slate-400
                                       outline-none
                                       focus:border-indigo-500
                                       focus:ring-2
                                       focus:ring-indigo-100
                                       transition"
                            >

                        </div>

                    </div>


                    {{-- Actions --}}
                    <div class="mt-8 pt-6
                                border-t border-slate-100
                                flex flex-col sm:flex-row
                                justify-end gap-3">

                        <a
                            href="#"
                            class="inline-flex items-center
                                   justify-center
                                   px-5 py-2.5
                                   rounded-xl
                                   border border-slate-200
                                   bg-white
                                   text-slate-600
                                   text-sm font-semibold
                                   hover:bg-slate-50
                                   transition">

                            Cancel

                        </a>


                        <button
                            type="submit"
                            class="inline-flex items-center
                                   justify-center gap-2
                                   px-5 py-2.5
                                   rounded-xl
                                   bg-indigo-600
                                   text-white
                                   text-sm font-semibold
                                   shadow-sm shadow-indigo-200
                                   hover:bg-indigo-700
                                   transition">

                            <span class="text-lg leading-none">
                                +
                            </span>

                            Add Manager

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection
