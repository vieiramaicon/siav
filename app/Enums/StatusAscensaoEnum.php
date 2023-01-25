<?php 

enum StatusAscensaoEnum: String 
{
    case EmElaboracao = 'st01';
    case Solicitado = 'st02';
    case Protocolado = 'st03';
    case Avaliado = 'st04';
    case Carregado = 'st05';
    case EmEdicao = 'st06';
}