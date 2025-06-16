@extends('template')
@section('titulo', 'Contato')

@section('conteudo')
    <div class="max-w-md mx-auto mt-12 px-4">
        <div class="bg-white border border-yellow-100 rounded-2xl shadow-lg p-8">
            <h2 class="mb-6 text-2xl font-extrabold text-center text-pink-600">Fale Conosco</h2>
            @if(session('success'))
                <div class="mb-4 text-green-700 bg-green-100 border border-green-200 rounded-lg px-4 py-2 text-center font-semibold">
                    {{ session('success') }}
                </div>
            @endif
            <form action="/enviarMensagem" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="nome" class="block text-sm font-semibold text-gray-700 mb-1">Nome</label>
                    <input type="text" name="nome" id="nome" class="w-full border border-yellow-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 transition" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">E-mail</label>
                    <input type="email" name="email" id="email" class="w-full border border-yellow-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 transition" required>
                </div>
                <div>
                    <label for="assunto" class="block text-sm font-semibold text-gray-700 mb-1">Assunto</label>
                    <input type="text" name="assunto" id="assunto" class="w-full border border-yellow-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 transition" required>
                </div>
                <div>
                    <label for="mensagem" class="block text-sm font-semibold text-gray-700 mb-1">Mensagem</label>
                    <textarea name="mensagem" id="mensagem" rows="4" class="w-full border border-yellow-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 transition resize-none" required></textarea>
                </div>
                <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 rounded-lg shadow transition-colors duration-200">Enviar</button>
            </form>
        </div>
    </div>
@endsection