<?php

include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCarro.php");

?>
<!-- inicio formulario -->
<div class="container m-4">
<form class="row g-3" method="POST" action="#">
<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputcodigo" class="col-form-label">Digite o Nome</label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputcodigo" name="nomeCarro" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
        
    <button type="submit" class="btn btn btn-purple"><strong class="branco">Buscar</strong></button>

    <style>
  .btn-purple {
    background-color: purple;
    /* Outras propriedades de estilo conforme necessário */
  }
</style>

<style>
  .branco {
    background-color: while;
    /* Outras propriedades de estilo conforme necessário */
  }
</style>
          
        
    </div>
</div>
<!--fim formulario -->

<!--inicio tabela-->
<hr>
<table class="table">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Modelo</th>
      <th scope="col">Marca</th>
      <th scope="col">Valor</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
  <?php
     extract($_REQUEST,EXTR_OVERWRITE);

     $nomeCarro = isset($nomeCarro)?$nomeCarro : "";
     
     if($nomeCarro){
       
       $dados = buscarCarroNome($conexao,$nomeCarro);

     foreach($dados as $carros) :
     ?>
    <tr>
    <th scope="row"> <?php echo($carros["idCarro"]);?> </th>
      <td> <?php echo($carros["nomeCarro"])?> </td>
      <td> <?=$carros["modeloCarro"]?> </td>
      <td> <?=$carros["marcaCarro"]?> </td>
      <td> <?=$carros["valorCarro"]?> </td>
      <td>
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
 
   
    </tr>
       <?php
       endforeach;
      }
       ?>
  </tbody>
</table>
    
  </tbody>
</table>
<!--fim tabela-->

</div>
<?php

include_once("footer.php");

?>