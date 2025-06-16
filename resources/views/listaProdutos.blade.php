@extends('template')

@section('titulo', 'Lista de Produtos')

@section('conteudo')
    <div class="max-w-3xl mx-auto my-10 px-4">
        <div class="bg-white border border-yellow-100 rounded-2xl shadow-lg p-8">
            <div class="flex flex-col sm:flex-row items-center justify-between mb-6 gap-4">
                <h2 class="text-2xl font-extrabold text-pink-600 mb-0">Lista de Produtos</h2>
                <a href="/frmproduto" class="bg-yellow-300 hover:bg-yellow-400 text-pink-700 font-semibold px-4 py-2 rounded-lg shadow transition-colors duration-200 text-sm">Adicionar Produto</a>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-xl overflow-hidden">
                    <thead>
                        <tr class="bg-yellow-100 text-pink-700">
                            <th class="px-4 py-3 text-left font-semibold">Nome</th>
                            <th class="px-4 py-3 text-left font-semibold">Preço</th>
                            <th class="px-4 py-3 text-left font-semibold">Quantidade</th>
                            <th class="px-4 py-3 text-center font-semibold">Imagem</th>
                            <th class="px-4 py-3 text-center font-semibold" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $p)
                        <tr class="border-b border-yellow-50 hover:bg-yellow-50 transition">
                            <td class="px-4 py-3">{{ $p->nome }}</td>
                            <td class="px-4 py-3">R$ {{ number_format($p->preco, 2, ',', '.') }}</td>
                            <td class="px-4 py-3">{{ $p->quantidade }}</td>
                            <td class="px-4 py-3 text-center">
                                <img src="{{ asset('storage/' . $p->imagem) }}" alt="{{ $p->nome }}" class="h-12 w-12 object-contain rounded shadow border border-yellow-100 mx-auto">
                            </td>
                            <td class="px-2 py-3 text-center">
                                <a href="/frmeditarproduto/{{$p->id}}" class="inline-block bg-yellow-300 hover:bg-yellow-400 text-pink-700 font-semibold px-4 py-1 rounded-lg shadow transition-colors duration-200 text-sm">Editar</a>
                            </td>
                            <td class="px-2 py-3 text-center">
                                <form action="/excluirproduto/{{$p->id}}" method='POST' onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-semibold px-4 py-1 rounded-lg shadow transition-colors duration-200 text-sm">Excluir</button>
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