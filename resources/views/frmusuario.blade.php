@extends('template')
@section('titulo', 'Cadastrar Usuário')

@section('conteudo')
    <div class="container mt-5" style="max-width: 400px;">
        <h2 class="mb-4 text-center">Criar Conta</h2>
        <form action="/addusuario" method="POST" class="border rounded p-4 shadow-sm bg-white">
            @csrf
            <div class="mb-3">
                <label for="fnome" class="form-label">Nome</label>
                <input type="text" name="fnome" id="fnome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="femail" class="form-label">E-mail</label>
                <input type="email" name="femail" id="femail" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="fsenha" class="form-label">Senha</label>
                <input type="password" name="fsenha" id="fsenha" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Cadastrar</button>
        </form>
        <a href="/frmlogin" class="btn btn-secondary w-100 mt-3">Já tenho conta</a>
    </div>
@endsection