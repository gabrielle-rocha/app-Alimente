<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    use HasFactory;

    protected $table = 'postagem'; // Nome da tabela

    protected $primaryKey = 'idPostagem'; // Chave primária

    protected $fillable = [
        'idOng',
        'conteudo',
        'dataPostagem',
        'numeroCurtidas',
        'comentariosPostagem'
    ];

    // Relacionamento com Ong
    public function ong()
    {
        return $this->belongsTo(Ong::class, 'idOng');
    }
}
