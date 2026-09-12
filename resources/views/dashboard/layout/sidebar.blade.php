<aside
    id="sidebar"
    class="
        fixed
        top-0
        left-0
        z-50
        h-screen
        w-[260px]
        bg-[#172554]
        text-white
        flex
        flex-col
        transition-transform
        duration-300
        lg:translate-x-0
        -translate-x-full
        shadow-2xl
    "
>

    {{-- Logo --}}

    <div
        class="
            h-[76px]
            flex
            items-center
            px-6
            border-b
            border-white/10
        "
    >

        <a href="#" class="flex items-center gap-3">

            <div
                class="
                    w-10
                    h-10
                    rounded-xl
                    bg-indigo-500
                    flex
                    items-center
                    justify-center
                    shadow-lg
                    shadow-indigo-950/30
                "
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
                        stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5z"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 12v5c3.5 2.5 10.5 2.5 14 0v-5"
                    />
                </svg>
            </div>

            <div>
                <h1 class="text-lg font-bold">
                    Edu<span class="text-indigo-300">Flow</span>
                </h1>

                <p
                    class="
                        text-[9px]
                        uppercase
                        tracking-[0.18em]
                        text-blue-200/50
                    "
                >
                    Learning Platform
                </p>
            </div>

        </a>

    </div>


    {{-- Navigation --}}
    <nav class="flex-1 overflow-y-auto px-4 py-6">

        {{-- Main --}}
        <p
            class="
                px-3
                mb-3
                text-[10px]
                font-semibold
                uppercase
                tracking-[0.15em]
                text-blue-200/50
            "
        >
            Main
        </p>


        <div class="space-y-1">

            {{-- Dashboard --}}
            <a
                href="#"
                class="
                    flex
                    items-center
                    gap-3
                    px-3
                    py-3
                    rounded-xl
                    bg-white/10
                    text-white
                    border
                    border-white/10
                    shadow-sm
                "
            >

                <div
                    class="
                        w-8
                        h-8
                        rounded-lg
                        bg-indigo-500
                        flex
                        items-center
                        justify-center
                    "
                >

                    <svg
                        class="w-4 h-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 12l9-9 9 9"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 10v10h14V10"
                        />
                    </svg>

                </div>

                <span class="text-sm font-medium">
                    Dashboard
                </span>

            </a>


              {{-- Courses --}}
            <a
                href="{{route('course.index')}}"
                class="
                    group
                    flex
                    items-center
                    gap-3
                    px-3
                    py-3
                    rounded-xl
                    text-blue-100/70
                    hover:bg-white/10
                    hover:text-white
                    transition
                "
            >

                <svg
                    class="
                        w-5
                        h-5
                        text-blue-200/70
                        group-hover:text-indigo-300
                    "
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M4 5a2 2 0 012-2h12a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V5z"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M8 7h8M8 11h8M8 15h5"
                    />
                </svg>

                <span class="text-sm">
                    Courses
                </span>

                <span
                    class="
                        ml-auto
                        text-[10px]
                        px-2
                        py-1
                        rounded-md
                        bg-white/10
                        text-blue-100/60
                    "
                >
                    128
                </span>

            </a>






            @if (Auth::guard('dash')->check())

            <a
                href="{{route('years.index')}}"
                class="
                    group
                    flex
                    items-center
                    gap-3
                    px-3
                    py-3
                    rounded-xl
                    text-blue-100/70
                    hover:bg-white/10
                    hover:text-white
                    transition
                "
            >

                <svg
                    class="
                        w-5
                        h-5
                        text-blue-200/70
                        group-hover:text-indigo-300
                    "
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"
                    />

                    <circle
                        cx="9"
                        cy="7"
                        r="4"
                        fill="none"
                        stroke-width="1.8"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"
                    />
                </svg>

                <span class="text-sm">
                    Years
                </span>

            </a>
             {{-- teachers --}}
            <a
                href="{{route('managers.index')}}"
                class="
                    group
                    flex
                    items-center
                    gap-3
                    px-3
                    py-3
                    rounded-xl
                    text-blue-100/70
                    hover:bg-white/10
                    hover:text-white
                    transition
                "
            >

                <svg
                    class="
                        w-5
                        h-5
                        text-blue-200/70
                        group-hover:text-indigo-300
                    "
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M12 3L3 7.5 12 12l9-4.5L12 3z"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M6 10.5V16c3.5 3 8.5 3 12 0v-5.5"
                    />
                </svg>

                <span class="text-sm">
                    Managers
                </span>

            </a>


            {{-- teachers --}}
            <a
                href="{{route('teachers.index')}}"
                class="
                    group
                    flex
                    items-center
                    gap-3
                    px-3
                    py-3
                    rounded-xl
                    text-blue-100/70
                    hover:bg-white/10
                    hover:text-white
                    transition
                "
            >

                <svg
                    class="
                        w-5
                        h-5
                        text-blue-200/70
                        group-hover:text-indigo-300
                    "
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M12 3L3 7.5 12 12l9-4.5L12 3z"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M6 10.5V16c3.5 3 8.5 3 12 0v-5.5"
                    />
                </svg>

                <span class="text-sm">
                    Teachers
                </span>

            </a>


            {{-- Categories --}}
            <a
                href="{{route('subjects.index')}}"
                class="
                    group
                    flex
                    items-center
                    gap-3
                    px-3
                    py-3
                    rounded-xl
                    text-blue-100/70
                    hover:bg-white/10
                    hover:text-white
                    transition
                "
            >

                <svg
                    class="
                        w-5
                        h-5
                        text-blue-200/70
                        group-hover:text-indigo-300
                    "
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M4 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v8a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"
                    />
                </svg>

                <span class="text-sm">
                    Subjects
                </span>

            </a>



            {{-- plans --}}
            <a
                href="{{route('plans.index')}}"
                class="
                    group
                    flex
                    items-center
                    gap-3
                    px-3
                    py-3
                    rounded-xl
                    text-blue-100/70
                    hover:bg-white/10
                    hover:text-white
                    transition
                "
            >

                <svg
                    class="
                        w-5
                        h-5
                        text-blue-200/70
                        group-hover:text-indigo-300
                    "
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M4 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v8a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"
                    />
                </svg>

                <span class="text-sm">
                    Plans
                </span>

            </a>

            <a
                href="{{route('dash.logout')}}"
                class="
                    group
                    flex
                    items-center
                    gap-3
                    px-3
                    py-3
                    rounded-xl
                    text-blue-100/70
                    hover:bg-white/10
                    hover:text-white
                    transition
                "
            >

                <svg
                    class="
                        w-5
                        h-5
                        text-blue-200/70
                        group-hover:text-indigo-300
                    "
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M4 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v8a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"
                    />
                </svg>

                <span class="text-sm">
                    Logout
                </span>

            </a>

        </div>


        {{-- Management --}}
        <p
            class="
                px-3
                mt-8
                mb-3
                text-[10px]
                font-semibold
                uppercase
                tracking-[0.15em]
                text-blue-200/50
            "
        >
            Management
        </p>

            @endif


        <div class="space-y-1">

            {{-- Analytics --}}
            <a
                href="#"
                class="
                    group
                    flex
                    items-center
                    gap-3
                    px-3
                    py-3
                    rounded-xl
                    text-blue-100/70
                    hover:bg-white/10
                    hover:text-white
                    transition
                "
            >

                <svg
                    class="
                        w-5
                        h-5
                        text-blue-200/70
                        group-hover:text-indigo-300
                    "
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M4 19V5M4 19h16"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M7 15l4-4 3 2 5-6"
                    />
                </svg>

                <span class="text-sm">
                    Analytics
                </span>

            </a>


            {{-- Payments --}}
            <a
                href="#"
                class="
                    group
                    flex
                    items-center
                    gap-3
                    px-3
                    py-3
                    rounded-xl
                    text-blue-100/70
                    hover:bg-white/10
                    hover:text-white
                    transition
                "
            >

                <svg
                    class="
                        w-5
                        h-5
                        text-blue-200/70
                        group-hover:text-indigo-300
                    "
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <rect
                        x="3"
                        y="5"
                        width="18"
                        height="14"
                        rx="2"
                        stroke-width="1.8"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-width="1.8"
                        d="M3 10h18"
                    />
                </svg>

                <span class="text-sm">
                    Payments
                </span>

            </a>


            {{-- Reviews --}}
            <a
                href="#"
                class="
                    group
                    flex
                    items-center
                    gap-3
                    px-3
                    py-3
                    rounded-xl
                    text-blue-100/70
                    hover:bg-white/10
                    hover:text-white
                    transition
                "
            >

                <svg
                    class="
                        w-5
                        h-5
                        text-blue-200/70
                        group-hover:text-yellow-300
                    "
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M12 3l2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 17.3 6.4 20.2l1.1-6.2L3 9.6l6.2-.9L12 3z"
                    />
                </svg>

                <span class="text-sm">
                    Reviews
                </span>

                <span
                    class="
                        ml-auto
                        w-5
                        h-5
                        rounded-full
                        bg-red-400/15
                        text-red-300
                        text-[10px]
                        font-bold
                        flex
                        items-center
                        justify-center
                    "
                >
                    4
                </span>

            </a>


            {{-- Settings --}}
            <a
                href="#"
                class="
                    group
                    flex
                    items-center
                    gap-3
                    px-3
                    py-3
                    rounded-xl
                    text-blue-100/70
                    hover:bg-white/10
                    hover:text-white
                    transition
                "
            >

                <svg
                    class="
                        w-5
                        h-5
                        text-blue-200/70
                        group-hover:text-indigo-300
                    "
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <circle
                        cx="12"
                        cy="12"
                        r="3"
                        stroke-width="1.8"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M19.4 15a1.7 1.7 0 00.3 1.9l.1.1-1.8 1.8-.1-.1a1.7 1.7 0 00-1.9-.3 1.7 1.7 0 00-1 1.6V20h-2.6v-.1a1.7 1.7 0 00-1-1.6 1.7 1.7 0 00-1.9.3l-.1.1-1.8-1.8.1-.1a1.7 1.7 0 00.3-1.9 1.7 1.7 0 00-1.6-1H4v-2.6h.1a1.7 1.7 0 001.6-1 1.7 1.7 0 00-.3-1.9l-.1-.1 1.8-1.8.1.1a1.7 1.7 0 001.9.3 1.7 1.7 0 001-1.6V5h2.6v.1a1.7 1.7 0 001 1.6 1.7 1.7 0 001.9-.3l.1-.1 1.8 1.8-.1.1a1.7 1.7 0 00-.3 1.9 1.7 1.7 0 00-.3 1.9 1.7 1.7 0 001.6 1h.1v2.6h-.1a1.7 1.7 0 00-1.6 1z"
                    />
                </svg>

                <span class="text-sm">
                    Settings
                </span>

            </a>

        </div>

    </nav>




    {{-- User --}}
    <div
        class="
            px-4
            py-4
            border-t
            border-white/10
        "
    >

        <div class="flex items-center gap-3">

            <div
                class="
                    w-10
                    h-10
                    rounded-full
                    bg-gradient-to-br
                    from-indigo-400
                    to-violet-500
                    flex
                    items-center
                    justify-center
                    font-bold
                    shadow-md
                    shadow-indigo-950/30
                "
            >
                A
            </div>

            <div class="flex-1 min-w-0">

                <p class="text-sm font-semibold truncate">
                    @if (Auth::guard('dash')->user())
                        {{Auth::guard('dash')->user()->name}}
                    @endif

                </p>

                <p class="text-[11px] text-blue-200/50 truncate">
                    Administrator
                </p>

            </div>

            <button
                class="
                    w-8
                    h-8
                    rounded-lg
                    text-blue-200/50
                    hover:bg-white/10
                    hover:text-white
                    transition
                "
            >
                ⋮
            </button>

        </div>

    </div>

</aside>
