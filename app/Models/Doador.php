<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doador extends Model implements AuthenticatableContract
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

    // Define que o campo senhaDoador é a senha
    protected $hidden = [
        'senhaDoador', // Isso esconde a senha de retornos de queries
    ];

    public function getAuthPassword()
    {
        return $this->senhaDoador; // Aqui indicamos que a senha vem de senhaDoador
    }

     // Esses métodos são implementados pelo trait `Authenticatable`
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
