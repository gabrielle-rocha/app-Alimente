<?php

namespace App\Models;

use App\Models\Doador;
use App\Models\Postagem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentario';

    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = [
        'idPostagem',
        'idDoador',
        'conteudo',
    ];

    // Relacionamento com a postagem
    public function postagem()
    {
        return $this->belongsTo(Postagem::class, 'idPostagem');
    }

    // Relacionamento com o doador (ou usuário)
    public function doador()
    {
        return $this->belongsTo(Doador::class, 'idDoador'); // Supondo que você tenha um modelo de Doador
    }
}
