@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        @if ($produto->imagem)
            <div class="mb-4 flex justify-center">
                <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" class="w-full h-48 object-contain rounded">
            </div>
        @endif
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $produto->nome }}</h1>
            <p class="text-gray-700 mb-6">{{ $produto->descricao }}</p>
            <p class="text-2xl font-semibold text-green-700">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>

            <div class="flex gap-3">
                <a href="{{ route('produtos.index') }}" class="inline-block mt-8 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded">
                    Voltar ao catálogo
                </a>

                <a href="{{ route('produtos.edit', $produto) }}" class="inline-block mt-8 bg-yellow-300 hover:bg-yellow-400 text-white font-semibold py-2 px-4 rounded">
                    Editar
                </a>
    
                <form action="{{ route('produtos.destroy', $produto) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-block mt-8 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                        Excluir
                    </button>
                </form>
                
            </div>
        </div>
    </div>
@endsection
