<?php 

namespace App\Enums;

enum TipoPerfil: String 
{
    case User = 'pf01';
    case Servidor = 'pf02';
    case Protocolo = 'pf03';
    case Copad = 'pf04';
    case Admin = 'pf05';
}