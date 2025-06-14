@extends('template')
@section('titulo', 'Editar Usuário')

@section('conteudo')
    <div class="container mt-5" style="max-width: 400px;">
        <h2 class="mb-4 text-center">Editar Usuário</h2>
        <form action="/atualizarusuario/{{$user->id}}" method="POST" class="border rounded p-4 shadow-sm bg-white">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="fnome" class="form-label">Nome</label>
                <input type="text" id="fnome" name="fnome" required value="{{$user->nome}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="femail" class="form-label">E-mail</label>
                <input type="email" id="femail" name="femail" required value="{{$user->email}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="fsenha" class="form-label">Senha</label>
                <input type="password" id="fsenha" name="fsenha" class="form-control" placeholder="Deixe em branco para manter a senha atual">
            </div>
            <button type="submit" class="btn btn-success w-100">Atualizar</button>
        </form>
        <a href="/usuarios" class="btn btn-secondary w-100 mt-3">Voltar para Lista de Usuários</a>
    </div>
@endsection