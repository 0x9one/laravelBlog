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
                Blog Posts
            </h1>
        </div>
    </div>

    @if(session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if(Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/blog/create" class="bg-blue-500 uppercase text-gray-100 text-xs
            font-extrabold py-3 px-5 rounded-3xl mt-5">
                Create post
            </a>
        </div>
    @endif

    @foreach($posts as $post)

        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div class="pt-5">
                <img src="https://cdn.pixabay.com/photo/2016/03/27/20/00/coffee-1284041_960_720.jpg"
                     alt="">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{ $post->title }}
                </h2>

                <span class="text-gray-500">
                    By <span class="font-bold italic text-gray-800">
                        {{ $post->user->name }}
                    </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{ $post->description }}
                </p>

                <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8
                rounded-3xl">
                    Keep reading
                </a>

                @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <a href="/blog/{{ $post->slug }}/edit" class="uppercase bg- text-gray-100 text-lg font-extrabold py-4 px-8
                rounded-3xl">
                        Edit post
                    </a>

                   <span class="float-right">
                        <form action="/blog/{{ $post->slug }}" method="post">
                            @csrf
                            @method('delete')

                            <button class="text-red-500 pr-3" type="submit">Delete</button>
                        </form>
                   </span>
                @endif
            </div>
        </div>

    @endforeach
</main>

    <div class="row">
        <div>1</div>
        <div>2</div>
        <div>3</div>
    </div>

@include('layouts.footer')
</body>
</html>
