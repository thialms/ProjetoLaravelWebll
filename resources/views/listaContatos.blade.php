@extends('template')

@section('titulo', 'Lista de contatos')

@section('conteudo')
    <div class="container my-5" style="max-width: 800px;">
        <div class="border rounded p-4 shadow-sm bg-white">
            <h2 class="mb-4 text-center">Lista de Contatos</h2>
            <div class="table-responsive">
                <table class="table table-bordered align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Assunto</th>
                            <th>Mensagem</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contatos as $c)
                        <tr>
                            <td>{{ $c->nome }}</td>
                            <td>{{ $c->email }}</td>
                            <td>{{ $c->assunto }}</td>
                            <td>{{ $c->mensagem }}</td>
                            <td>
                                <form action="/excluirMensagem/{{ $c->id }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta mensagem?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                    </div>
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