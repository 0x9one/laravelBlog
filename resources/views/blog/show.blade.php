<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100">

<header>

    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-5 bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Saladev</span>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    <li>
                        <a href="/" class="block text-lg py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/blog" class="block text-lg py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                    </li>
                    @if(Auth::check())
                        <li>
                            <a href="/dashboard" class="block text-lg py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ Auth::user()->name }}</a>
                        </li>
                    @else
                        <li>
                            <a href="/login" class="block text-lg py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Login</a>
                        </li>
                        <li>
                            <a href="/register" class="block text-lg py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

</header>

<main>
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                {{ $post->title }}
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto pt-20">
        <span class="text-gray-500">
                    By <span class="font-bold italic text-gray-800">
                        {{ $post->user->name }}
                    </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>
    </div>

</main>

@include('layouts.footer')
</body>
</html>
