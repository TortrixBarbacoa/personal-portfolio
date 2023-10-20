<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        <title>Home</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        {{-- Google Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@700&family=Roboto&display=swap" rel="stylesheet">

        {{-- Font Awesome --}}
        <script src="https://kit.fontawesome.com/87a0dc1d3c.js" crossorigin="anonymous"></script>

    </head>

    {{-- Alpine.js Navigation --}}
    <body class="bg-scroll bg-cover bg-no-repeat flex flex-row" style="background-image: url('{{ asset('img/background.png') }}');" x-data="{ currentSection: 'home' }" >

        {{-- * Sidebar --}}
        <div class="container flex flex-col w-20 h-screen bg-aside items-center justify-center gap-y-9 sticky top-0">

            {{-- X Logo --}}
            <a href="https://twitter.com/not_justEli" target="_blank">
                <i class="cursor-pointer fa-brands fa-x-twitter text-4xl text-background animate-fade animate-once animate-delay-100 animate-ease-in-out hover:scale-105"></i>
            </a>

            {{-- Instagram Logo --}}
            <a href="https://www.instagram.com/not_just.eli/" target="_blank">
                <i class="cursor-pointer fa-brands fa-instagram text-4xl text-background animate-fade animate-once animate-delay-100 animate-ease-in-out hover:scale-105"></i>
            </a>
            

            {{-- Github Logo --}}
            <a href="https://github.com/TortrixBarbacoa" target="_blank">
                <i class="cursor-pointer fa-brands fa-github text-4xl text-background animate-fade animate-once animate-delay-100 animate-ease-in-out hover:scale-105"></i>
            </a>
            

            {{-- Linkedin Logo --}}
            <a href="https://www.linkedin.com/in/elian-alvarado-69420gt/" target="_blank">
                <i class="cursor-pointer fa-brands fa-linkedin text-4xl text-background animate-fade animate-once animate-delay-100 animate-ease-in-out hover:scale-105"></i>
            </a>
        </div>

        {{-- * Main-View --}}
        <div class="container flex flex-col w-full h-fit">

            {{-- Main Container --}}
            <div class="w-full h-fit flex flex-col px-8 py-5 mb-16">

                {{-- Navbar Content --}}
                <div class="flex flex-row w-full h-14 content-center justify-start">

                    {{-- Logo --}}
                    <img src="{{ asset('img/logo.png') }}" class="" alt="logo">

                    {{-- Navigation Items --}}
                    <div class="w-full h-full flex flex-row items-center justify-end gap-x-12">

                        {{-- Main --}}
                        <h2 class="cursor-pointer text-lg font-roboto text-sidetextcolor hover:scale-105" @click="currentSection = 'home'" > .inicio <span class="text-sidespancolor">( <span class="text-sidefunctionspancolor" x-show="currentSection === 'home'" >true</span> )</span> </h2>
                        
                        {{-- About Me --}}
                        <h2 class="cursor-pointer text-lg font-roboto text-sidetextcolor hover:scale-105" @click="currentSection = 'about-me'"> .sobre-mí <span class="text-sidespancolor">( <span class="text-sidefunctionspancolor" x-show="currentSection === 'about-me'">true</span> )</span> </h2>
                        
                        {{-- Projects --}}
                        <h2 class="cursor-pointer text-lg font-roboto text-sidetextcolor hover:scale-105" @click="currentSection = 'projects'"> .proyectos <span class="text-sidespancolor">( <span class="text-sidefunctionspancolor" x-show="currentSection === 'projects'">true</span> )</span> </h2>
                        
                        {{-- Contact --}}
                        <h2 class="cursor-pointer text-lg font-roboto text-sidetextcolor hover:scale-105" @click="currentSection = 'contact'"> .contacto <span class="text-sidespancolor">( <span class="text-sidefunctionspancolor" x-show="currentSection === 'contact'">true</span> )</span> </h2>
                    </div>
                </div>

                {{-- Content --}}
                <div class="flex flex-col w-full h-fit mt-16">
                    <div x-show="currentSection === 'home'">
                        <x-home />
                    </div>
                    <div x-show="currentSection === 'about-me'">
                        <x-about-me />
                    </div>
                    <div x-show="currentSection === 'projects'">
                        <x-projects />
                    </div>
                    <div x-show="currentSection === 'contact'">
                        <x-contact />
                    </div>
                </div>

            </div>

            {{-- Credits --}}
            <div class="flex flex-col w-full h-48 items-center content-center justify-center bg-black gap-y-2">
                <h1 class="text-aside font-roboto text-lg">Todos los derechos reservados, Elian Alvarado 2023</h1>
                <h1 class="text-aside font-roboto text-lg">Universidad del Valle de Guatemala, Campus Sur</h1>
                <div class="flex flex-row gap-x-3 items-center justify-center">
                    <i class="fab fa-laravel text-aside font-roboto text-lg"></i>
                    <h1 class="text-aside font-roboto text-lg">Construida con php Laravel</h1>
                </div>
                <div class="flex flex-row gap-x-3 items-center justify-center">
                    <i class="fa-solid fa-swatchbook text-aside font-roboto text-lg"></i>
                    <h1 class="text-aside font-roboto text-lg">Diseñada con Tailwindcss</h1>
                </div>
            </div>

        </div>
    </body>

</html>
