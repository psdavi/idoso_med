<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Medicamento::query();

        // Filtro de busca
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nome_comercial', 'like', "%{$search}%")
                  ->orWhere('nome_cientifico', 'like', "%{$search}%")
                  ->orWhere('laboratorio', 'like', "%{$search}%");
            });
        }

        // Filtro por status
        if ($request->has('status')) {
            if ($request->status === 'ativo') {
                $query->where('ativo', true);
            } elseif ($request->status === 'inativo') {
                $query->where('ativo', false);
            }
        }

        // Filtro por estoque baixo
        if ($request->has('estoque_baixo') && $request->estoque_baixo == '1') {
            $query->estoqueBaixo();
        }

        // Filtro por vencimento próximo
        if ($request->has('vencendo') && $request->vencendo == '1') {
            $query->vencendoEm(30);
        }

        $medicamentos = $query->orderBy('nome_comercial')->paginate(10);

        return view('medicamento.index', compact('medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medicamento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome_cientifico' => 'required|string|max:255',
            'nome_comercial' => 'required|string|max:255',
            'finalidade' => 'required|string',
            'forma_administracao' => 'required|in:Comprimido,Xarope,Injeção,Pomada,Inalador,Outro',
            'dosagem_padrao' => 'required|string|max:50',
            'laboratorio' => 'required|string|max:150',
            'quantidade_estoque' => 'required|integer|min:0',
            'data_validade' => 'required|date|after:today',
            'observacoes' => 'nullable|string',
        ], [
            'nome_cientifico.required' => 'O nome científico é obrigatório.',
            'nome_comercial.required' => 'O nome comercial é obrigatório.',
            'data_validade.after' => 'A data de validade deve ser posterior à data atual.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Medicamento::create($request->all());

        return redirect()->route('medicamento.index')
            ->with('success', 'Medicamento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicamento $medicamento)
    {
        return view('medicamento.show', compact('medicamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicamento $medicamento)
    {
        return view('medicamento.edit', compact('medicamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicamento $medicamento)
    {
        $validator = Validator::make($request->all(), [
            'nome_cientifico' => 'required|string|max:255',
            'nome_comercial' => 'required|string|max:255',
            'finalidade' => 'required|string',
            'forma_administracao' => 'required|in:Comprimido,Xarope,Injeção,Pomada,Inalador,Outro',
            'dosagem_padrao' => 'required|string|max:50',
            'laboratorio' => 'required|string|max:150',
            'quantidade_estoque' => 'required|integer|min:0',
            'data_validade' => 'required|date',
            'observacoes' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $medicamento->update($request->all());

        return redirect()->route('medicamento.index')
            ->with('success', 'Medicamento atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicamento $medicamento)
    {
        // Soft delete - apenas inativa ao invés de deletar
        $medicamento->update(['ativo' => false]);

        return redirect()->route('medicamento.index')
            ->with('success', 'Medicamento inativado com sucesso!');
    }

    /**
     * Ativar medicamento
     */
    public function ativar(Medicamento $medicamento)
    {
        $medicamento->update(['ativo' => true]);

        return redirect()->route('medicamento.index')
            ->with('success', 'Medicamento ativado com sucesso!');
    }

    /**
     * Adicionar entrada de estoque
     */
    public function adicionarEstoque(Request $request, Medicamento $medicamento)
    {
        $validator = Validator::make($request->all(), [
            'quantidade' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $medicamento->increment('quantidade_estoque', $request->quantidade);

        return redirect()->route('medicamento.show', $medicamento)
            ->with('success', "Adicionado {$request->quantidade} unidades ao estoque!");
    }
}