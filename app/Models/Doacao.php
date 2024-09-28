<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    use HasFactory;

    protected $table = 'doacao'; // Nome da tabela

    protected $primaryKey = 'idDoacao'; // Chave primária

    protected $fillable = [
        'idDoador',
        'idOng',
        'valorDoacao',
        'data_doacao'
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
