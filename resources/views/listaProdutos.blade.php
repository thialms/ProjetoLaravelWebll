@extends('template')

@section('titulo', 'Lista de Produtos')

@section('conteudo')
    <div class="container my-5" style="max-width: 800px;">
        <div class="border rounded p-4 shadow-sm bg-white">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">Lista de Produtos</h2>
                    <a href="/frmproduto" class="btn btn-success btn-sm">Adicionar Produto</a>
                </div>
            <div class="table-responsive">
                <table class="table table-bordered align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Imagem</th>
                            <th class="text-center" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $p)
                        <tr>
                            <td>{{ $p->nome }}</td>
                            <td>R$ {{ number_format($p->preco, 2, ',', '.') }}</td>
                            <td>{{ $p->quantidade }}</td>
                            <td><img src="{{ asset('storage/' . $p->imagem) }}" alt="{{ $p->nome }}" width="50"></td>
                            <td class="text-center">
                                <a href="/frmeditarproduto/{{$p->id}}" class="btn btn-sm btn-primary">Editar</a>
                            </td>
                            <td class="text-center">
                                <form action="/excluirproduto/{{$p->id}}" method='POST' onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection