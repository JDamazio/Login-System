<?php

function validar_msg($msg)
{
    switch ($msg)
    {
        case 'embranco':
            $retorno = '<h3 class="alert alert-warning">Preencha todos os campos para realizar o login!';
            break;

        case 'invalido':
            $retorno = '<h3 class="alert alert-danger">Atenção: Usuário ou senha inválido!';
            break;

        default:
            $retorno = '';
            break;
    }

    return $retorno;
}