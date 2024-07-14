@extends('layouts.app')

@section('title', 'Kontakt')




@section("header")
<div class="w-full lg:block hidden overflow-hidden">
    <div class="w-full bg-gray-900 z-2 mx-auto flex justify-between items-center">
        <a href="/">
            <div class="logo">
                <img src="{{ asset('images/ARISTUDIO.svg') }}" alt="Logo" class="w-44">
            </div>
            </a>
        <nav>
            <ul class="flex space-x-4 text-white">
                <li><a href="/"
                        class="transition ease-in-out delay-150 bg-indigo-500 px-8 py-2 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-400 duration-300 p-2 rounded">Strona Główna</a>
                </li>
                <li><a href="/o-nas"
                        class="transition ease-in-out delay-150 bg-indigo-500 px-8 py-2 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-400 duration-300 p-2 rounded">O Nas</a>
                </li>
                <li><a href="/uslugi"
                        class="transition ease-in-out delay-150 bg-indigo-500 px-8 py-2 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-400 duration-300 p-2 rounded">Usługi</a>
                </li>
                <li><a href="/kontakt"
                        class="transition ease-in-out delay-150 bg-indigo-500 px-8 py-2 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-400 duration-300 p-2 rounded">Kontakt</a></li>
            </ul>
        </nav>
    </div>
</div>

<div id="mobile" class="relative bg-gray-900  block lg:hidden w-full overflow-hidden">
    <div class="w-full  top-0 z-20 mx-auto flex justify-between items-center px-4 py-2">
        <div class="logo">
            <img src="{{ asset('images/ARISTUDIO.svg') }}" alt="Logo" class="w-36">
        </div>
        <button class="icon text-white" onclick="toggleMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-10 h-10"><!--! Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. --><path fill="#ffffff" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        </button>
    </div>
    <div id="myLinks" class="hidden  w-full bg-gray-700 bg-opacity-50 top-20 left-0">
        <nav>
            <ul class="flex flex-col text-white">
                <li><a href="/" class="block transition ease-in-out delay-150  px-8 py-2 hover:-translate-y-1 hover:scale-110 0 duration-300 rounded">Strona Główna</a></li>
                <li><a href="/o-nas" class="block transition ease-in-out delay-150  px-8 py-2 hover:-translate-y-1 hover:scale-110  duration-300 rounded">O Nas</a></li>
                <li><a href="/uslugi" class="block transition ease-in-out delay-150  px-8 py-2 hover:-translate-y-1 hover:scale-110 duration-300 rounded">Usługi</a></li>
                <li><a href="/kontakt" class="block transition ease-in-out delay-150  px-8 py-2 hover:-translate-y-1 hover:scale-110  duration-300 rounded">Kontakt</a></li>
            </ul>
        </nav>
    </div>
</div>  

@endsection



@section("content")
<section class="scroll-animate p-1 my-10 md:my-20">
    <div class="bg-white bg-opacity-75 p-1 rounded-lg">
        <div class=" p-2 md:p-5 w-full">
            <div class="bg-indigo-500 opacity-50 w-full rounded-t-md h-4"></div>

            <h4 class="text-3xl font-bold text-gray-800 mb-4">Skontaktuj się z nami</h4>
            <form method="POST" action="/submit-contact-form" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-gray-700">Imię:</label>
                    <input type="text" id="name" name="name" class="w-full border rounded-md p-2" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" class="w-full border rounded-md p-2" required>
                </div>
                <div>
                    <label for="message" class="block text-gray-700">Wiadomość:</label>
                    <textarea id="message" name="message" class="w-full border rounded-md p-2" rows="4" required></textarea>
                </div>
                <button type="submit" class="transition ease-in-out text-white delay-150 bg-indigo-500 px-8 py-2 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-400 duration-300 rounded">Wyślij</button>
            </form>
            
        </div>
    </div>
</section>
@endsection
