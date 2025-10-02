@extends('layouts.app')

@section('title', 'Medicamentos')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Medicamentos
    </h2>
@endsection

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <div class="az-content-label mg-b-5">Lista de Medicamentos</div>
                        <p class="mg-b-0">Tabela de medicamentos cadastrados no sistema.</p>
                    </div>
                    <div>
                        <a href="{{ route('medicamento.create') }}" class="btn btn-primary">
                            <i class="typcn typcn-plus"></i> Novo Medicamento
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped mg-b-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome Comercial</th>
                                <th>Nome Científico</th>
                                <th>Finalidade</th>
                                <th>Forma</th>
                                <th>Dosagem</th>
                                <th>Laboratório</th>
                                <th>Estoque</th>
                                <th>Validade</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($medicamentos as $medicamento)
                                <tr>
                                    <td>{{ $medicamento->id }}</td>
                                    <td>{{ $medicamento->nome_comercial }}</td>
                                    <td>{{ $medicamento->nome_cientifico }}</td>
                                    <td>{{ $medicamento->finalidade }}</td>
                                    <td>{{ $medicamento->forma_administracao }}</td>
                                    <td>{{ $medicamento->dosagem_padrao }}</td>
                                    <td>{{ $medicamento->laboratorio }}</td>
                                    <td>{{ $medicamento->quantidade_estoque }}</td>
                                    <td>{{ \Carbon\Carbon::parse($medicamento->data_validade)->format('d/m/Y') }}</td>
                                    <td>
                                        @if ($medicamento->ativo)
                                            <span class="badge badge-success">Ativo</span>
                                        @else
                                            <span class="badge badge-danger">Inativo</span>
                                        @endif
                                    </td>
                                    <td>
    <div class="btn-icon-list">
        {{-- Ver --}}
        <a href="{{ route('medicamento.show', $medicamento) }}" 
           class="btn btn-info btn-icon" 
           title="Ver">
            <i class="typcn typcn-eye-outline"></i>
        </a>

        {{-- Editar --}}
        <a href="{{ route('medicamento.edit', $medicamento) }}" 
           class="btn btn-warning btn-icon" 
           title="Editar">
            <i class="typcn typcn-edit"></i>
        </a>

        {{-- Inativar / Ativar --}}
        @if ($medicamento->ativo)
            <form action="{{ route('medicamento.destroy', $medicamento) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-icon" title="Inativar"
                        onclick="return confirm('Tem certeza que deseja inativar este medicamento?')">
                    <i class="typcn typcn-trash"></i>
                </button>
            </form>
        @else
            <form action="{{ route('medicamento.ativar', $medicamento) }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-success btn-icon" title="Ativar"
                        onclick="return confirm('Deseja reativar este medicamento?')">
                    <i class="typcn typcn-refresh"></i>
                </button>
            </form>
        @endif

        {{-- Entrada de Estoque --}}
        <a href="#" class="btn btn-primary btn-icon" title="Entrada de Estoque">
            <i class="typcn typcn-plus"></i>
        </a>
    </div>
</td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="11" class="text-center">Nenhum medicamento encontrado.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $medicamentos->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
