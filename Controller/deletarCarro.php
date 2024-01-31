<?php

require_once("../model/conexao.php");
require_once("../model/bancoCarro.php");
include_once("../view/header.php");

extract($_REQUEST, EXTR_OVERWRITE);

if (deletarCarro($conexao, $idCarro)) {
    echo ("As informações do Carro foram excluidas com sucesso.");
} else {
    echo ("Alerta!!! As informações do Carro Não foram excluidas");
}