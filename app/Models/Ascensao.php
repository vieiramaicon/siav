<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ascensao extends Model
{
    use HasFactory;

    protected $table = 'ascensoes';

    protected $fillable = ['user_id', 'intersticio_id', 'status_ascensao_id'];

    protected function telefone(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? '('. substr($value, 0, 2) . ') ' . substr($value, 2, 5) . '-' . substr($value, 7, 4) : null,
            set: fn ($value) => preg_replace('/\D/', '', $value)
        );
    }
}
