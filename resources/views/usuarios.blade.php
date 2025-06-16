@extends('template')
@section('titulo', 'Usuarios')


@section('conteudo')
<div class="max-w-3xl mx-auto my-10 px-4">
    <div class="bg-white border border-yellow-100 rounded-2xl shadow-lg p-8">
        <h2 class="mb-6 text-2xl font-extrabold text-center text-pink-600">Lista de Usuários</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-xl overflow-hidden">
                <thead>
                    <tr class="bg-yellow-100 text-pink-700">
                        <th class="px-4 py-3 text-left font-semibold">Nome</th>
                        <th class="px-4 py-3 text-left font-semibold">E-mail</th>
                        <th class="px-4 py-3 text-center font-semibold" colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $u)
                    <tr class="border-b border-yellow-50 hover:bg-yellow-50 transition">
                        <td class="px-4 py-3">{{ $u->nome }}</td>
                        <td class="px-4 py-3">{{ $u->email }}</td>
                        <td class="px-2 py-3 text-center">
                            <a href="/frmeditarusuario/{{$u->id}}" class="inline-block bg-yellow-300 hover:bg-yellow-400 text-pink-700 font-semibold px-4 py-1 rounded-lg shadow transition-colors duration-200 text-sm">Editar</a>
                        </td>
                        <td class="px-2 py-3 text-center">
                            <form action="/excluirusuario/{{$u->id}}" method='POST' onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
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