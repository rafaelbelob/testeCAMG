<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Teste na Cidade Administrativa(CRUD)</title>
  <link rel="icon" type="image/png" href="IMG/BRASÃO-PRINCIPAL.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<div class="p-3 mb-2 bg-dark text-white bg-opacity-75">
<body>
<nav class="navbar bg-light hstack gap-3 ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="IMG/home.jpg" alt="Inicio" width="30" height="24" class="d-inline-block align-text-top">
      Ínicio
    </a>
    <a class="navbar-brand" href="?page=novo">
      <img src="IMG/add.jpg" alt="Novo Usuario" width="30" height="24" class="d-inline-block align-text-top">
      Adicionar Usuário
    </a>
    <a class="navbar-brand" href="?page=listar">
      <img src="IMG/listar.jpg" alt="Inicio" width="30" height="24" class="d-inline-block align-text-top">
      Listar Usuários
    </a>
  </div>
</nav>
  

  <div class="container">
    <div class="row">
      <div class="col mt-5">

        <?php

        include("config.php");
        switch (@$_REQUEST["page"]) {
          case "novo":
            include("novo-usuario.php");
            break;
          case "listar":
            include("listar-usuario.php");
            break;
          case "salvar":
            include("salvar-usuario.php");
            break;
          case "editar":
            include("editar-usuario.php");
            break;
          default:
            print "<h1>Bem vindos !</h1>";
        }
        ?>

      </div>
    </div>
  </div>
      </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
<footer>
  <style>
    body{
    background-color: #060606;
    background-repeat: no-repeat;
    background-size: 100%;
    margin: 0;
    font-weight: bold;
    text-align: center;

  }
  footer{
    color: white;
    text-align: center;
    font-family: "Helvetica neue", sans-serif;
    
  }
   </style>
<div class="rounded float-none ">
  <img src="IMG/bb.jpg" class="fixed-bottom rounded float-none" title="© BB" width="100px">
</div>
</footer>

</html>