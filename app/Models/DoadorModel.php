<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoadorModel extends Model
{
    use HasFactory;

    protected $table = "doador";

    public $timestamps = false;
    protected $fillable=['doador'];

    protected $primaryKey = 'idDoador';

    // Outras configurações, se necessário
    public $incrementing = true; // Define se a chave é auto-incrementada
    protected $keyType = 'int';
}
