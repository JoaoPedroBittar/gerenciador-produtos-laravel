@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded p-6">
        <h2 class="text-2xl font-semibold mb-6">Editar Produto</h2>

        <form action="{{ route('produtos.update', $produto) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="nome" class="block text-gray-700 font-medium mb-2">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $produto->nome) }}" required
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                @error('nome')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="preco" class="block text-gray-700 font-medium mb-2">Preço</label>
                <input type="number" step="0.01" name="preco" id="preco" value="{{ old('preco', $produto->preco) }}" required
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                @error('preco')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="descricao" class="block text-gray-700 font-medium mb-2">Descrição</label>
                <textarea name="descricao" id="descricao" rows="4"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">{{ old('descricao', $produto->descricao) }}</textarea>
                @error('descricao')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Atualizar
                </button>
                <a href="{{ route('produtos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection