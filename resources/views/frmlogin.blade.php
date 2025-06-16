@extends('template')
@section('titulo', 'Login')

@section('conteudo')
    <div class="max-w-sm mx-auto mt-12 px-4">
        <div class="bg-white border border-yellow-100 rounded-2xl shadow-lg p-8">
            <h2 class="mb-6 text-2xl font-extrabold text-center text-pink-600">Área Restrita</h2>
            <form action="/logar" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">E-mail</label>
                    <input type="email" id="email" name="email" class="w-full border border-yellow-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 transition" required>
                </div>
                <div>
                    <label for="senha" class="block text-sm font-semibold text-gray-700 mb-1">Senha</label>
                    <input type="password" id="senha" name="senha" class="w-full border border-yellow-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 transition" required>
                </div>
                <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 rounded-lg shadow transition-colors duration-200">Entrar</button>
            </form>
            <a href="/frmusuario" class="block w-full text-center bg-yellow-300 hover:bg-yellow-400 text-pink-700 font-semibold py-2 rounded-lg shadow mt-4 transition-colors duration-200">Criar Conta</a>
        </div>
    </div>
@endsection