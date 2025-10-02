<?php

namespace App\Http\Controllers;

use App\Models\Prescricao;
use Illuminate\Http\Request;

class PrescricaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('prescricao.index');
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
    public function show(Prescricao $prescricao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prescricao $prescricao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prescricao $prescricao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prescricao $prescricao)
    {
        //
    }
}
