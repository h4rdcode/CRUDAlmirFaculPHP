<?php    
    include 'conexao.php';
    
    $nome = trim($_POST['txtNome']); 
    $email = trim($_POST['txtEmail']); 
    $senha = trim($_POST['txtSenha']);
    $data_nasc = trim($_POST['txtDate']); 

    if (!empty($nome) && !empty($email) && !empty($senha) && !empty($data_nasc)){
        $sql = "INSERT INTO usuarios(nome, email, senha, data_nasc) VALUES (?, ?, ?, ?)";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $email, $senha, $data_nasc));
        Conexao::desconectar(); 
    }

    header("location:telacadastro.php"); 

?>