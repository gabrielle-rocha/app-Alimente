<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    use HasFactory;

    protected $table = 'postagem'; // Nome da tabela
    protected $primaryKey = 'idPostagem'; // Nome da chave primária
    public $timestamps = false; // Se você não tiver as colunas created_at e updated_at

    protected $fillable = [
        'idOng',
        'conteudo',
        'imagem',
        'hashtags',
        'dataPostagem',
        'numeroCurtidas',
        'comentariosPostagem'
    ];
}

