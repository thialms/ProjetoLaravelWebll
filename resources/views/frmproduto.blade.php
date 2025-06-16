@extends('template')
@section('titulo', 'Cadastrar produto')

@section('conteudo')
    <div class="max-w-sm mx-auto mt-12 px-4">
        <div class="bg-white border border-yellow-100 rounded-2xl shadow-lg p-8">
            <h2 class="mb-6 text-2xl font-extrabold text-center text-pink-600">Cadastrar Produto</h2>
            <form action="/addproduto" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                <div>
                    <label for="nome" class="block text-sm font-semibold text-gray-700 mb-1">Nome</label>
                    <input type="text" name="nome" id="nome" class="w-full border border-yellow-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 transition" required>
                </div>
                <div>
                    <label for="preco" class="block text-sm font-semibold text-gray-700 mb-1">Preço</label>
                    <input type="number" name="preco" id="preco" step="0.01" class="w-full border border-yellow-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 transition" required>
                </div>
                <div>
                    <label for="quantidade" class="block text-sm font-semibold text-gray-700 mb-1">Quantidade</label>
                    <input type="number" name="quantidade" id="quantidade" class="w-full border border-yellow-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 transition" required>
                </div>
                <div>
                    <label for="imagem" class="block text-sm font-semibold text-gray-700 mb-1">Imagem</label>
                    <input type="file" id="imagem" name="imagem" accept="image/*" class="w-full border border-yellow-200 rounded-lg px-4 py-2 bg-yellow-50 focus:outline-none focus:ring-2 focus:ring-pink-400 transition" required>
                </div>
                <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 rounded-lg shadow transition-colors duration-200">Cadastrar</button>
            </form>
            <a href="/produtos" class="block w-full text-center bg-yellow-300 hover:bg-yellow-400 text-pink-700 font-semibold py-2 rounded-lg shadow mt-4 transition-colors duration-200">Voltar para Produtos</a>
        </div>
    </div>
@endsection