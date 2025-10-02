@extends('layouts.app')

@section('title', 'Editar Medicamento')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editar Medicamento
    </h2>
@endsection

@section('content')
<div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                <h4 class="mb-4">Editar Medicamento</h4>

                {{-- Exibir erros de validação --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Ops!</strong> Houve alguns problemas:<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('medicamento.update', $medicamento) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="nome_cientifico">Nome Científico</label>
                        <input type="text" name="nome_cientifico" class="form-control" 
                               value="{{ old('nome_cientifico', $medicamento->nome_cientifico) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nome_comercial">Nome Comercial</label>
                        <input type="text" name="nome_comercial" class="form-control" 
                               value="{{ old('nome_comercial', $medicamento->nome_comercial) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="finalidade">Finalidade</label>
                        <textarea name="finalidade" class="form-control" rows="2" required>{{ old('finalidade', $medicamento->finalidade) }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="forma_administracao">Forma de Administração</label>
                        <select name="forma_administracao" class="form-control" required>
                            <option value="">Selecione</option>
                            <option value="Comprimido" {{ old('forma_administracao', $medicamento->forma_administracao) == 'Comprimido' ? 'selected' : '' }}>Comprimido</option>
                            <option value="Xarope" {{ old('forma_administracao', $medicamento->forma_administracao) == 'Xarope' ? 'selected' : '' }}>Xarope</option>
                            <option value="Injeção" {{ old('forma_administracao', $medicamento->forma_administracao) == 'Injeção' ? 'selected' : '' }}>Injeção</option>
                            <option value="Pomada" {{ old('forma_administracao', $medicamento->forma_administracao) == 'Pomada' ? 'selected' : '' }}>Pomada</option>
                            <option value="Inalador" {{ old('forma_administracao', $medicamento->forma_administracao) == 'Inalador' ? 'selected' : '' }}>Inalador</option>
                            <option value="Outro" {{ old('forma_administracao', $medicamento->forma_administracao) == 'Outro' ? 'selected' : '' }}>Outro</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="dosagem_padrao">Dosagem Padrão</label>
                        <input type="text" name="dosagem_padrao" class="form-control" 
                               value="{{ old('dosagem_padrao', $medicamento->dosagem_padrao) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="laboratorio">Laboratório</label>
                        <input type="text" name="laboratorio" class="form-control" 
                               value="{{ old('laboratorio', $medicamento->laboratorio) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="quantidade_estoque">Quantidade em Estoque</label>
                        <input type="number" name="quantidade_estoque" class="form-control" 
                               value="{{ old('quantidade_estoque', $medicamento->quantidade_estoque) }}" min="0" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="data_validade">Data de Validade</label>
                        <input type="date" name="data_validade" class="form-control" 
                               value="{{ old('data_validade', $medicamento->data_validade->format('Y-m-d')) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="observacoes">Observações</label>
                        <textarea name="observacoes" class="form-control" rows="2">{{ old('observacoes', $medicamento->observacoes) }}</textarea>
                    </div>

                    <div class="form-group mb-3 form-check">
                        <input type="checkbox" name="ativo" value="1" class="form-check-input" id="ativo"
                               {{ old('ativo', $medicamento->ativo) ? 'checked' : '' }}>
                        <label class="form-check-label" for="ativo">Ativo</label>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('medicamento.index') }}" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-success">Atualizar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
