<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloga extends Model
{
    use HasFactory;

    protected $primaryKey = ['DNI_client', 'matricula_auto'];
    public $incrementing = false; 
    protected $keyType = 'string';

    protected $fillable = [
        'DNI_client',
        'matricula_auto',
        'data_del_prestec',
        'data_de_devolucio',
        'lloc_de_devolucio',
        'preu_per_dia',
        'email',
        'prestec_amb_retorn_de_diposit_ple',
        "tipus_dassegurança",
    ];

}
