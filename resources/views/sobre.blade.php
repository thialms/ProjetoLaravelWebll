@extends('template')
@section('titulo', 'Sobre')

@section('conteudo')
    <div class="max-w-3xl mx-auto mt-10 px-4">
        <div class="bg-white border border-yellow-100 rounded-2xl shadow-lg p-8">
            <h1 class="text-3xl font-extrabold text-pink-600 text-center mb-6">Sobre a AmigoPet Store</h1>
            <p class="text-gray-700 text-lg mb-6 text-center">
                A <span class="text-pink-500 font-semibold">AmigoPet Store</span> nasceu do amor pelos animais e do desejo de oferecer o melhor para cães e gatos. Nosso compromisso é proporcionar produtos de qualidade, atendimento acolhedor e um ambiente onde pets e tutores se sintam em casa. Aqui você encontra rações, brinquedos, acessórios, banho & tosa e muito mais, sempre com carinho e dedicação. Venha fazer parte da nossa família apaixonada por pets!
            </p>

            <h3 class="text-xl font-bold text-yellow-500 mb-4">Nossa Missão</h3>
            <ul class="list-disc list-inside text-gray-700 mb-6 space-y-1">
                <li>Oferecer produtos e serviços de alta qualidade para o bem-estar dos pets.</li>
                <li>Atender com respeito, atenção e carinho todos os clientes e seus animais.</li>
                <li>Promover um ambiente seguro, moderno e acolhedor para toda a família.</li>
            </ul>

            <h3 class="text-xl font-bold text-yellow-500 mb-4">Tecnologias Utilizadas</h3>
            <ul class="list-disc list-inside text-gray-700 mb-6 space-y-1">
                <li>Laravel (Framework PHP moderno e robusto)</li>
                <li>TailwindCSS (Estilização rápida e responsiva)</li>
                <li>Blade (Template engine do Laravel)</li>
            </ul>

            <h2 class="text-2xl font-bold text-pink-600 text-center mt-8 mb-4">Desenvolvedor</h2>
            <div class="flex flex-col items-center">
                <img src="https://avatars.githubusercontent.com/u/181369271?v=4" alt="Thiago de Almeida Souza Silva" class="w-20 h-20 rounded-full border-4 border-yellow-200 shadow mb-2 object-cover">
                <strong class="text-lg text-pink-700">Thiago de Almeida Souza Silva</strong>
                <span class="text-gray-500">Desenvolvedor Full Stack</span>
            </div>
        </div>
    </div>
@endsection