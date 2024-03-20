<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'correo_electronico',
        'numero_telefonico',
        'sitio_web'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
