<?php
   include 'conexao.php';
   $sql = "select * from usuarios order by id;";
   $pdo = conexao::conectar(); 
   $menu = $pdo->query($sql);
?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>E-SHOP NOW</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- CONFIG DOS ÍCONES -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>

<body>
<nav class="black">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center"><img width="68" src="./imagens/logos.png"/></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="inicio.php">Início</a></li>
        <li><a href="telacadastro.php">Registrar</a></li>
        <li><a href="contatos.html">Contatos</a></li>
        <li><a href="index.html">Login</a></li>
        <li><a href="logout.html">Logout</a></li>
        <div class="card-panel grey darken-4">
      </ul>
    </div>
  </nav>
</body>
</html>