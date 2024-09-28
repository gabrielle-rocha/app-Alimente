<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoSeguidor extends Model
{
    use HasFactory;

    protected $table = 'historico_seguidor'; // Nome da tabela

    protected $primaryKey = 'idHistoricoSeguidor'; // Chave primária

    protected $fillable = [
        'idDoador',
        'idOng',
        'dataSeguir'
    ];

    // Relacionamento com Doador
    public function doador()
    {
        return $this->belongsTo(Doador::class, 'idDoador');
    }

    // Relacionamento com Ong
    public function ong()
    {
        return $this->belongsTo(Ong::class, 'idOng');
    }
}
