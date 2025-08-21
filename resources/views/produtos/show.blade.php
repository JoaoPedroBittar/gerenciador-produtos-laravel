@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded p-6">
        <h2 class="text-2xl font-semibold mb-6">Detalhes do Produto</h2>

        <div class="mb-4">
            <strong class="text-gray-700">Nome:</strong>
            <p class="mt-1">{{ $produto->nome }}</p>
        </div>

        <div class="mb-4">
            <strong class="text-gray-700">Preço:</strong>
            <p class="mt-1">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
        </div>

        <div class="mb-4">
            <strong class="text-gray-700">Descrição:</strong>
            <p class="mt-1">{{ $produto->descricao ?? 'Nenhuma descrição fornecida' }}</p>
        </div>

        <div class="flex gap-4">
            <a href="{{ route('produtos.edit', $produto) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Editar
            </a>
            <a href="{{ route('produtos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Voltar
            </a>
        </div>
    </div>
@endsection