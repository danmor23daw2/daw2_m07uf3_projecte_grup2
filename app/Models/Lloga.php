<?php

namespace App\Models;

use App\Models\Autos;
use App\Models\Clients;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Lloga extends Model
{
    use HasFactory;

    protected $primaryKey = 'matricula_auto';
    public $incrementing = false; 
    protected $keyType = 'string';

    protected $fillable = [
        'matricula_auto',
        'DNI_client',
        'data_del_prestec',
        'data_de_devolucio',
        'lloc_de_devolucio',
        'preu_per_dia',
        'email',
        'prestec_amb_retorn_de_diposit_ple',
        "tipus_dassegurança",
    ];

    public function autos()
    {
        return $this->belongsTo(Autos::class, 'matricula_auto', 'matricula_auto');
    }
    public function clients()
    {
        return $this->belongsTo(Clients::class, 'DNI_client', 'DNI_client');
    }

}
