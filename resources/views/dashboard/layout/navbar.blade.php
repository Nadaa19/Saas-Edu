<header
    class="sticky top-0 z-40
           h-20 bg-white/90 backdrop-blur-xl
           border-b border-slate-200"
>

    <div class="h-full px-4 sm:px-6 lg:px-8
                flex items-center justify-between">


        {{-- Left --}}

        <div class="flex items-center gap-4">

            {{-- Mobile Menu --}}

            <button
                class="lg:hidden w-10 h-10 rounded-xl
                       bg-slate-100 text-slate-600
                       flex items-center justify-center"
            >
                ☰
            </button>


            {{-- Search --}}

            <div class="relative hidden md:block">

                <svg
                    class="absolute left-3 top-1/2
                           -translate-y-1/2
                           w-4 h-4 text-slate-400"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 11-16 0 8 8 0 0116 0z"
                    />

                </svg>

                <input
                    type="text"
                    placeholder="Search anything..."
                    class="w-72 pl-10 pr-4 py-2.5
                           bg-slate-50 border border-slate-200
                           rounded-xl text-sm
                           placeholder:text-slate-400
                           focus:outline-none
                           focus:ring-2 focus:ring-indigo-100
                           focus:border-indigo-400 transition"
                >

                <span
                    class="absolute right-3 top-1/2
                           -translate-y-1/2
                           px-1.5 py-0.5 rounded
                           border border-slate-200
                           text-[10px] text-slate-400"
                >
                    ⌘ K
                </span>

            </div>

        </div>


        {{-- Right --}}

        <div class="flex items-center gap-3">


            {{-- Help --}}

            <button
                class="hidden sm:flex w-10 h-10
                       rounded-xl items-center justify-center
                       text-slate-500
                       hover:bg-slate-100
                       hover:text-indigo-600 transition"
            >
                ?

            </button>


            {{-- Notifications --}}

            <button
                class="relative w-10 h-10 rounded-xl
                       flex items-center justify-center
                       text-slate-500
                       hover:bg-slate-100
                       hover:text-indigo-600 transition"
            >

                <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11a6 6 0 00-12 0v3.2a2 2 0 01-.6 1.4L4 17h5m6 0a3 3 0 01-6 0"
                    />

                </svg>

                <span
                    class="absolute top-2 right-2
                           w-2 h-2 rounded-full
                           bg-red-500 ring-2 ring-white"
                ></span>

            </button>


            {{-- Divider --}}

            <div class="hidden sm:block h-8 w-px bg-slate-200"></div>


            {{-- User --}}

            <button
                class="flex items-center gap-3
                       px-2 py-1.5 rounded-xl
                       hover:bg-slate-50 transition"
            >

                <div
                    class="w-9 h-9 rounded-full
                           bg-gradient-to-br from-indigo-500
                           to-violet-600
                           flex items-center justify-center
                           text-white text-sm font-bold"
                >
                    A
                </div>

                <div class="hidden md:block text-left">

                    <p class="text-sm font-semibold text-slate-800">
                          @if (Auth::guard('dash')->user())
                        {{Auth::guard('dash')->user()->name}}
                    @endif
                    </p>

                    <p class="text-[11px] text-slate-400">
                        Administrator
                    </p>

                </div>

                <span class="hidden md:block text-slate-400">
                    ▾
                </span>

            </button>

        </div>

    </div>

</header>
