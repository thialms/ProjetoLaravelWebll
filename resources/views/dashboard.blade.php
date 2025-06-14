@extends('template')
@section('titulo', 'Dashboard')


@section('conteudo')
    <div class="container my-5">
        <div class="bg-white border rounded shadow-sm p-4">
            <h2 class="text-center mb-4" style="font-weight: 600;">Bem-vindo(a), {{ session('usuario_nome') }}</h2>
            <div class="row g-4 justify-content-center">

                <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex align-items-stretch">
                    <a href="/frmusuario" class="text-decoration-none card w-100 h-100 text-center border-0 shadow-sm" style="background: #f8f9fa;">
                        <div class="card-body">
                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Cadastro de Usuários" style="width:56px; height:56px;" class="mb-2">
                            <h6 class="fw-bold text-danger mb-1">Cadastro de Usuários</h6>
                            <small class="text-muted">Criar novo usuário</small>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex align-items-stretch">
                    <a href="/frmproduto" class="text-decoration-none card w-100 h-100 text-center border-0 shadow-sm text-decoration-none" style="background: #f8f9fa;">
                        <div class="card-body">
                            <img src="https://cdn-icons-png.flaticon.com/512/1040/1040230.png" alt="Cadastro de Produtos" style="width:56px; height:56px;" class="mb-2">
                            <h6 class="fw-bold text-danger mb-1">Cadastro de Produtos</h6>
                            <small class="text-muted">Adicionar novo produto</small>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex align-items-stretch">
                    <a href="/usuarios" class="text-decoration-none card w-100 h-100 text-center border-0 shadow-sm" style="background: #f8f9fa;">
                        <div class="card-body">
                            <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" alt="Lista de Usuários" style="width:56px; height:56px;" class="mb-2">
                            <h6 class="fw-bold text-danger mb-1">Lista de Usuários</h6>
                            <small class="text-muted">Visualizar todos os usuários</small>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex align-items-stretch">
                    <a href="/listaProdutos" class="text-decoration-none card w-100 h-100 text-center border-0 shadow-sm" style="background: #f8f9fa;">
                        <div class="card-body">
                            <img src="https://cdn-icons-png.flaticon.com/512/3500/3500833.png" alt="Lista de Produtos" style="width:56px; height:56px;" class="mb-2">
                            <h6 class="fw-bold text-danger mb-1">Lista de Produtos</h6>
                            <small class="text-muted">Visualizar todos os produtos</small>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex align-items-stretch">
                    <a href="/listaContatos" class="text-decoration-none card w-100 h-100 text-center border-0 shadow-sm" style="background: #f8f9fa;">
                        <div class="card-body">
                            <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="Lista de Contatos" style="width:56px; height:56px;" class="mb-2">
                            <h6 class="fw-bold text-danger mb-1">Lista de Contatos</h6>
                            <small class="text-muted">Visualizar todos os contatos</small>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection