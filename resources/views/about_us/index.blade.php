@extends('layouts.app')



@section('header')
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

@section('description')
    <div class="absolute text-white z-2 top-1/2 p-2 w-1/2">
        <div class="mb-2">
            <h1 class="text-5xl">O Nas</h1>
        </div>

    </div>
@endsection

@section('content')
    <section class="mt-20">

        <div class=" flex flex-col lg:grid lg:grid-cols-2">
            <div class="flex scroll-animate justify-start">
                <div class="p-2 w-full md:p-5">
                    <h4 class="lg:text-4xl text-2xl font-bold text-indigo-500">Nasza Firma</h4>
                    <p class="lg:text-lg text-md text-gray-700">
                        ARISTUDIO to dynamiczna firma specjalizująca się w dostarczaniu kompleksowych rozwiązań z zakresu
                        technologii i designu. Nasza misja polega na tworzeniu innowacyjnych i funkcjonalnych produktów,
                        które spełniają najwyższe standardy jakości i zadowolenia klienta.
                    </p>
                    <p class="lg:text-lg text-md text-gray-700 mt-4">
                        Od momentu powstania, ARISTUDIO nieustannie się rozwija, zdobywając zaufanie klientów na całym
                        świecie. Nasz zespół składa się z doświadczonych specjalistów, którzy z pasją podchodzą do każdego
                        projektu, dostarczając rozwiązania dopasowane do indywidualnych potrzeb naszych klientów.
                    </p>
                    <p class="lg:text-lg text-md text-gray-700 mt-4">
                        Nasza oferta obejmuje szeroki zakres usług, od tworzenia oprogramowania, przez projektowanie
                        graficzne, aż po kompleksowe strategie marketingowe. Każdy projekt traktujemy z najwyższą
                        starannością, dbając o każdy szczegół, aby dostarczyć produkt, który przekracza oczekiwania naszych
                        klientów.
                    </p>
                </div>
            </div>
            <div>
                <img class="rounded-md" src="{{ asset('images/coding.jpg') }}" alt="Coding Image">
            </div>
        </div>

        <div class="flex scroll-animate justify-end mt-20">
            <div class="p-2 w-fullmd:p-5 md:w-1/2">
                <h4 class="lg:text-4xl text-2xl font-bold text-indigo-500">Nasz Zespół</h4>
                <p class="lg:text-lg text-md text-gray-700">Nasz zespół specjalistów jest dedykowany dostarczaniu najwyższej
                    jakości rozwiązań, które zapewniają zadowolenie klienta.</p>
            </div>
        </div>
        <div class="flex flex-col md:grid md:grid-cols-4 md:p-8 p-2 gap-4">

            <div class="p-2 shadow-md scroll-animate hover:scale-50 	">

                <img class="rounded-md" src="{{ asset('images\avatars\ceo_avatar.svg') }}" alt="Logo">
                <h5 class="text-xl font-semibold text-indigo-500">Bartek</h5>
                <p class="uppercase">CEO, Full stack dev</p>
                <p>Bartek jest siłą napędową naszej firmy, łącząc techniczną wiedzę z wizjonerskim przywództwem, aby
                    kierować naszymi projektami do sukcesu.</p>
                <div class="bg-indigo-500 opacity-50 w-full rounded-b-md h-4"></div>

            </div>
            <div class="p-2 shadow-md scroll-animate hover:scale-50 ">
                <img class="rounded-md" src="{{ asset('images\avatars\Mati.png') }}" alt="Logo">
                <h5 class="text-xl font-semibold text-indigo-500">Mateusz</h5>
                <p class="uppercase">Junior full stack dev</p>
                <p>Mateusz wnosi świeże pomysły i entuzjazm do zespołu, nieustannie doskonaląc swoje umiejętności i
                    przyczyniając się do naszych działań rozwojowych.</p>
                <div class="bg-indigo-500 opacity-50 w-full rounded-b-md h-4"></div>

            </div>
            <div class="p-2 shadow-md scroll-animate hover:scale-50 ">

                <img class="rounded-md" src="{{ asset('images\avatars\Patryk.png') }}" alt="Logo">
                <h5 class="text-xl font-semibold text-indigo-500">Patryk</h5>
                <p class="uppercase">Specjalista ds. marketingu</p>
                <p>Patryk jest naszym guru marketingu, tworząc strategie, które zwiększają nasz zasięg i angażują klientów
                    dzięki kreatywności i wnikliwości.</p>
                <div class="bg-indigo-500 opacity-50 w-full rounded-b-md h-4"></div>

            </div>
            <div class="p-2 shadow-md scroll-animate  hover:scale-50 ">
                <img class="rounded-md" src="{{ asset('images\avatars\Ewelina.png') }}" alt="Logo">
                <h5 class="text-xl font-semibold text-indigo-500">Ewelina</h5>
                <p class="uppercase un font">Projektant</p>
                <p>Ewelina dodaje artystycznego uroku naszemu zespołowi, projektując wizualnie oszałamiające grafiki, które
                    skutecznie przyciągają i przekazują wiadomość naszej marki.</p>
                <div class="bg-indigo-500 opacity-50 w-full rounded-b-md h-4"></div>

            </div>
        </div>
    </section>
    <section class="scroll-animate p-1 my-10 md:my-20">
        <div class="bg-white bg-opacity-75 p-1 rounded-lg">
            <div class=" p-2 md:p-5 w-full">
                <div class="bg-indigo-500 opacity-50 w-full rounded-t-md h-4"></div>

                <h4 class="text-3xl font-bold text-gray-800 mb-4">Skontaktuj się z nami</h4>
                <form action="/submit-contact-form" method="post" class="space-y-4">
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
                    <button type="submit"
                        class="transition ease-in-out text-white delay-150 bg-indigo-500 px-8 py-2 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-400 duration-300 rounded">Wyślij</button>
                </form>
            </div>
        </div>
    </section>
@endsection
