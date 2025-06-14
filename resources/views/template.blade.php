<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=menu" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('titulo')</title>
</head>
<body>
    <header class="bg-dark shadow-sm">
        <div class="container py-2">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <h1 class="mb-0" style="font-size:2rem; color: #FFD600;">Laravel</h1>
                <button class="navbar-toggler d-lg-none border-0 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#menuHeader" aria-controls="menuHeader" aria-expanded="false" aria-label="Menu">
                    <span class="material-symbols-outlined" style="color: #FFD600;">menu</span>
                </button>
                <div class="collapse d-lg-flex flex-lg-row align-items-center gap-2 mt-3 mt-lg-0 w-100" id="menuHeader">
                    <ul class="list-unstyled d-lg-flex flex-lg-row mb-0 w-100">
                        <li class="w-100">
                            <a href="home" class="d-block px-3 py-2 text-decoration-none text-light w-100">Home</a>
                        </li>
                        <li class="w-100">
                            <a href="sobre" class="d-block px-3 py-2 text-decoration-none text-light w-100">Sobre</a>
                        </li>
                        <li class="w-100">
                            <a href="produtos" class="d-block px-3 py-2 text-decoration-none text-light w-100">Produtos</a>
                        </li>
                        <li class="w-100">
                            <a href="contato" class="d-block px-3 py-2 text-decoration-none text-light w-100">Contato</a>
                        </li>
                        <li class="w-100">
                        @if(session()->has('usuario_id'))
                            <div class="dropdown w-100">
                                <button class="btn btn-warning btn-sm dropdown-toggle w-100 text-start px-3 py-2" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ session('usuario_nome') }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end w-100" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="/logout">Sair</a></li>
                                </ul>
                            </div>
                        @else
                            <a href="/frmlogin" class="btn btn-warning btn-sm w-100 text-start px-3 py-2">Entrar</a>
                        @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('conteudo')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>