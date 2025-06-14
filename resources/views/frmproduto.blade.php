@extends('template')
@section('titulo', 'Cadastrar produto')


@section('conteudo')
    <div class="container mt-5" style="max-width: 400px;">
        <h2 class="mb-4 text-center">Cadastrar Produto</h2>
        <form action="/addproduto" method="POST" enctype="multipart/form-data" class="border rounded p-4 shadow-sm bg-white">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" name="preco" id="preco" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" id="imagem" name="imagem" accept="image/*" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Cadastrar</button>
        </form>
        <a href="/produtos" class="btn btn-secondary w-100 mt-3">Voltar para Produtos</a>
    </div>
@endsection