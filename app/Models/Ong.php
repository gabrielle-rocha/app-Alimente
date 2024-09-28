<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    use HasFactory;

    protected $table = 'ong'; // Nome da tabela

    protected $primaryKey = 'idOng'; // Chave primária

    protected $fillable = [
        'nomeOng',
        'cnpjOng',
        'nomeResponsavelOng',
        'emailOng',
        'senhaOng',
        'fotoOng',
        'biografiaOng',
        'nomeUsuarioOng',
        'statusPrestacaoContas',
        'numeroDoacoesRecebidasOng',
        'numeroSeguidoresOng',
        'numeroPostagensOng',
        'numeroCurtidasOng',
        'descricaoPostagemOng',
        'comentariosPostagemOng',
        'dataCadastroOng',
        'enderecoOng',
        'numeroOng',
        'complementoOng',
        'cepOng',
        'bairroOng',
        'cidadeOng',
        'estadoOng'
    ];
}
