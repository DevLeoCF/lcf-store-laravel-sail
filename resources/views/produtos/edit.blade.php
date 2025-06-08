@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto bg-white rounded-lg shadow p-6 mt-8">
        
        <h2 class="text-2xl font-semibold mb-6 text-center">Editar Produto</h2>

        @if ($errors->any())
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produtos.update', $produto) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nome" class="block text-gray-700 font-medium mb-2">Nome do Produto</label>
                <input type="text" id="nome" name="nome" value="{{ old('nome', $produto->nome) }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
            </div>

            <div class="mb-4">
                <label for="descricao" class="block text-gray-700 font-medium mb-2">Descrição</label>
                <textarea id="descricao" name="descricao" rows="4"
                          class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('descricao', $produto->descricao) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="preco" class="block text-gray-700 font-medium mb-2">Preço</label>
                <input type="number" step="0.01" id="preco" name="preco" value="{{ old('preco', $produto->preco) }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
            </div>

            <div class="mb-4">
                <label for="imagem" class="block text-gray-700 font-medium mb-2">Imagem do Produto</label>
                <input type="file" id="imagem" name="imagem"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">

                @if ($produto->imagem)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem atual"
                             class="w-32 h-32 object-cover rounded">
                        <p class="text-sm text-gray-500 mt-1">Imagem atual</p>
                    </div>
                @endif
            </div>

            <div class="mt-6 text-center">
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded shadow">
                    Salvar Alterações
                </button>
            </div>
        </form>
    </div>
@endsection
