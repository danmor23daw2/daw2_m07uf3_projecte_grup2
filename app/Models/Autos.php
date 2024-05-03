<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    use HasFactory;
    protected $primaryKey = "matricula_auto";
    public $incrementing = false; 
    protected $keyType = 'string';
    protected $fillable = [
        'matricula_auto','número de bastidor','marca','model','color','nombre de places',
        'nombre de portes','grandària del maleter','tipus de combustible'
    ];
}
