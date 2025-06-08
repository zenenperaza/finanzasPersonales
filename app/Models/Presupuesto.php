<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $fillable = [
        'user_id',
        'categoria_id',
        'monto_asignado',
        'monto_gastado',
        'mes',
        'anio',
    ];

    // Relacion de muchos a uno con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacion de muchos a uno con el modelo Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

