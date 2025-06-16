@extends('template')

@section('titulo', 'Lista de contatos')

@section('conteudo')
    <div class="max-w-6xl mx-auto my-10 px-4">
        <div class="bg-white border border-yellow-100 rounded-2xl shadow-lg p-8">
            <h2 class="mb-6 text-2xl font-extrabold text-center text-pink-600">Lista de Contatos</h2>
            <div>
                <table class="w-full bg-white rounded-xl overflow-hidden">
                    <thead>
                        <tr class="bg-yellow-100 text-pink-700">
                            <th class="px-4 py-3 text-left font-semibold">Nome</th>
                            <th class="px-4 py-3 text-left font-semibold">E-mail</th>
                            <th class="px-4 py-3 text-left font-semibold">Assunto</th>
                            <th class="px-4 py-3 text-left font-semibold">Mensagem</th>
                            <th class="px-4 py-3 text-center font-semibold" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contatos as $c)
                        <tr class="border-b border-yellow-50 hover:bg-yellow-50 transition">
                            <td class="px-4 py-3 break-words max-w-xs">{{ $c->nome }}</td>
                            <td class="px-4 py-3 break-words max-w-xs">{{ $c->email }}</td>
                            <td class="px-4 py-3 break-words max-w-xs">{{ $c->assunto }}</td>
                            <td class="px-4 py-3 break-words max-w-md">{{ $c->mensagem }}</td>
                            <td class="px-2 py-3 text-center">
                                <a href="mailto:{{ $c->email }}?subject=Resposta: {{ urlencode($c->assunto) }}" class="inline-block bg-green-400 hover:bg-green-500 text-white font-semibold px-4 py-1 rounded-lg shadow transition-colors duration-200 text-sm mr-2">Responder</a>
                            </td>
                            <td class="px-2 py-3 text-center">
                                <form action="/excluirMensagem/{{ $c->id }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta mensagem?');" class="inline">
                                    @csrf
                                    @method('DELETE')
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