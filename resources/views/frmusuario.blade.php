@extends('template')
@section('titulo', 'Cadastrar Usuário')

@section('conteudo')
    <div class="max-w-sm mx-auto mt-12 px-4">
        <div class="bg-white border border-yellow-100 rounded-2xl shadow-lg p-8">
            <h2 class="mb-6 text-2xl font-extrabold text-center text-pink-600">Criar Conta</h2>
            <form action="/addusuario" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="fnome" class="block text-sm font-semibold text-gray-700 mb-1">Nome</label>
                    <input type="text" name="fnome" id="fnome" class="w-full border border-yellow-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 transition" required>
                </div>
                <div>
                    <label for="femail" class="block text-sm font-semibold text-gray-700 mb-1">E-mail</label>
                    <input type="email" name="femail" id="femail" class="w-full border border-yellow-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 transition" required>
                </div>
                <div>
                    <label for="fsenha" class="block text-sm font-semibold text-gray-700 mb-1">Senha</label>
                    <input type="password" name="fsenha" id="fsenha" class="w-full border border-yellow-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 transition" required>
                </div>
                <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 rounded-lg shadow transition-colors duration-200">Cadastrar</button>
            </form>
            <a href="/frmlogin" class="block w-full text-center bg-yellow-300 hover:bg-yellow-400 text-pink-700 font-semibold py-2 rounded-lg shadow mt-4 transition-colors duration-200">Já tenho conta</a>
        </div>
    </div>
@endsection