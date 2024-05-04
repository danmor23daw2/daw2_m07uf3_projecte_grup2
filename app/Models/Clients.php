<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $primaryKey = "DNI_client";
    public $incrementing = false; 
    protected $keyType = 'string';
    
    protected $fillable = [
        'DNI_client',
        'nom_i_cognoms',
        'edat',
        'telefon',
        'adreça',
        'ciutat',
        'email',
        'numero_del_permis_de_conduccio',
        'punts_del_permis_de_conduccio',
        'tipus_de_targeta',
        'numero_de_la_targeta',
    ];
}
