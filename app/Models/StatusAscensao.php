<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusAscensao extends Model
{
    use HasFactory;

    protected $table = 'status_ascensoes';

    public static function getIdbyCodigo(String $codigo) {
        $statusAscensao = self::where('codigo', $codigo)->first();
        return $statusAscensao->id ?? null;
    }
}
