<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusCurso extends Model
{
    use HasFactory;

    protected $table = 'status_cursos';

    public static function getIdbyCodigo(String $codigo) {
        $statusCurso = self::where('codigo', $codigo)->first();
        return $statusCurso->id ?? null;
    }
}
