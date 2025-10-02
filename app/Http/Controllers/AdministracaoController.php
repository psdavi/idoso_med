<?php

namespace App\Http\Controllers;

use App\Models\Administracao;
use Illuminate\Http\Request;

class AdministracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administracao.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Administracao $administracao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Administracao $administracao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Administracao $administracao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Administracao $administracao)
    {
        //
    }
}
