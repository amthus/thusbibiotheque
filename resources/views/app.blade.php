<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Bibliothèque</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tailwind CSS CDN (for demo purposes; ideally, use a build tool in production) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom color palette */
        .bg-primary { background-color: #180161; }
        .bg-secondary { background-color: #4F1787; }
        .text-accent { color: #EB3678; }
        .bg-highlight { background-color: #FB773C; }
        .border-highlight { border-color: #FB773C; }
    </style>
</head>
<body class="bg-gray-100">
    <nav class="bg-primary p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo Section -->
            <div class="text-accent text-2xl font-bold">
                <a href="{{ route('welcome') }}">Thusbiblioteque</a>
            </div>
            
            <!-- Menu Section -->
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('books.index') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium border border-transparent hover:border-highlight hover:bg-secondary transition duration-300 ease-in-out">Livres</a>
                <a href="{{ route('authors.index') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium border border-transparent hover:border-highlight hover:bg-secondary transition duration-300 ease-in-out">Auteurs</a>
            </div>
            
            <!-- Search Bar Section
            <div class="relative hidden md:block">
                <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-accent">
                <svg class="absolute top-1/2 left-3 transform -translate-y-1/2 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a7 7 0 015.25 11.592l4.363 4.362a1 1 0 01-1.414 1.415l-4.363-4.362A7 7 0 0111 4z"></path>
                </svg>
            </div> -->

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="menu-button" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden absolute top-16 left-0 w-full bg-primary text-white hidden">
            <div class="container mx-auto py-2">
                <a href="{{ route('books.index') }}" class="block px-4 py-2 hover:bg-secondary border border-transparent hover:border-highlight transition duration-300 ease-in-out">Livres</a>
                <a href="{{ route('authors.index') }}" class="block px-4 py-2 hover:bg-secondary border border-transparent hover:border-highlight transition duration-300 ease-in-out">Auteurs</a>
                <div class="relative mt-2">
                    <input type="text" placeholder="Search..." class="w-full pl-10 pr-4 py-2 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-accent">
                    <svg class="absolute top-1/2 left-3 transform -translate-y-1/2 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a7 7 0 015.25 11.592l4.363 4.362a1 1 0 01-1.414 1.415l-4.363-4.362A7 7 0 0111 4z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto py-6">
        @yield('content')
    </div>

    <footer class="bg-primary text-white py-4 mt-10">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-sm">&copy; {{ date('Y') }} Malthus A. Tous droits réservés.</p>
        </div>
    </footer>


    <script>
        // Toggle mobile menu
        document.getElementById('menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
