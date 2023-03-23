<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CorteCaja extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "corte_cajas";

    protected $fillable = [
        'user_id',
        'fecha_inicio',
        'hora_inicio',
        'cantidad_inicial',
        'lActivo'];
}
