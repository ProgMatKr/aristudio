@extends('layouts.app')

@section('title', 'Kontakt')




@section("header")
<div class=" w-full overflow-hidden">
    <div class="w-full bg-gray-900  z-2 mx-auto flex justify-between items-center">
        <div class="logo">
            <img src="{{ asset('images/ARISTUDIO.svg') }}" alt="Logo" class="w-44">
        </div>
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
                        class="transition ease-in-out delay-150 bg-indigo-500 px-8 py-2hover:-translate-y-1 hover:scale-110 hover:bg-indigo-400 duration-300 p-2 rounded">Kontakt</a></li>
            </ul>
        </nav>
    </div>
</div>

@endsection



@section("content")
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-6 rounded-lg shadow-lg">
    <div>
        <h2 class="text-3xl text-gary-800 font-bold mb-4">Skontaktuj się z nami</h2>
        <form action="/submit-contact-form" method="post" class="space-y-4">
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
                <label for="phone" class="block text-gray-700">Telefon:</label>
                <input type="text" id="phone" name="phone" class="w-full border rounded-md p-2" required>
            </div>
            <div>
                <label for="message" class="block text-gray-700">Wiadomość:</label>
                <textarea id="message" name="message" class="w-full border rounded-md p-2" rows="4" required></textarea>
            </div>
            <button type="submit" class="transition ease-in-out text-white delay-150 bg-indigo-500 px-8 py-2 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-400 duration-300 rounded">Wyślij</button>
        </form>
    </div>
    <div>
        <h2 class="text-3xl font-bold mb-4">Informacje kontaktowe</h2>
        <p class="text-gray-700 text-xl"><strong>Email:</strong> info@example.com</p>
        <p class="text-gray-700 text-xl"><strong>Telefon:</strong> +123 456 789</p>
        <p class="text-gray-700 text-xl"><strong>Adres:</strong> 123 Business Avenue, Suite 456, City, Country</p>
        <div class="mt-4">
            <img class="rounded-md" src="{{ asset('images/contact-image.jpg') }}" alt="Contact Image">
        </div>
    </div>
</div>
@endsection
