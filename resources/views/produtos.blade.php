@extends('template')
@section('titulo', 'Produtos')

@section('conteudo')
    <div class="container mt-5">
        <div class="row g-4 justify-content-center">
            @foreach($prods as $p)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                    <div class="card h-100 shadow-sm border rounded p-0 w-100">
                        <div class="p-2">
                            <img src="{{ asset('storage/' . $p['imagem']) }}" alt="{{$p['nome']}}" class="card-img-top" style="object-fit:cover; height:180px; width:100%; border-radius:8px;">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">{{$p['nome']}}</h5>
                            <p class="card-text flex-grow-1 text-center">R$ {{$p['preco']}}</p>
                            <p class="card-text text-center">{{$p['quantidade']}} disponíveis</p>
                            <a href="#" class="btn btn-primary w-100 mt-auto">Detalhes</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection