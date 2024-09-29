<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoDoacao extends Model
{
    use HasFactory;

    protected $table = 'historico_doacao'; // Nome da tabela

    protected $primaryKey = 'idHistoricoDoacao'; // Chave primária

    protected $fillable = [
        'idDoador',
        'idOng',
        'valorDoacao',
        'dataDoacao'
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
