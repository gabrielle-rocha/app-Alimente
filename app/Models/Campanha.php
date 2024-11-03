<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    use HasFactory;

    protected $table = 'campanha';
    protected $primaryKey = 'idCampanha';


    protected $fillable = [
        'idOng',
        'nomeCampanha',
        'descricaoCampanha',
        'imagemCampanha',
        'assuntoCampanha',
        'dataInicioCampanha',
        'dataFimCampanha',
    ];

    public function ong()
    {
        return $this->belongsTo(Ong::class, 'idOng');
    }
    
}

