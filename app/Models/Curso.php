<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    protected $fillable = ['ascensao_id','status_curso_id', 'nome', 'area', 'carga_horaria', 'instituicao', 'data_inicio', 'data_fim', 'arquivo'];

    public $timestamps = false;
}
