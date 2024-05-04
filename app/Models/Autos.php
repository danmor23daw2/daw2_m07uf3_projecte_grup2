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
        'matricula_auto','numero_de_bastidor','marca','model','color','nombre_de_places',
        'nombre_de_portes','grandaria_del_maleter','tipus_de_combustible'
    ];
}
