@extends('template')
@section('titulo', 'Home')

@section('conteudo')
    <div class="max-w-7xl mx-auto px-4 py-10">
        <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach($crd as $card)
                <div class="bg-white rounded-2xl shadow-lg flex flex-col overflow-hidden border border-yellow-100 hover:shadow-2xl transition-shadow duration-300">
                    <div class="flex justify-center items-center bg-yellow-100 p-4">
                        <img src="{{$card['imagem']}}" alt="" class="h-40 w-full object-contain rounded-xl bg-white shadow-inner">
                    </div>
                    <div class="flex-1 flex flex-col p-5">
                        <h5 class="text-xl font-bold text-center text-pink-600 mb-2">{{$card['nome']}}</h5>
                        <p class="text-gray-600 flex-grow text-center mb-4">{{$card['texto']}}</p>
                        <p class="text-lg font-semibold text-yellow-600 text-center mb-4">{{$card['preco']}}</p>
                        <a href="#" class="mt-auto bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 rounded-lg transition-colors duration-200 text-center shadow-md">Saiba mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection