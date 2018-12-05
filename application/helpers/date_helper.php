<?php

function  dataPtBrParaMysql($dataPtBr)
{
    $partes = explode("/", $dataPtBr);
    return substr("{$partes[1]}-{$partes[2]}-{$partes[0]}", -10);
}