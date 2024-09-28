<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OngModel extends Model
{
    use HasFactory;

    protected $table = "ong";

    public $timestamps = false;
    protected $fillable=['ong'];
}
