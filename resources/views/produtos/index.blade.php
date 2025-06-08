@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-4">

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-end mb-4">
        <a href="{{ route('produtos.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
            + Novo Produto
        </a>
    </div>

    <h1 class="text-2xl font-bold text-center mb-8">Catálogo de Produtos</h1>

    @if ($produtos->count())
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse($produtos as $produto)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
                @if ($produto->imagem)
                    <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" class="w-full h-56 object-contain">
                @else
                    <img src="{{ $produto->imagem ?? 'https://via.placeholder.com/400x250.png?text=Sem+Imagem' }}" alt="{{ $produto->nome }}" class="">
                @endif

                <div class="p-4 flex-grow flex flex-col">
                    <h3 class="text-xl font-semibold mb-2">{{ $produto->nome }}</h3>
                    <p class="text-gray-600 flex-grow">{{ Str::limit($produto->descricao, 100, '...') }}</p>
                    <p class="mt-4 font-bold text-green-600 text-lg">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                    <a href="{{ route('produtos.show', $produto->id) }}" class="mt-4 inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded text-center transition-colors duration-200">
                        Ver Produto
                    </a>
                </div>
            </div>
        @empty
            <p class="col-span-full text-center text-gray-500">Nenhum produto cadastrado.</p>
        @endforelse
        </div>
    @else
        <p class="text-center text-gray-500">Nenhum produto cadastrado.</p>
    @endif
</div>
@endsection
