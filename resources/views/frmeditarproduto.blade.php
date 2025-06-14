@extends('template')

@section('titulo', 'Editar Produto')

@section('conteudo')
    <div class="container mt-5" style="max-width: 400px;">
        <h2 class="mb-4 text-center">Editar Produto</h2>
        <form action="/atualizarproduto/{{ $produto->id }}" method="POST" enctype="multipart/form-data" class="border rounded p-4 shadow-sm bg-white">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required value="{{ $produto->nome }}">
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" name="preco" id="preco" class="form-control" required value="{{ $produto->preco }}">
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" required value="{{ $produto->quantidade }}">
            </div>
            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" id="imagem" name="imagem" accept="image/*" class="form-control">
                @if($produto->imagem)
                    <div class="mt-2 text-center">
                        <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem atual" style="max-width: 100px; max-height: 100px;">
                        <p class="small text-muted mb-0">Imagem atual</p>
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-success w-100">Atualizar</button>
        </form>
        <a href="/listaProdutos" class="btn btn-secondary w-100 mt-3">Voltar para Lista de Produtos</a>
    </div>
@endsection