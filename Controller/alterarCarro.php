<?php 

require_once("../model/conexao.php");
require_once("../model/bancoCarro.php");
include_once("../view/header.php");

extract($_REQUEST, EXTR_OVERWRITE);

if (alterarCarro($conexao,$idCarro,$nomeCarro,$modeloCarro, $marcaCarro,$valorCarro)) {
    echo ("As informações do Carro foram alteradas com sucesso.");
} else {
    echo ("Alerta!!! As informações do Carro Não foram Alteradas");
}

?>