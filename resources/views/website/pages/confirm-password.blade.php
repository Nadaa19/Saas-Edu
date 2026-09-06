@extends('website.layout.main')

@section('home')

<div class="min-h-screen relative overflow-hidden bg-slate-50
            flex items-center justify-center px-6 py-16">

    {{-- Background --}}
    <div class="absolute -top-32 -left-32
                w-80 h-80
                bg-indigo-300/30
                rounded-full blur-3xl animate-pulse">
    </div>

    <div class="absolute -bottom-32 -right-32
                w-96 h-96
                bg-purple-300/20
                rounded-full blur-3xl animate-pulse">
    </div>


    <div class="relative z-10 w-full max-w-md">

        {{-- Logo --}}
        <div class="text-center mb-8">

            <a href="{{ url('/') }}"
               class="text-3xl font-black
                      text-transparent bg-clip-text
                      bg-gradient-to-r from-indigo-600 to-purple-600">

                EduLearn

            </a>

        </div>


        {{-- Card --}}
        <div class="bg-white/90 backdrop-blur-xl
                    border border-white
                    rounded-[2rem]
                    shadow-2xl
                    shadow-indigo-900/10
                    p-8 md:p-10">


            {{-- Icon --}}
            <div class="flex justify-center mb-6">

                <div class="w-16 h-16
                            rounded-2xl
                            bg-indigo-100
                            text-indigo-600
                            flex items-center justify-center">

                    <svg class="w-8 h-8"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M12 15v2m-6 4h12
                                 a2 2 0 002-2v-6
                                 a2 2 0 00-2-2H6
                                 a2 2 0 00-2 2v6
                                 a2 2 0 002 2zm10-10V7
                                 a4 4 0 00-8 0v2h8z"/>

                    </svg>

                </div>

            </div>


            {{-- Title --}}
            <div class="text-center mb-8">

                <h1 class="text-2xl font-black text-slate-900">
                    Confirm Your Password
                </h1>

                <p class="mt-3 text-sm text-slate-500 leading-6">
                    For your security, please confirm your password
                    before continuing.
                </p>

            </div>


            {{-- Errors --}}
            @if ($errors->any())

                <div class="mb-6 p-4 rounded-2xl
                            bg-red-50
                            border border-red-100
                            text-red-600">

                    <ul class="text-sm space-y-1">

                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- Form --}}
            <form method="POST"
                  action="{{ route('password.confirm.store') }}"
                  class="space-y-6">

                @csrf


                {{-- Password --}}
                <div>

                    <label for="password"
                           class="block mb-2
                                  text-sm font-bold
                                  text-slate-700">

                        Password

                    </label>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        autofocus
                        class="w-full px-5 py-4
                               rounded-2xl
                               border border-slate-200
                               bg-slate-50
                               text-slate-900
                               outline-none
                               focus:border-indigo-500
                               focus:ring-4
                               focus:ring-indigo-500/10
                               transition"
                        placeholder="Enter your password"
                    >

                </div>


                {{-- Submit --}}
                <button
                    type="submit"
                    class="w-full py-4
                           rounded-2xl
                           bg-gradient-to-r
                           from-indigo-600
                           to-purple-600
                           hover:from-indigo-700
                           hover:to-purple-700
                           text-white
                           font-bold
                           shadow-xl
                           shadow-indigo-600/20
                           transition-all duration-300
                           hover:-translate-y-1
                           active:scale-[0.98]">

                    Confirm Password

                </button>

            </form>


            {{-- Back --}}
            <div class="mt-7 text-center">

                <a href="{{ route('security') }}"
                   class="text-sm font-bold
                          text-indigo-600
                          hover:text-indigo-700">

                    ← Back to Security

                </a>

            </div>

        </div>

    </div>

</div>

@endsection
