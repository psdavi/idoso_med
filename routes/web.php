<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministracaoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PrescricaoController;
use App\Http\Controllers\RelatorioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/administracao', [AdministracaoController::class, 'index'])->name('administracao.index');
    Route::get('/funcionario', [FuncionarioController::class, 'index'])->name('funcionario.index');
    
// Lista de medicamentos
Route::get('/medicamento', [MedicamentoController::class, 'index'])
    ->name('medicamento.index');

// Formulário de criação
Route::get('/medicamento/create', [MedicamentoController::class, 'create'])
    ->name('medicamento.create');

// Salvar novo medicamento
Route::post('/medicamento', [MedicamentoController::class, 'store'])
    ->name('medicamento.store');

// Exibir um medicamento específico
Route::get('/medicamento/{medicamento}', [MedicamentoController::class, 'show'])
    ->name('medicamento.show');

// Formulário de edição
Route::get('/medicamento/{medicamento}/edit', [MedicamentoController::class, 'edit'])
    ->name('medicamento.edit');

// Atualizar medicamento
Route::put('/medicamento/{medicamento}', [MedicamentoController::class, 'update'])
    ->name('medicamento.update');

// Inativar medicamento
Route::delete('/medicamento/{medicamento}', [MedicamentoController::class, 'destroy'])
    ->name('medicamento.destroy');

// Ativar medicamento
Route::post('/medicamento/{medicamento}/ativar', [MedicamentoController::class, 'ativar'])
    ->name('medicamento.ativar');

// Adicionar estoque
Route::post('/medicamento/{medicamento}/adicionar-estoque', [MedicamentoController::class, 'adicionarEstoque'])
    ->name('medicamento.adicionar-estoque');


    Route::get('/paciente', [PacienteController::class, 'index'])->name('paciente.index');
    Route::get('/prescricao', [PrescricaoController::class, 'index'])->name('prescricao.index');
    Route::get('/relatorio', [RelatorioController::class, 'index'])->name('relatorio.index');


});

require __DIR__.'/auth.php';
