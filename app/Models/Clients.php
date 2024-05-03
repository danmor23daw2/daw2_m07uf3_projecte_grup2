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
        'nom i cognoms',
        'edat',
        'telèfon',
        'adreça',
        'ciutat',
        'email',
        'número del permís de conducció',
        'punts del permís de conducció',
        'tipus de targeta',
        'número de la targeta',
    ];
}
