@extends('template')
@section('titulo', 'Usuarios')


@section('conteudo')
<div class="container my-5" style="max-width: 800px;">
    <div class="border rounded p-4 shadow-sm bg-white">
        <h2 class="mb-4 text-center">Lista de Usuários</h2>
        <div class="table-responsive">
            <table class="table table-bordered align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th class="text-center" colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $u)
                    <tr>
                        <td>{{ $u->nome }}</td>
                        <td>{{ $u->email }}</td>
                        <td class="text-center">
                            <a href="/frmeditarusuario/{{$u->id}}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                        <td class="text-center">
                            <form action="/excluirusuario/{{$u->id}}" method='POST' onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
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