<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $fillable = [
        'user_id',
        'categoria_id',
        'tipo',
        'monto',
        'descripcion',
        'foto',
        'fecha',
    ];

    //Relacion de muchos a uno con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relacion de muchos a uno con el modelo Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
