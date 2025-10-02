<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Medicamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_cientifico',
        'nome_comercial',
        'finalidade',
        'forma_administracao',
        'dosagem_padrao',
        'laboratorio',
        'quantidade_estoque',
        'data_validade',
        'observacoes',
        'ativo'
    ];

    protected $casts = [
        'data_validade' => 'date',
        'ativo' => 'boolean',
        'quantidade_estoque' => 'integer'
    ];

    // Relacionamento com Prescrições
    public function prescricoes()
    {
        return $this->hasMany(Prescricao::class);
    }

    // Scopos para facilitar consultas
    public function scopeAtivos($query)
    {
        return $query->where('ativo', true);
    }

    public function scopeEstoqueBaixo($query, $quantidade = 30)
    {
        return $query->where('quantidade_estoque', '<=', $quantidade);
    }

    public function scopeVencendoEm($query, $dias = 30)
    {
        return $query->whereDate('data_validade', '<=', Carbon::now()->addDays($dias));
    }

    // Accessors
    public function getEstoqueBaixoAttribute()
    {
        return $this->quantidade_estoque <= 30;
    }

    public function getVencidoAttribute()
    {
        return $this->data_validade < Carbon::now();
    }

    public function getProximoVencimentoAttribute()
    {
        return $this->data_validade <= Carbon::now()->addDays(30);
    }
}
