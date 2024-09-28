<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacoesPagamentoDoador extends Model
{
    use HasFactory;

    protected $table = 'informacoes_pagamento_doador'; // Nome da tabela

    protected $primaryKey = 'idPagamento'; // Chave primária

    protected $fillable = [
        'idDoador',
        'tipoPagamento',
        'numeroCartao',
        'validadeCartao',
        'codigoSeguranca'
    ];

    // Relacionamento com Doador
    public function doador()
    {
        return $this->belongsTo(Doador::class, 'idDoador');
    }
}
