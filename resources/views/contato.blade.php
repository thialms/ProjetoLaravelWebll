@extends('template')
@section('titulo', 'Contato')


@section('conteudo')
    <div class="container mt-5" style="max-width: 500px;">
        <h2 class="mb-4 text-center">Contato</h2>
        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif
        <form action="/enviarMensagem" method="POST" class="border rounded p-4 shadow-sm bg-white">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="assunto" class="form-label">Assunto</label>
                <input type="text" name="assunto" id="assunto" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea name="mensagem" id="mensagem" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>
    </div>
@endsection