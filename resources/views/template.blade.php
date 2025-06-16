<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('titulo')</title>
    <style>
        body {
            font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
        }
    </style>
</head>
<body class="bg-yellow-50 min-h-screen">
    <header class="bg-pink-500 shadow-lg">
        <div class="container mx-auto px-4 py-4 flex flex-wrap items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png" alt="Pet Shop Logo" class="h-12 w-12 rounded-full bg-white shadow-md">
                <h1 class="text-3xl font-extrabold text-white tracking-wide drop-shadow-lg">
                    AmigoPet <span class="text-yellow-300">Store</span>
                </h1>
            </div>
            <button class="lg:hidden text-yellow-100 focus:outline-none" id="menuBtn">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            <nav class="w-full lg:w-auto mt-4 lg:mt-0 hidden flex-col lg:flex lg:flex-row gap-2 lg:gap-6 items-center" id="menuNav">
                <a href="home" class="text-lg font-medium text-yellow-50 hover:text-yellow-300 transition w-full text-left py-2 px-2 lg:w-auto lg:text-center">Home</a>
                <a href="sobre" class="text-lg font-medium text-yellow-50 hover:text-yellow-300 transition w-full text-left py-2 px-2 lg:w-auto lg:text-center">Sobre</a>
                <a href="produtos" class="text-lg font-medium text-yellow-50 hover:text-yellow-300 transition w-full text-left py-2 px-2 lg:w-auto lg:text-center">Produtos</a>
                <a href="contato" class="text-lg font-medium text-yellow-50 hover:text-yellow-300 transition w-full text-left py-2 px-2 lg:w-auto lg:text-center">Contato</a>
                @if(session()->has('usuario_id'))
                    <div class="relative w-full lg:w-auto">
                        <button id="userMenuBtn" class="bg-yellow-300 text-pink-700 font-semibold px-4 py-2 rounded-lg shadow hover:bg-yellow-200 transition flex items-center gap-2 w-full lg:w-auto focus:outline-none">
                            <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20"><path d="M10 10a4 4 0 100-8 4 4 0 000 8zm-7 8a7 7 0 1114 0H3z"/></svg>
                            {{ session('usuario_nome') }}
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div id="userDropdown" class="absolute right-0 mt-2 w-40 bg-white rounded-lg shadow-lg py-2 z-50 hidden">
                            <a href="/dashboard" class="block px-4 py-2 text-gray-700 hover:bg-yellow-100">Dashboard</a>
                            <hr class="my-1">
                            <a href="/logout" class="block px-4 py-2 text-red-600 hover:bg-yellow-100">Sair</a>
                        </div>
                    </div>
                @else
                    <a href="/frmlogin" class="bg-yellow-300 text-pink-700 font-semibold px-4 py-2 rounded-lg shadow hover:bg-yellow-200 transition w-full lg:w-auto text-center">Entrar</a>
                @endif
            </nav>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const menuBtn = document.getElementById('menuBtn');
                const menuNav = document.getElementById('menuNav');
                menuBtn.addEventListener('click', () => {
                    menuNav.classList.toggle('hidden');
                });

                const userMenuBtn = document.getElementById('userMenuBtn');
                const userDropdown = document.getElementById('userDropdown');
                if (userMenuBtn && userDropdown) {
                    let dropdownOpen = false;

                    function openDropdown() {
                        userDropdown.classList.remove('hidden');
                        dropdownOpen = true;
                    }
                    function closeDropdown() {
                        userDropdown.classList.add('hidden');
                        dropdownOpen = false;
                    }

                    userMenuBtn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        dropdownOpen ? closeDropdown() : openDropdown();
                    });

                    userDropdown.addEventListener('click', function(e) {
                        e.stopPropagation();
                    });

                    document.addEventListener('click', function() {
                        if (dropdownOpen) closeDropdown();
                    });

                    document.addEventListener('keydown', function(e) {
                        if (e.key === "Escape") closeDropdown();
                    });
                }
            });
        </script>
    </header>
    <main>
        @yield('conteudo')
    </main>
</body>
</html>