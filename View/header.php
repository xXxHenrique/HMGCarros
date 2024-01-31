<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    
    <title>Carros</title>
   
  
</head>
<body>
  
<img src="../imagemcarro/logocarro.png">

<!-- Inicio NavBar -->

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Carro</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="../view/cadastrar.php">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../view/alterar.php">Alterar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="../view/deletar.php">Deletar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="../view/buscar.php">Buscar</a>
        </li>
      </ul>
      <form class="d-flex" role="pesquisar">
        <input class="form-control me-2" type="pesquisar" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>

<!-- Fim NavBar -->