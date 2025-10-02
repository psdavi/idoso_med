@extends('layouts.app')

@section('title', 'Detalhes do Medicamento')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detalhes do Medicamento
    </h2>
@endsection

@section('content')
<div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                <h4 class="mb-4">Ficha do Medicamento</h4>

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $medicamento->id }}</td>
                        </tr>
                        <tr>
                            <th>Nome Comercial</th>
                            <td>{{ $medicamento->nome_comercial }}</td>
                        </tr>
                        <tr>
                            <th>Nome Científico</th>
                            <td>{{ $medicamento->nome_cientifico }}</td>
                        </tr>
                        <tr>
                            <th>Finalidade</th>
                            <td>{{ $medicamento->finalidade }}</td>
                        </tr>
                        <tr>
                            <th>Forma de Administração</th>
                            <td>{{ $medicamento->forma_administracao }}</td>
                        </tr>
                        <tr>
                            <th>Dosagem Padrão</th>
                            <td>{{ $medicamento->dosagem_padrao }}</td>
                        </tr>
                        <tr>
                            <th>Laboratório</th>
                            <td>{{ $medicamento->laboratorio }}</td>
                        </tr>
                        <tr>
                            <th>Quantidade em Estoque</th>
                            <td>{{ $medicamento->quantidade_estoque }}</td>
                        </tr>
                        <tr>
                            <th>Data de Validade</th>
                            <td>{{ \Carbon\Carbon::parse($medicamento->data_validade)->format('d/m/Y') }}</td>
                        </tr>
                        <tr>
                            <th>Observações</th>
                            <td>{{ $medicamento->observacoes ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                @if ($medicamento->ativo)
                                    <span class="badge badge-success">Ativo</span>
                                @else
                                    <span class="badge badge-danger">Inativo</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Criado em</th>
                            <td>{{ $medicamento->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        <tr>
                            <th>Última atualização</th>
                            <td>{{ $medicamento->updated_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('medicamento.index') }}" class="btn btn-secondary">Voltar</a>
                    <div>
                        <a href="{{ route('medicamento.edit', $medicamento) }}" class="btn btn-warning">Editar</a>

                        @if ($medicamento->ativo)
                            <form action="{{ route('medicamento.destroy', $medicamento) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" 
                                    onclick="return confirm('Tem certeza que deseja inativar este medicamento?')">
                                    Inativar
                                </button>
                            </form>
                        @else
                            <form action="{{ route('medicamento.ativar', $medicamento) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success"
                                    onclick="return confirm('Deseja reativar este medicamento?')">
                                    Ativar
                                </button>
                            </form>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
