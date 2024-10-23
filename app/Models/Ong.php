<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ong extends Model implements AuthenticatableContract
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
        'estadoOng',
        'latitude',  // Adicionando latitude
        'longitude'  // Adicionando longitude
    ];

    protected $hidden = [
        'senhaOng', // Isso esconde a senha de retornos de queries
    ];

    public function getAuthPassword()
    {
        return $this->senhaOng; // Aqui indicamos que a senha vem de senhaDoador
    }

    // Define que o campo senhaDoador é a senha// Esses métodos são implementados pelo trait `Authenticatable`
    // Certifique-se de que eles estão corretamente configurados:

    /**
     * Obter o nome do identificador único (campo de chave primária).
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return $this->primaryKey;
    }

    /**
     * Obter o identificador único (valor da chave primária).
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->{$this->primaryKey};
    }

    /**
     * Obter o "token lembrar" para autenticação.
     *
     * @return string|null
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * Definir o "token lembrar" para autenticação.
     *
     * @param string|null $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Obter o nome do campo "token lembrar".
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
