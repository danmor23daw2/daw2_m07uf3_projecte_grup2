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
        'data del préstec',
        'data de devolució',
        'lloc de devolució',
        'preu per dia',
        'email',
        'préstec amb retorn de dipòsit ple',
        "tipus d'assegurança",
    ];

}
