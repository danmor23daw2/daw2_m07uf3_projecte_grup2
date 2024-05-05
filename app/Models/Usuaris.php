<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuaris extends Model
{
    use HasFactory;

    protected $primaryKey = 'email';
    public $incrementing = false; 
    protected $keyType = 'string';

    protected $fillable = [
        'nom_i_cognoms',
        'email',
        'contrasenya',
        'tipus',
        'darrera_hora_d_entrada',
        'darrera_hora_de_sortida',
    ];
}
