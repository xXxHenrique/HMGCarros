<?php

include_once("../model/conexao.php");
include_once("../model/bancoCarro.php");

extract($_REQUEST,EXTR_OVERWRITE);

buscarCarroNome($conexao,$nomeCarro);

header("Location: ../view/buscar.php");
?>