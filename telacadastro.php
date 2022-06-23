<?php
include 'menu.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
</head>

<html>
<head>
    <body>
    <div class="row">    
      <div class="col xl12 l12 m12 s12">
		<div class="card-panel center black">
          <span class="white-text">
            Registre-se em nosso WebSite para sempre receber novidades em seu email !
          </span>
        </div>
      </div>       
      <div class="col xl12 l12 m12 s12">
      <div class="card-panel center black">
    <div class="grey darken-3 row">
        <form action="login.php" method="post" id="telacadastro" class="col s12">
            <div class="input-field col s5">
                <label for="lblNome" class="white-text">Informe um Nome: </label>
                <input placeholder="" id="txt_nome" name="txtNome" type="text">
    </div>  
            <div class="input-field col s5">
                <label for="lblEmail" class="white-text">Informe o Email: </label>
                <input placeholder="" id="txt_email" name="txtEmail" type="email">
    </div>
           <div class="input-field col s5">
                <label for="lblSenha" class="white-text">Informe a Senha: </label>
                <input placeholder="" id="txt_senha" name="txtSenha" type="password">
    </div>
            <div class="input-field col s5">
                <label for="lblDate" class="white-text">Data de Nascimento: </label>
                <input placeholder="" id="txt_date" name="txtDate" type="date">
    </div>
        <div class = "input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light green" type="submit" name="action">Salvar                        
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset" name="action">Limpar
                        <i class="material-icons right">brush</i>
                    </button>
                    <button class="btn waves-effect waves-light grey darken-4" 
                    type="button" name="btnVoltar" onclick="JavaScript:location.href='index.php'">Voltar
                        <i class="material-icons right">arrow_back</i> 
                    </button>
        </div>    
        </form>
        </div>
        </div>
    </body>
</head>
</html>