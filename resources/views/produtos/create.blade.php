@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-md mt-8">

    <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Cadastrar Produto</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
            <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome do Produto:</label>
            <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="descricao" class="block text-sm font-medium text-gray-700 mb-1">Descrição:</label>
            <textarea name="descricao" id="descricao" rows="4"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('descricao') }}</textarea>
        </div>

        <div>
            <label for="preco" class="block text-sm font-medium text-gray-700 mb-1">Preço (R$):</label>
            <input type="number" step="0.01" min="0" name="preco" id="preco" value="{{ old('preco') }}" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="imagem" class="block text-sm font-medium text-gray-700 mb-1">Imagem:</label>
            <input type="file" name="imagem" id="imagem"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        </div>

        <div class="text-center">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition duration-200">
                Salvar Produto
            </button>
        </div>
    </form>
</div>
@endsection
