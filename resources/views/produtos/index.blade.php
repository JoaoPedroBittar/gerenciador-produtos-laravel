@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">
                <i class="fas fa-list mr-2 text-blue-500"></i>
                Lista de Produtos
            </h2>
            <a href="{{ route('produtos.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105">
                <i class="fas fa-plus mr-2"></i>
                Novo Produto
            </a>
        </div>

        @if($produtos->count() > 0)
            <div class="overflow-x-auto rounded-lg shadow">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-6 py-4 text-left font-semibold">Nome</th>
                            <th class="px-6 py-4 text-left font-semibold">Preço</th>
                            <th class="px-6 py-4 text-left font-semibold">Descrição</th>
                            <th class="px-6 py-4 text-left font-semibold">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($produtos as $produto)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $produto->nome }}</td>
                            <td class="px-6 py-4 text-green-600 font-semibold">R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                            <td class="px-6 py-4 text-gray-600">{{ Str::limit($produto->descricao, 60) }}</td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-3">
                                    <a href="{{ route('produtos.show', $produto) }}" class="text-blue-500 hover:text-blue-700 transition duration-300" title="Ver detalhes">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('produtos.edit', $produto) }}" class="text-green-500 hover:text-green-700 transition duration-300" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('produtos.destroy', $produto) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 transition duration-300" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6 text-sm text-gray-600">
                Total de {{ $produtos->count() }} produto(s) cadastrado(s)
            </div>
        @else
            <div class="text-center py-12">
                <i class="fas fa-inbox text-4xl text-gray-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Nenhum produto cadastrado</h3>
                <p class="text-gray-500">Comece adicionando seu primeiro produto!</p>
            </div>
        @endif
    </div>
@endsection