@extends('template')
@section('titulo', 'Login')


@section('conteudo')
    <div class="container mt-5" style="max-width: 400px;">
        <h2 class="mb-4 text-center">Área Restrita</h2>
        <form action="/logar" method="POST" enctype="multipart/form-data" class="border rounded p-4 shadow-sm bg-white">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
        <a href="/frmusuario" class="btn btn-success w-100 mt-3">Criar Conta</a>
    </div>
@endsection