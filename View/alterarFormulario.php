<?php

include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCarro.php");

extract($_REQUEST, EXTR_OVERWRITE);




$idCarro = isset($idCarro) ? $idCarro : "";


if ($idCarro) {

    $carros = buscarCarroId($conexao, $idCarro);
    
?>

    <div class="container">
        <form class="row g-3" method="Post" action="../Controller/alterarCarro.php">
        <input type="hidden" value="<?php echo ($carros["idCarro"]); ?>"  name="idCarro">   
        
        <div class="col-md-8">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" value="<?php echo ($carros["nomeCarro"]); ?>" name="nomeCarro" id="inputNome">
            </div>

            <div class="col-md-4">
                <label for="inputModelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" value="<?php echo ($carros["modeloCarro"]); ?>" name="modeloCarro" id="inputModelo">
            </div>

            <div class="col-md-8">
                <label for="inputMarca" class="form-label">Marca</label>
                <input type="text" class="form-control" value="<?php echo ($carros["marcaCarro"]); ?>" name="marcaCarro" id="inputMarca">
            </div>

            <div class="col-md-8">
                <label for="inputValor" class="form-label">Valor</label>
                <input type="decimal" class="form-control" value="<?php echo ($carros["valorCarro"]); ?>" name="valorCarro" id="inputValor">
            </div>

            <div class="col-md-8">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="img" class="form-control" value="<?php echo ($carros["fotoCarro"]); ?>" name="fotoCarro" id="inputFoto">
            </div>

            <div class="col-12">
            <img src="<?=$carros["fotoCarro"]?>"> </td>
 
 <style>
   img{
 max-width: 200px;
 max-height: 200x;
 }
 th, td {             
   border: 1px solid #ddd;             
   padding: 8px;             
   text-align: left;
 }
 </style>
                
                
                <!-- Button trigger modal -->
                
                <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
        </form>
    </div>
    
<?php

} else {
    echo ("Dados não encontrados");
};
include_once("footer.php");

?>