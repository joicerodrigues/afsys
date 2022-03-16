<?php
include_once('conexao.php');
$nome = $_POST['nome']; 
$email = $_POST['email']; 
$texto = $_POST['texto'];
      
        $sql_code = "INSERT INTO form (nome, email, texto) VALUES('$nome', '$email', '$texto')";
        print_r ($sql_code);
        
        $sql = mysqli_query($mysqli, $sql_code);
        print_r ($sql);
?>