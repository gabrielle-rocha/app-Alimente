<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    use HasFactory;

    protected $table = 'campanha'; // Nome da tabela

    protected $primaryKey = 'idCampanha'; // Chave primária

    protected $fillable = [
        'idOng',
        'nomeCampanha',
        'descricaoCampanha',
        'dataInicioCampanha',
        'dataFimCampanha',
        'metaFinanceiraCampanha'
    ];

    // Relacionamento com Ong
    public function ong()
    {
        return $this->belongsTo(Ong::class, 'idOng');
    }
}
