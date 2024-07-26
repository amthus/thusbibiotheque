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
        /* palette de couleur */
        .bg-primary { background-color: #180161; }
        .bg-secondary { background-color: #4F1787; }
        .text-accent { color: #EB3678; }
        .bg-highlight { background-color: #FB773C; }
        .border-highlight { border-color: #FB773C; }

        /* style */
        .footer-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%; 
        }
        .loading-circle {
            position: relative;
            width: 150px; 
            height: 150px; 
            border-radius: 10%;
            border: 10px solid #EB3678;
            border-top: 10px solid transparent;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 5px;
        }
        .loading-circle img {
            width: 1200px; 
            height: 180px; 
            border-radius: 10%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .loading-text {
            display: inline-block;
            margin-top: 15px;
            color: white;
            font-size: 16px; 
            font-weight: bold;
            background-color: rgba(24, 1, 97, 0.8); 
            padding: 10px;
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
            background-clip: padding-box;
            text-align: center; 
        }
        .loading-text:hover {
            background-color: rgba(128, 0, 128, 0.4);
            color: #FFFFFF; 
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .floating-text-container {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            width: 100%;
            bottom: 80px; 
        }
        .floating-text {
            color: #EB3678;
            font-size: 18px;
            font-weight: bold;
            margin: 5px 0; 
            animation: float 3s ease-in-out infinite; 
        }
        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        .arrow {
            position: absolute;
            font-size: 24px;
            color: #EB3678;
        }
        .arrow-books {
            top: 60px;
            left: 20%;
            transform: rotate(-90deg);
        }
        .arrow-authors {
            top: 60px;
            right: 20%;
            transform: rotate(90deg);
        }
    </style>
</head>
<body class="bg-gray-100">
    <nav class="bg-primary p-4">
        <div class="container mx-auto flex justify-between items-center relative">
            <!-- Logo  -->
            <div class="text-accent text-2xl font-bold">
                <a href="{{ route('welcome') }}">Thusbiblioteque</a>
            </div>
            
            <!-- Menu -->
            <div class="hidden md:flex space-x-4 relative">
                <a href="{{ route('books.index') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium border border-transparent hover:border-highlight hover:bg-secondary transition duration-300 ease-in-out relative">Livres
                    <div class="arrow arrow-books">→</div>
                </a>
                <a href="{{ route('authors.index') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium border border-transparent hover:border-highlight hover:bg-secondary transition duration-300 ease-in-out relative">Auteurs
                    <div class="arrow arrow-authors">←</div>
                </a>
            </div>
            
            <!-- Mobile Menu -->
            <div class="md:hidden flex items-center">
                <button id="menu-button" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <div class="container mx-auto py-6">
        @yield('content')
    </div>
    
    <div class="footer-content">
        <div class="loading-circle">
            <img src="{{ asset('img/fo.jpg') }}" alt="Image" />
        </div>
        <div class="loading-text">
            Bienvenue dans la bibliothèque de AMETEPE Thomas Robert Malthus.
        </div>
    </div>
    
    <div class="floating-text-container">
        <div class="floating-text">
            Veuillez cliquer sur "Livres" pour voir nos livres.
        </div>
        <div class="floating-text">
            Veuillez cliquer sur "Auteurs" pour voir nos auteurs.
        </div>
    </div>


    <footer class="bg-primary text-white py-4">
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
