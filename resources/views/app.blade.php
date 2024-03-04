<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=0">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=0">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png?v=0">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=0">
    <link rel="manifest" href="/site.webmanifest?v=0">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=0" color="#000000">
    <link rel="shortcut icon" href="/favicon.ico?v=0">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png?v=0">
    <meta name="theme-color" content="#ffffff">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1W28GX0L97"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1W28GX0L97');
    </script>
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
        } else {
        document.documentElement.classList.remove('dark')
        }
        // localStorage.theme = 'light'
        // localStorage.theme = 'dark'
        // localStorage.removeItem('theme')
    </script>
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>