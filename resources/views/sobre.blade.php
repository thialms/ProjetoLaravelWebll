@extends('template')
@section('titulo', 'Sobre')

@section('conteudo')
    <div class="container mt-5" style="max-width: 800px;">
        <div class="border rounded p-4 shadow-sm bg-white">
            <h1 class="mb-3 text-center">Framework PHP {{$frm}}</h1>
            <p class="mb-4">
                Laravel é livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web que utilizam o padrão MVC (model, view, controller). Algumas características proeminentes do Laravel são sua sintaxe simples e concisa, um sistema modular com gerenciamento de dependências dedicado, várias formas de acesso a banco de dados relacionais e vários utilitários indispensáveis no auxílio ao desenvolvimento e manutenção de sistemas.
            </p>

            <h3 class="mb-3">Requisitos Laravel</h3>
            @if($frm == "(Laravel)")
                <ol class="mb-4">
                    <li>PHP</li>
                    <li>Composer</li>
                </ol>
            @else 
                <p class="mb-4">Não há requisitos!</p>
            @endif

            <h3 class="mb-3">Características</h3>
            <ol class="mb-4">
                @foreach($vtg as $dados)
                    <li>{{ $dados }}</li>
                @endforeach
            </ol>

            <h2 class="mb-4 text-center">Equipe do Projeto</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-6 d-flex align-items-stretch">
                    <div class="card w-100 h-100 shadow-sm border rounded text-center">
                        <div class="card-body">
                            <strong>Nome: Gabriel Garcia</strong><br>
                            <span class="text-muted">Função: Desenvolvedor Backend</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-stretch">
                    <div class="card w-100 h-100 shadow-sm border rounded text-center">
                        <div class="card-body">
                            <strong>Nome: Levi Ferreira</strong><br>
                            <span class="text-muted">Função: Desenvolvedor Frontend</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection