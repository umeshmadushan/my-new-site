<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="font-sans text-gray-900 antialiased" id="app">
    <div class="min-h-screen light flex flex-col items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900 bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter">

        @include('layouts.header')

        @if (Route::currentRouteName() == 'login')
            <div class="flex flex-col text-center">
                <p class="text-5xl font-bold py-3 dark:text-white">Sign In Your Account</p>
                <p class="text-gray-500">Or</p>
                <a href="{{ route('register') }}" class="text-blue-700 font-semibold dark:text-blue-500 text-lg"> Create Your account</a>
            </div>
        @else
            <div class="flex flex-col text-center">
                <p class="text-5xl font-bold py-3 dark:text-white">Sign Up Your Account</p>
                <p class="text-gray-500 text-sm">Or Already registered?</p>
                <a href="{{ route('login') }}" class="text-blue-700 font-semibold py-2 dark:text-blue-500 text-lg"> Sign In
                    Your account</a>
            </div>
        @endif


        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

<script>
    const appContainer = document.getElementById('app');
    const modeIcon = document.getElementById('modeIcon');

    function toggleDarkMode() {
        appContainer.classList.toggle('dark');
        updateModeIcon();
    }

    function updateModeIcon() {
        const isDarkMode = appContainer.classList.contains('dark');
        modeIcon.setAttribute('name', isDarkMode ? 'moon' : 'sunny');
    }
</script>

</html>
