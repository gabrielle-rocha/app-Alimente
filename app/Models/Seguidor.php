<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguidor extends Model
{
    use HasFactory;

    protected $table = 'seguidor'; // Nome da tabela

    protected $fillable = [
        'idDoador',
        'idOng'
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
