
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>EduLearn | Learn Without Limits</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

</head>


<body class="bg-slate-50 text-slate-800">


{{-- ================= NAVBAR ================= --}}

<header class="bg-white border-b border-slate-100 sticky top-0 z-50">

    <nav class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="h-20 flex items-center justify-between">


            {{-- Logo --}}

            <a href="#" class="flex items-center gap-3">

                <div
                    class="w-11 h-11
                           bg-indigo-600
                           rounded-xl
                           flex items-center justify-center
                           shadow-lg shadow-indigo-200"
                >

                    <svg
                        class="w-6 h-6 text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M12 14l9-5-9-5-9 5 9 5z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M5 12v4.5c0 1.5 3.1 3.5 7 3.5s7-2 7-3.5V12"
                        />
                    </svg>

                </div>

                <div>

                    <h1 class="text-xl font-bold text-slate-900">
                        Edu<span class="text-indigo-600">Learn</span>
                    </h1>

                    <p class="text-[10px] text-slate-400">
                        Learn Without Limits
                    </p>

                </div>

            </a>


            {{-- Desktop Links --}}

            <div class="hidden md:flex items-center gap-8">

                <a
                    href="/"
                    class="text-sm font-semibold text-indigo-600"
                >
                    Home
                </a>

                <a
                    href="courses"
                    class="text-sm font-medium text-slate-500 hover:text-indigo-600 transition"
                >
                    Courses
                </a>

                <a
                    href="/instractors"
                    class="text-sm font-medium text-slate-500 hover:text-indigo-600 transition"
                >
                    Instarctors
                </a>

                <a
                    href="#contact"
                    class="text-sm font-medium text-slate-500 hover:text-indigo-600 transition"
                >
                    Contact
                </a>

            </div>

@auth


{{-- User Menu --}}
<div class="relative" id="userMenu">

    <button
        type="button"
        id="userMenuButton"
        class="group flex items-center gap-3
               rounded-2xl px-2.5 py-2
               hover:bg-slate-50 transition duration-200"
    >

        <div
            class="w-10 h-10 rounded-xl
                   bg-gradient-to-br from-indigo-500 to-violet-600
                   flex items-center justify-center
                   shadow-md shadow-indigo-200
                   group-hover:scale-105 transition"
        >
            <svg
                class="w-5 h-5 text-white"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0
                       3.75 3.75 0 017.5 0z
                       M4.5 20.25a7.5 7.5 0 0115 0"
                />
            </svg>
        </div>

        <div class="hidden sm:block text-left">
            <p class="text-sm font-bold text-slate-800">
                {{ auth()->user()->name }}
            </p>

            <p class="text-xs text-slate-400">
                My Account
            </p>
        </div>

        <svg
            id="userMenuArrow"
            class="w-4 h-4 text-slate-400 transition-transform"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 9l6 6 6-6"
            />
        </svg>

    </button>


    {{-- Dropdown --}}
    <div
        id="userDropdown"
        class="hidden absolute right-0 top-full mt-3
               w-64 bg-white rounded-2xl
               border border-slate-100
               shadow-2xl overflow-hidden z-50"
    >

        <div class="px-5 py-4 bg-slate-50
                    border-b border-slate-100">

            <p class="text-sm font-bold text-slate-800">
                {{ auth()->user()->name }}
            </p>

            <p class="text-xs text-slate-400 mt-1">
                {{ auth()->user()->email }}
            </p>

        </div>


        <a
            href="{{route('profile.info')}}"
            class="block px-5 py-3.5 text-sm
                   text-slate-700 hover:bg-slate-50"
        >
            Profile
        </a>
        <a
            href="{{route('my.courses', Auth::user()->id )}}"
            class="block px-5 py-3.5 text-sm
                   text-slate-700 hover:bg-slate-50"
        >
            My Courses
        </a>
        <Form method="post" action="{{route('delete.account')}}">
            @csrf
            @method('delete')
              <button

            class="w-full text-left px-5 py-3.5
                   text-sm text-red-600 hover:bg-red-50"
        >
            Delete Account
        </button>

        </Form>



        <div class="border-t border-slate-100">

            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button

                    class="w-full text-left px-5 py-3.5
                           text-sm text-slate-700
                           hover:bg-slate-50"
                >
                    Logout
                </button>

            </form>

        </div>

    </div>

</div>


<script>
    const userMenuButton =
        document.getElementById('userMenuButton');

    const userDropdown =
        document.getElementById('userDropdown');

    const userMenuArrow =
        document.getElementById('userMenuArrow');

    userMenuButton.addEventListener('click', function (event) {

        event.stopPropagation();

        userDropdown.classList.toggle('hidden');
        userMenuArrow.classList.toggle('rotate-180');

    });

    document.addEventListener('click', function (event) {

        if (!document
            .getElementById('userMenu')
            .contains(event.target)) {

            userDropdown.classList.add('hidden');
            userMenuArrow.classList.remove('rotate-180');

        }

    });
</script>


@else


{{-- Guest --}}
<div class="flex items-center gap-3">

    <a
        href="{{ route('login') }}"
        class="px-5 py-2.5 rounded-xl
               text-sm font-bold text-slate-700
               hover:bg-slate-100 transition"
    >
        Login
    </a>

    <a
        href="{{ route('register') }}"
        class="px-5 py-2.5 rounded-xl
               bg-indigo-600 text-white
               text-sm font-bold
               shadow-lg shadow-indigo-200
               hover:bg-indigo-700
               hover:-translate-y-0.5
               transition"
    >
        Register
    </a>

</div>


@endauth







            </div>

        </div>

    </nav>

</header>

