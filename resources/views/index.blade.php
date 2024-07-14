
@extends('layouts.app')


@section("header")
<div class="relative w-full overflow-hidden">
            
    <video autoplay loop muted class="background-video">
        <source style="height: 300px" class="z-1 " src="{{ asset('videos/3129671-uhd_3840_2160_30fps.mp4') }}" type="video/mp4">
    </video>
    <div class="w-full absolute top-0 z-2 mx-auto flex justify-between items-center">
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


@section("description")
<div class="absolute text-white z-2 top-1/2 p-2 w-1/2">
    <div class="mb-2">
        <h1 class="text-5xl"> Witamy w Aristudio!</h1>
        <h2 class="text-xl">Jesteśmy zespołem ekspertów w zakresie programowania i marketingu, dedykowanym dostarczaniu najnowocześniejszych rozwiązań dla Twoich potrzeb biznesowych.</h2>
    </div>
    <a href="/projekty"
        class="transition ease-in-out delay-150 bg-indigo-500 px-8 py-2 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-400 duration-300 p-2 rounded">Pokaż projekty</a>
    <a href="/kontakt"
        class="transition ease-in-out delay-150 border-2 border-indigo-500 px-8 py-2 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 p-2 rounded">Kontakt</a>
</div>
@endsection

@section("content")
    <section class="p-6">
        <div class="flex flex-col scroll-animate  my-20 w-1/2 text-gray-700">
            <h3 class="text-lg">Aristudio</h3>
            <h4 class="text-4xl font-bold text-gray-800">Odkryj potencjał swojego biznesu z naszymi usługami</h4>
            <p class="text-lg">Specjalizujemy się w dostarczaniu najwyższej jakości rozwiązań SEO, marketingowych i IT, aby pomóc firmom rozwijać się. Nasz zespół ekspertów jest dedykowany dostarczaniu wyjątkowych rezultatów i napędzaniu wzrostu naszych klientów.</p>
       
        </div>
    
        <div class="grid grid-cols-3 gap-6 text-gray-700 mb-10">
            <div class="service-card scroll-animate flex flex-col space-y-2">
                <div class="bg-indigo-500 opacity-50 w-full rounded-t-md h-4"></div>
                <div class="p-4 h-full">
                    <h4 class="text-3xl font-semibold text-gray-800">Usprawnij swoją infrastrukturę IT</h4>
                <p class="text-lg text-gray-700">Oferujemy kompleksowe rozwiązania IT, aby zoptymalizować Twoje operacje i zwiększyć wydajność.</p>
                </div>
                <div class="bg-indigo-500 w-full rounded-b-md h-4"></div>
            </div>
    
            <div class="service-card scroll-animate flex flex-col space-y-2">
                <div class="bg-indigo-500 w-full rounded-t-md h-4"></div>
                <div class="p-4 h-full">
                    <h4 class="text-3xl font-semibold text-gray-800">Zwiększ widoczność online</h4>
                <p class="text-lg text-gray-700">Nasze usługi SEO pomagają Twojej firmie osiągnąć wyższe pozycje w wynikach wyszukiwania, przyciągając więcej klientów.</p>
                </div>
                <div class="bg-indigo-500 opacity-50 w-full rounded-b-md h-4"></div>
            </div>
    
            <div class="service-card scroll-animate relative flex flex-col space-y-2">
                <div class="bg-indigo-500 opacity-50 w-full rounded-t-md h-4"></div>
                <div class="p-4 h-full">
                    <h4 class="text-3xl font-semibold text-gray-800">Skuteczny marketing</h4>
                    <p class="text-lg text-gray-700">Tworzymy strategie marketingowe, które zwiększają zasięg Twojej marki i angażują Twoich klientów.</p>
                </div>
                
                <div class="bg-indigo-500 absolute bottom-0 w-full rounded-b-md h-4"></div>
            </div>
        </div>
    
        <div class="flex space-x-4 scroll-animate">
            <a href="/uslugi"
                class="transition ease-in-out delay-150 hover:text-white border-2 border-indigo-500 px-8 py-2 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 rounded">Dowiedz się więcej</a>
            <a href="/kontakt"
                class="transition ease-in-out text-white delay-150 bg-indigo-500 px-8 py-2 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-400 duration-300 rounded">Kontakt</a>
        </div>
    </section>
    
    <section class="scroll-animate p-6 mt-20">
        <div class="grid grid-cols-2 items-center">
            <div class="p-5">
                <div class="bg-indigo-500 opacity-50 w-full rounded-t-md h-4"></div>
    
                <h4 class=" font-bold text-gray-800 text-5xl">Nasze Cele</h4>
                <p class="text-lg text-gray-700">Naszym celem jest dostarczanie innowacyjnych rozwiązań IT, które pomogą naszym klientom osiągnąć ich pełny potencjał. Chcemy być liderem na rynku usług SEO i marketingu, oferując kompleksowe i skuteczne strategie, które przynoszą wymierne rezultaty.</p>
                <ul class="list-disc list-inside text-lg text-gray-700">
                    <li>Oferowanie najwyższej jakości usług IT i marketingowych.</li>
                    <li>Budowanie długotrwałych relacji z klientami opartych na zaufaniu i zadowoleniu.</li>
                    <li>Stałe doskonalenie i innowacje w naszych produktach i usługach.</li>
                    <li>Pomaganie firmom w zwiększaniu ich widoczności i osiąganiu lepszych wyników.</li>
                    <li>Tworzenie wartości dla naszych klientów poprzez skuteczne strategie SEO i marketingowe.</li>
                </ul>
            </div>
            <div>
                <img class="rounded-md" src="{{ asset('images/coding.jpg') }}" alt="Coding Image">
            </div>
        </div>
    </section>
    
    
    <section class="mt-20">
        <div class="flex scroll-animate justify-end">
            <div class="p-5 w-1/2">
                <h4 class="text-5xl font-bold text-gray-800">Nasz Zespół</h4>
                <p class="text-lg text-gray-700">Nasz zespół specjalistów jest dedykowany dostarczaniu najwyższej jakości rozwiązań, które zapewniają zadowolenie klienta.</p>
            </div>
        </div>
        <div class="grid grid-cols-4 p-8 gap-4">

            <div class="p-2 shadow-md scroll-animate hover:scale-50 	">

                <img class="rounded-md" src="{{ asset('images\avatars\ceo_avatar.svg') }}" alt="Logo">
                <h5 class="text-xl font-semibold">Bartek</h5>
                <p class="uppercase">CEO, Full stack dev</p>
                <p>Bartek jest siłą napędową naszej firmy, łącząc techniczną wiedzę z wizjonerskim przywództwem, aby kierować naszymi projektami do sukcesu.</p>
                <div class="bg-indigo-500 opacity-50 w-full rounded-b-md h-4"></div>

            </div>
            <div class="p-2 shadow-md scroll-animate hover:scale-50 ">
                <img class="rounded-md" src="{{ asset('images\avatars\Mati.png') }}" alt="Logo">
                <h5 class="text-xl font-semibold">Mateusz</h5>
                <p class="uppercase">Junior full stack dev</p>
                <p>Mateusz wnosi świeże pomysły i entuzjazm do zespołu, nieustannie doskonaląc swoje umiejętności i przyczyniając się do naszych działań rozwojowych.</p>
                <div class="bg-indigo-500 opacity-50 w-full rounded-b-md h-4"></div>

            </div>
            <div class="p-2 shadow-md scroll-animate hover:scale-50 ">

                <img class="rounded-md" src="{{ asset('images\avatars\Patryk.png') }}" alt="Logo">
                <h5 class="text-xl font-semibold">Patryk</h5>
                <p class="uppercase">Specjalista ds. marketingu</p>
                <p>Patryk jest naszym guru marketingu, tworząc strategie, które zwiększają nasz zasięg i angażują klientów dzięki kreatywności i wnikliwości.</p>
                <div class="bg-indigo-500 opacity-50 w-full rounded-b-md h-4"></div>

            </div>
            <div class="p-2 shadow-md scroll-animate  hover:scale-50 ">
                <img class="rounded-md" src="{{ asset('images\avatars\Ewelina.png') }}" alt="Logo">
                <h5 class="text-xl font-semibold">Ewelina</h5>
                <p class="uppercase un font">Projektant</p>
                <p>Ewelina dodaje artystycznego uroku naszemu zespołowi, projektując wizualnie oszałamiające grafiki, które skutecznie przyciągają i przekazują wiadomość naszej marki.</p>
                <div class="bg-indigo-500 opacity-50 w-full rounded-b-md h-4"></div>

            </div>
        </div>
    </section>
    
    <section class="scroll-animate p-1 my-20" >
        <div class="bg-white bg-opacity-75 p-1 rounded-lg">
            <div class="grid grid-cols-2 items-center gap-8 p-8">
                <div class="h-full">
                <div class=" p-10 h-full rounded-t-md">
                    <h4 class="text-3xl font-bold text-gray-800 mb-4">Informacje kontaktowe</h4>
                    <p class="text-gray-700 text-xl"><strong>Email:</strong> info@example.com</p>
                    <p class="text-gray-700 text-xl"><strong>Email:</strong> info@example.com</p>
                    <p class="text-gray-700 text-xl"><strong>Email:</strong> info@example.com</p>
                    <p class="text-gray-700 text-xl"><strong>Email:</strong> info@example.com</p>
                    <p class="text-gray-700 text-xl"><strong>Email:</strong> info@example.com</p>

                    <p class="text-gray-700 text-xl"><strong>Telefon:</strong> +123 456 789</p>

                </div>
            </div>
                
                <div class="p-5">
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
                        <button type="submit" class="transition ease-in-out text-white delay-150 bg-indigo-500 px-8 py-2 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-400 duration-300 rounded">Wyślij</button>
                    </form>
                </div>
            </div>
            
          
        </div>
    </section>
    
@endsection    
    