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
        <input type="text" id="inputcodigo" name="nomeCarro"class="form-control" aria-describedby="passwordHelpInline">
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
</form>

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
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php
     extract($_REQUEST,EXTR_OVERWRITE);

     $nomeCarro = isset($nomeCarro)?$nomeCarro: "";
     
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
      <td><img src="<?=$carros["fotoCarro"]?>"></td>
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
  <td>

        
  <button type="button" idcarro="<?=$carros["idCarro"]?>" nomecarro="<?=$carros["nomeCarro"]?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarModal">
  Deletar
 </td>
    </tr>
       <?php
       endforeach;
      }
       ?>
  </tbody>
</table>

<!--fim tabela-->

</div>

<!-- Modal -->


<div class="modal fade" id="deletarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Atenção na Exclusão</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <form action="../Controller/deletarCarro.php" method="post">
          <input type="hidden" value="" class="idCarro from-control" name="idCarro">
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

        
  
      </div>
    </div>
  </div>
</div>
<script>
    let deletarCarroModal = document.getElementById('deletarModal');
        deletarCarroModal.addEventListener('show.bs.modal', function(event) {
    let button = event.relatedTarget;
    let idCarro = button.getAttribute('idcarro');
    let nome_carro = button.getAttribute('nomecarro');

    let modalBody = deletarCarroModal.querySelector('.modal-body');

    modalBody.textContent = 'Deseja realmente excluir o Carro ' + nome_carro +'?'

    let IDCarro = deletarCarroModal.querySelector('.modal-footer .idCarro');
    IDCarro.value = idCarro;
  })
</script>

<?php

include_once("footer.php");

?>