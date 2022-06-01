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
        <script src="{{ asset('js/app.js') }}"></script>
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
            <div class="background-image grid grid-cols-a m-auto">
                <div class="flex text-gray-100 pt-10">
                    <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                        <h1 class="sm:text-white text-5xl uppercase font-blod text-shadow-md pb-14">
                            Do you want to become a developer?
                        </h1>
                        <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold
                        text-xl uppercase">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-20 border-b border-gray-200">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2016/03/27/20/00/coffee-1284041_960_720.jpg"
                         alt="">
                </div>
                <div class="m-auto sm:m-auto text-left w-4/5 block">
                    <h2 class="text-4xl font-extrabold text-gray-6">
                        Struggling to be a better web developer?
                    </h2>
                    <p class="py-8 text-gray-500 text-l">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Asperiores, eligendi.
                    </p>
                    <p class="font-extrabold text-gray-600 text-xl pb-9">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Magnam modi porro provident repellendus sapiente tempore!
                        Aliquam autem dolores quam suscipit.
                    </p>
                    <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                        Find our more
                    </a>
                </div>
            </div>

            <div class="text-center p-15 bg-black text-white">
                <h2 class="text-2xl pb-5 text-l">
                    I'm an expert in...
                </h2>
                <span class="font-extrabold block text-4xl py-1">
                    Ux Design
                </span>
                <span class="font-extrabold block text-4xl py-1">
                    Project Management
                </span>
                <span class="font-extrabold block text-4xl py-1">
                    Digital Strategy
                </span>
                <span class="font-extrabold block text-4xl py-1">
                    Backend Development
                </span>
            </div>

            <div class="text-center py-15">
                <span class="uppercase text-s text-gray-400">
                    Blog
                </span>

                <h2 class="text-4xl font-bold py-10">
                    Recent Posts
                </h2>

                <p class="m-auto w-4/5 text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Magnam modi porro provident repellendus sapiente tempore!
                    Aliquam autem dolores quam suscipit.
                </p>
            </div>

            <div class="sm:grid grid-cols-2 w-4/5 m-auto">
                <div class="flex bg-yellow-700 text-gray-100 pt-10">
                    <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                        <span class="uppercase text-xs">
                            PHP
                        </span>

                        <h3 class="text-xl font-bold py-10">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Magnam modi porro provident repellendus sapiente tempore!
                            Magnam modi porro provident repellendus sapiente tempore!
                            Magnam modi porro provident repellendus sapiente tempore!
                            Aliquam autem dolores quam suscipit.
                        </h3>

                        <a href="" class="uppercase bg-transparent border-2 border-gray-100
                        text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                            Find out more
                        </a>
                    </div>
                </div>
                <div>
                    <img src="https://cdn.pixabay.com/photo/2016/03/27/20/00/coffee-1284041_960_720.jpg"
                          alt="">
                </div>
            </div>
        </main>

        @include('layouts.footer')
    </body>
</html>
