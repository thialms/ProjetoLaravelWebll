@extends('template')
@section('titulo', 'Dashboard')

@section('conteudo')
    <div class="max-w-5xl mx-auto py-12 px-4">
        <div class="bg-white border border-yellow-100 rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl md:text-3xl font-extrabold text-center text-pink-600 mb-10">
                Bem-vindo(a), {{ session('usuario_nome') }}
            </h2>
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                <a href="/frmusuario" class="flex flex-col items-center bg-yellow-50 hover:bg-yellow-100 border border-yellow-200 rounded-xl shadow transition p-6 group">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Cadastro de Usuários" class="w-14 h-14 mb-3 group-hover:scale-110 transition">
                    <span class="font-bold text-pink-600 mb-1">Cadastro de Usuários</span>
                    <span class="text-gray-500 text-sm">Criar novo usuário</span>
                </a>
                <a href="/frmproduto" class="flex flex-col items-center bg-yellow-50 hover:bg-yellow-100 border border-yellow-200 rounded-xl shadow transition p-6 group">
                    <img src="https://cdn-icons-png.flaticon.com/512/1040/1040230.png" alt="Cadastro de Produtos" class="w-14 h-14 mb-3 group-hover:scale-110 transition">
                    <span class="font-bold text-pink-600 mb-1">Cadastro de Produtos</span>
                    <span class="text-gray-500 text-sm">Adicionar novo produto</span>
                </a>
                <a href="/usuarios" class="flex flex-col items-center bg-yellow-50 hover:bg-yellow-100 border border-yellow-200 rounded-xl shadow transition p-6 group">
                    <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" alt="Lista de Usuários" class="w-14 h-14 mb-3 group-hover:scale-110 transition">
                    <span class="font-bold text-pink-600 mb-1">Lista de Usuários</span>
                    <span class="text-gray-500 text-sm">Visualizar todos os usuários</span>
                </a>
                <a href="/listaProdutos" class="flex flex-col items-center bg-yellow-50 hover:bg-yellow-100 border border-yellow-200 rounded-xl shadow transition p-6 group">
                    <img src="https://cdn-icons-png.flaticon.com/512/3500/3500833.png" alt="Lista de Produtos" class="w-14 h-14 mb-3 group-hover:scale-110 transition">
                    <span class="font-bold text-pink-600 mb-1">Lista de Produtos</span>
                    <span class="text-gray-500 text-sm">Visualizar todos os produtos</span>
                </a>
                <a href="/listaContatos" class="flex flex-col items-center bg-yellow-50 hover:bg-yellow-100 border border-yellow-200 rounded-xl shadow transition p-6 group">
                    <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="Lista de Contatos" class="w-14 h-14 mb-3 group-hover:scale-110 transition">
                    <span class="font-bold text-pink-600 mb-1">Lista de Contatos</span>
                    <span class="text-gray-500 text-sm">Visualizar todos os contatos</span>
                </a>
            </div>
        </div>
    </div>
@endsection