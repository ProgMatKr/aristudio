<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        .service-card {
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(229, 231, 235, 0.365);
            /* bg-gray-100 with 50% opacity */
            z-index: 0;
        }

        .service-card>* {
            position: relative;
            z-index: 1;
        }

        .scroll-animate {
            opacity: 0;
            transition: opacity 1s ease-out;
        }

        @keyframes fadeIn {
            from { scale: .8; opacity:0 ;
            }

            to {
                scale: 1; opacity: 1;
            }
        }

        @keyframes zoomin {
            from {
                transform: scale(0.5, 0.5);
            }

            to {
                transform: scale(1, 1);
            }
        }

        .animate-zoomin1 {
            animation: zoomin 2s forwards;
        }

        .animate-zoomin2 {
            animation: zoomin 3s forwards;
        }

        .animate-zoomin3 {
            animation: zoomin 4s forwards;
        }
        .animate-zoomin4 {
            animation: zoomin 5s forwards;
        }


        .animate {
            opacity: 1;
            animation: fadeIn 2s forwards;
        }

        
    </style>
</head>

<body>
    <header class="bg-black">
        @yield('header')
        @yield('description')
    </header>

<main>
    @yield('content')
</main>
    
    
    
    
    <!-- Główna treść strony idzie tutaj -->
    
    <footer class="text-white"> 
        <script>

   
            document.addEventListener('scroll', function() {
                const elementsFadeIn = document.querySelectorAll('.scroll-animate');
                const elementsZoomIn = document.querySelectorAll('.scroll-zoomin');
                const windowHeight = window.innerHeight;
        
                elementsFadeIn.forEach(element => {
                    const position = element.getBoundingClientRect().top;
        
                    // Sprawdzanie, czy element jest w obrębie widoku
                    if (position < windowHeight && position > 0) {
                        element.classList.add('animate');
                    }
                });
        
                elementsZoomIn.forEach(element => {
                    const position = element.getBoundingClientRect().top;
        
                    // Sprawdzanie, czy element jest w obrębie widoku
                    if (position < windowHeight && position > 0) {
                        element.classList.add('animate-zoomin');
                    }
                });
            });
            function toggleMenu() {
    var x = document.getElementById("myLinks");
    x.classList.toggle("hidden");
}
        </script>
        
        <div class="w-full mx-auto p-10 bg-gray-900 flex flex-col lg:grid lg:grid-cols-6 gap-8">
            <div>
                <img src="{{ asset('images/ARISTUDIO.svg') }}" alt="Logo" class="w-44">
            </div>
            <div>
                <h5 class="text-lg font-bold mb-4">Szybkie linki</h5>
                <ul>
                    <li><a href="/o-nas" class="text-gray-200 hover:text-indigo-500">O nas</a></li>
                    <li><a href="/uslugi" class="text-gray-200 hover:text-indigo-500">Usługi</a></li>
                    <li><a href="/kontakt" class="text-gray-200 hover:text-indigo-500">Kontakt</a></li>
                    <li><a href="/blog" class="text-gray-200 hover:text-indigo-500">Blog</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-lg font-bold mb-4">Wsparcie</h5>
                <ul>
                    <li><a href="/polityka-prywatnosci" class="text-gray-200 hover:text-indigo-500">Polityka prywatności</a></li>
                    <li><a href="/kontakt" class="text-gray-200 hover:text-indigo-500">Kontakt</a></li>

                </ul>
            </div>
           
            <div>
                <h5 class="text-lg font-bold mb-4">O nas</h5>
                <ul>
                    <li><a href="/o-nas" class="text-gray-200 hover:text-indigo-500">O nas</a></li>
    
                </ul>
            </div>
            <div>
                <h5 class="text-lg font-bold mb-4">Warunki</h5>
                <ul>
                    <li><a href="#" class="text-gray-200 hover:text-indigo-500">Polityka plików cookie</a></li>
                </ul>
            </div>
        </div>
        <div class="w-full mx-auto bg-gray-900 border-t border-indigo-500 p-4">
            <div class="flex justify-between items-center">
                <p class="text-gray-200">&copy; 2024 Moja Strona. Wszelkie prawa zastrzeżone.</p>
            </div>
        </div>
    </footer>
    
</body>

</html>
