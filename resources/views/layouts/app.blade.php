<!DOCTYPE html>
<html lang="str_replace('_','-',app()->getLocale())">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevsTagram - @yield('titulo')</title>

        <!-- Fonts -->

        <!-- Styles -->
@vite('resources/css/app.css')       
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-slate-600 shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black ">DevStagram</h1>   
                <nav class="flex gap-2 items-center">
                    <a href="#" class="font-bold uppercase text-gray-100 text-sm">Login    </a>
                    <a href="/crear-cuenta" class="font-bold uppercase text-gray-100 text-sm">Crear Cuenta    </a>
    
                </nav>
            </div>
            
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
            @yield('contenido')
        </main>


        <footer class="text-center p-5 text-gray-500 font bold uppercase mt-10">
           DevStagram - Todos los derechos reservados {{ now()->year }}
           {{-- 
                <?php echo date('Y'); 
                ?>
                {{ 1 + 1 }}
            
            --}}
           

        </footer>
    
    </body>
</html>