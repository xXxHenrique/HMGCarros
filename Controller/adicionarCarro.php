<?php

require_once("../model/conexao.php");
require_once("../model/bancocarro.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);


if (inserirCarro($conexao, $nomeCarro, $modeloCarro, $marcaCarro, $valorCarro, $fotoCarro)){
echo("As informações do Carro foram salvas");

}else{
echo("Alerta!!! As informações do Carro não foram salvas");
}

?>
