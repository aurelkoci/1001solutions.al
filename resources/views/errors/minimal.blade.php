<!DOCTYPE html>
<html class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G5EJXH3HRR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-G5EJXH3HRR');
    </script>
</head>

<body class="h-full">
    <main class="grid min-h-full px-6 py-24 bg-white place-items-center sm:py-32 lg:px-8">
        <div class="text-center">

            <p class="text-base font-semibold text-blue-600">
                @yield('code')
            </p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-800 sm:text-5xl">
                @yield('message')
            </h1>
            <div class="flex justify-center">
                <img src="underconstruction.png" alt="Underconstruction">
            </div>
            <p class="mt-6 text-base leading-7 text-gray-600">
                @yield('note')
            </p>
        </div>
    </main>
</body>

</html>