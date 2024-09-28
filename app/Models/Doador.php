<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    use HasFactory;

    protected $table = 'doador'; // Nome da tabela

    protected $primaryKey = 'idDoador'; // Chave primária

    protected $fillable = [
        'nomeDoador',
        'emailDoador',
        'senhaDoador',
        'fotoDoador',
        'quantidadeDoacoes',
        'quantidadeOngsSeguidas',
        'quantidadeCurtidasDoador',
        'enderecoDoador',
        'numeroDoador',
        'complementoDoador',
        'cepDoador',
        'bairroDoador',
        'cidadeDoador',
        'estadoDoador',
        'causasPreferidasDoador',
        'dataCadastroDoador',
        'denunciasRealizadasDoador',
        'nomeUsuarioDoador', // Novo campo
        'biografiaDoador'    // Novo campo
    ];
}
