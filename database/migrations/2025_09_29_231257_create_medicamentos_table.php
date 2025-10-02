<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cientifico', 255);
            $table->string('nome_comercial', 255);
            $table->text('finalidade');
            $table->enum('forma_administracao', ['Comprimido', 'Xarope', 'Injeção', 'Pomada', 'Inalador', 'Outro']);
            $table->string('dosagem_padrao', 50);
            $table->string('laboratorio', 150);
            $table->integer('quantidade_estoque')->default(0);
            $table->date('data_validade');
            $table->text('observacoes')->nullable();
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
    }
};
