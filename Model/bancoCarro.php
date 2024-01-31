<?php

function inserirCarro($conexao,$nomeCarro,$modeloCarro, $marcaCarro,$valorCarro, $fotoCarro){
    $query = "insert into carrostb(nomeCarro, modeloCarro, marcaCarro, valorCarro, fotoCarro)values('{$nomeCarro}','{$modeloCarro}', '{$marcaCarro}', '{$valorCarro}' ,'{$fotoCarro}')";
    return mysqli_query($conexao,$query);
}

function buscarCarroNome($conexao,$nomeCarro){
    $query = "Select * from carrostb where nomeCarro like '%{$nomeCarro}%'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

function buscarCarroId($conexao, $idCarro){
    $query = "Select * from carrostb where idCarro = '{$idCarro}'";
    $result = mysqli_query($conexao,$query);
    $result = mysqli_fetch_array($result);
    return $result;
}

function alterarCarro($conexao,$idCarro,$nomeCarro,$modeloCarro, $marcaCarro,$valorCarro){
    $query = "update carrostb set nomeCarro ='{$nomeCarro}', 
    modeloCarro='{$modeloCarro}', marcaCarro ='{$marcaCarro}', valorCarro ='{$valorCarro}' where idCarro = '{$idCarro}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

function deletarCarro($conexao,$idCarro){
    $query = "Delete from carrostb where idCarro = '{$idCarro}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}