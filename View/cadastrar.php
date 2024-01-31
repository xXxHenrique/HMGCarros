<?php
include_once("header.php");
?>

<div class="container">
    <form class="row g-3" method="Post" action="../controller/adicionarCarro.php">
        <div class="col-md-8">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nomeCarro"id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputModelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" name="modeloCarro"id="inputModelo">
        </div>

        <div class="col-md-8">
            <label for="inputMarca" class="form-label">Marca</label>
            <input type="text" class="form-control" name="marcaCarro"id="inputMarca">
        </div>

        <div class="col-md-8">
            <label for="inputValor" class="form-label">Valor</label>
            <input type="number" class="form-control" name="valorCarro"id="inputValor">
        </div>
        <div class="col-md-8">
            <label for="inputFoto" class="form-label">Foto</label>
            <input type="text" class="form-control" name="fotoCarro"id="inputFoto">
        </div>
    
        <div class="col-12">
        <button type="submit" class="btn btn btn-purple"><strong class="branco">Cadastrar</strong></button>

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
    </form>




    
</div>
<?php
include_once("footer.php");
?>