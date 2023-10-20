{{-- Scripts --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const title = document.getElementById('typewriter-title');

        const typewriter = new Typewriter(title, {
            loop: true, // Set to true if you want it to loop
            delay: 75, // Time delay between each character
        });

        typewriter
            .typeString('Junior Web Dev')
            .pauseFor(1500)
            .deleteAll()
            .typeString('Diseñador Front-End')
            .pauseFor(1500)
            .deleteAll()
            .typeString('Estudiante')
            .pauseFor(1500)
            .deleteAll()
            .start();
    });
</script>

{{-- * Text & Titles Container --}}
<div class="flex flex-col gap-y-1 w-full h-full items-start justify-center mb-24 mt-16">

    {{-- Title --}}
    <h4 class="text-base text-maintextspanalt font-poppins animate-fade-right animate-once animate-ease-in-out">¡Hola! Mi nombre es</h4>
    <h1 class="text-8xl text-white font-poppins animate-fade-up animate-once animate-ease-in-out">Elian,</h1>
    <h1 id="typewriter-title" class="text-transparent text-8xl bg-clip-text bg-gradient-to-r from-maintextspanalt to-maintextspan via-sidefunctionspancolor font-poppins animate-fade-down animate-once animate-ease-in-out"></h1>

    {{-- Description --}}
    <div class="mt-4 mb-1 w-20 h-5 bg-sidespancolor"></div>
    <div>
        <p class="font-lato text-white text-xl w-4/5 animate-fade-left animate-once animate-ease-in-out">
            Soy un desarrollador web junior con un fuerte dominio de HTML, CSS y JavaScript. Disfruto diseñando interfaces de usuario que sean atractivas visualmente y fáciles de usar, buscando siempre mejorar la experiencia.
        </p>
    </div>
</div>

{{-- Skills --}}
<div class="flex flex-row w-full h-full items-center justify-between mb-10">

    {{-- HTML Card --}}
    <div class="flex flex-row w-1/5 h-24 bg-black items-end text-end hover:animate-wiggle hover:animate-infinite hover:animate-ease-in-out cursor-default shadow-xl">
        <div class="flex self-start -mt-6 mr-20">
            <i class="fab fa-html5 text-8xl text-sidefunctionspancolor animate-fade-up animate-once animate-ease-in-out"></i>
        </div>
        <h1 class="text-4xl mb-3 text-white font-poppins animate-fade-up animate-once animate-ease-in-out">HTML</h1>
    </div>

    {{-- CSS Card --}}
    <div class="flex flex-row w-1/5 h-24 bg-black items-end text-end hover:animate-wiggle hover:animate-infinite hover:animate-ease-in-out cursor-default shadow-xl">
        <div class="flex self-start -mt-6 mr-24">
            <i class="fab fa-css3-alt text-8xl text-sidefunctionspancolor animate-fade-up animate-once animate-ease-in-out"></i>
        </div>
        <h1 class="text-4xl mb-3 text-white font-poppins animate-fade-up animate-once animate-ease-in-out">CSS</h1>
    </div>

    {{-- JavaScript Card --}}
    <div class="flex flex-row w-1/5 h-24 bg-black items-end text-end hover:animate-wiggle hover:animate-infinite hover:animate-ease-in-out cursor-default shadow-xl">
        <div class="flex self-start -mt-6 mr-12">
            <i class="fab fa-js-square text-8xl text-sidefunctionspancolor animate-fade-up animate-once animate-ease-in-out"></i>
        </div>
        <div class="flex flex-col text-start animate-fade-up animate-once animate-ease-in-out">
            <h1 class="text-4xl -mb-2 text-white font-poppins ">Java</h1>
            <h1 class="text-4xl mb-3 text-white font-poppins ">Script</h1>
        </div>
    </div>

    {{-- Java Card --}}
    <div class="flex flex-row w-1/5 h-24 bg-black items-end text-end hover:animate-wiggle hover:animate-infinite hover:animate-ease-in-out cursor-default shadow-xl">
        <div class="flex self-start -mt-6 mr-20">
            <i class="fab fa-java text-8xl text-sidefunctionspancolor animate-fade-up animate-once animate-ease-in-out"></i>
        </div>
        <h1 class="text-4xl mb-3 text-white font-poppins animate-fade-up animate-once animate-ease-in-out">Java</h1>
    </div>

</div>

<div class="flex h-fit w-full content-center justify-end mb-16">
    <div class="flex h-5 w-20 bg-sidespancolor"></div>
</div>

<div class="flex flex-row w-full h-60 content-center">
    
    {{-- Favorite tools --}}
    <div class="flex flex-col w-full h-full cursor-default">
        <h1 class="font-poppins text-4xl capitalize text-sidefunctionspancolor text-center">Herramientas favoritas</h1>
        <div class="flex flex-row w-full h-full justify-around items-end">

            <div class="flex flex-col h-full w-fit items-center justify-end gap-y-5">
                <i class="text-8xl fas fa-code text-transparent bg-clip-text bg-gradient-to-r from-sidefunctionspancolor to-pink hover:scale-105"></i>
                <h3 class="font-roboto text-2xl font-bold text-white">VS Code</h3>
            </div>
            <div class="flex flex-col h-full w-fit items-center justify-end gap-y-5">
                <i class="text-8xl fab fa-ubuntu justify-center text-transparent bg-clip-text bg-gradient-to-r to-sidefunctionspancolor from-pink hover:scale-105"></i>
                <h3 class="font-roboto text-2xl font-bold text-white">Terminal Linux</h3>
            </div>
            <div class="flex flex-col h-full w-fit items-center justify-end gap-y-5">
                <i class="text-8xl fa-brands fa-bootstrap text-transparent bg-clip-text bg-gradient-to-r from-sidefunctionspancolor to-pink hover:scale-105"></i>
                <h3 class="font-roboto text-2xl font-bold text-white">Bootstrap</h3>
            </div>
            <div class="flex flex-col h-full w-fit items-center justify-end gap-y-5">
                <i class="text-8xl fa-brands fa-discord text-transparent bg-clip-text bg-gradient-to-r to-sidefunctionspancolor from-pink hover:scale-105"></i>
                <h3 class="font-roboto text-2xl font-bold text-white">Discord</h3>
            </div>  
            <div class="flex flex-col h-full w-fit items-center justify-end gap-y-5">
                <i class="text-8xl fa-brands fa-microsoft text-transparent bg-clip-text bg-gradient-to-r from-sidefunctionspancolor to-pink hover:scale-105"></i>
                <h3 class="font-roboto text-2xl font-bold text-white">Windows</h3>
            </div>  
            <div class="flex flex-col h-full w-fit items-center justify-end gap-y-5">
                <i class="text-8xl fa-brands fa-github-alt text-transparent bg-clip-text bg-gradient-to-r to-sidefunctionspancolor from-pink hover:scale-105"></i>
                <h3 class="font-roboto text-2xl font-bold text-white">GitHub</h3>
            </div>         
        </div>
    </div>
</div>