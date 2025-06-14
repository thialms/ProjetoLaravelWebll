@extends('template')
@section('titulo', 'Home')

@section('conteudo')
    <div class="container mt-5">
        <div class="row g-4 justify-content-center">
            @foreach($crd as $card)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                    <div class="card h-100 shadow-sm border rounded p-0 w-100">
                        <div class="p-2">
                            <img src="{{$card['imagem']}}" alt="" class="card-img-top" style="height:180px; width:100%; border-radius:8px; object-fit:contain; background:#f8f9fa;">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">{{$card['nome']}}</h5>
                            <p class="card-text flex-grow-1">{{$card['texto']}}</p>
                            <p class="card-text fw-bold text-primary text-center">{{$card['preco']}}</p>
                            <a href="#" class="btn btn-primary w-100 mt-auto">Saiba mais</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection