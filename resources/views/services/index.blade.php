@extends('layouts.app')

@section("header")
<div class="w-full overflow-hidden">
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
@endsection

@section("content")
<div class="container mx-auto p-6">
    <h1 class="text-5xl font-bold mb-8">Nasze Usługi</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="scroll-animate service-card p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Rozwiązania IT</h2>
            <p class="text-gray-700 mb-4">Oferujemy kompleksowe usługi IT, które obejmują zarządzanie siecią, wsparcie techniczne oraz integrację systemów.</p>
            <a href="#" class="text-indigo-500 hover:underline">Dowiedz się więcej</a>
        </div>
        <div class="scroll-animate service-card p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">SEO i Marketing</h2>
            <p class="text-gray-700 mb-4">Nasze usługi SEO i marketingu pomagają firmom zwiększyć widoczność w sieci i przyciągnąć więcej klientów.</p>
            <a href="#" class="text-indigo-500 hover:underline">Dowiedz się więcej</a>
        </div>
        <div class="scroll-animate service-card p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Projektowanie Graficzne</h2>
            <p class="text-gray-700 mb-4">Tworzymy atrakcyjne wizualnie projekty graficzne, które pomagają firmom wyróżnić się na rynku.</p>
            <a href="#" class="text-indigo-500 hover:underline">Dowiedz się więcej</a>
        </div>
        <div class="scroll-animate service-card p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Aplikacje Mobilne</h2>
            <p class="text-gray-700 mb-4">Specjalizujemy się w tworzeniu aplikacji mobilnych na platformy iOS i Android, które są intuicyjne i funkcjonalne.</p>
            <a href="#" class="text-indigo-500 hover:underline">Dowiedz się więcej</a>
        </div>
     
        <div class="scroll-animate service-card p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Tworzenie Stron Internetowych</h2>
            <p class="text-gray-700 mb-4">Specjalizujemy się w tworzeniu responsywnych i atrakcyjnych stron internetowych, które zapewniają doskonałe wrażenia użytkownika.</p>
            <a href="#" class="text-indigo-500 hover:underline">Dowiedz się więcej</a>
        </div>
    </div>
</div>
@endsection


