<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'EduFlow Dashboard')
    </title>

    @vite(['resources/css/app.css'])

</head>

<body class="bg-slate-50 text-slate-800 antialiased">

    @include('dashboard.layout.sidebar')

    <div class="lg:ml-64 min-h-screen">

        @include('dashboard.layout.navbar')

        <main class="p-4 sm:p-6 lg:p-8">

            @yield('body')

        </main>

        @include('dashboard.layout.footer')

    </div>

</body>

</html>
