<?php
    include "connect.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

mysqli_query($link,"INSERT INTO tb_login(nome,email,senha)
   VALUES('$nome','$email','$senha')");
 header('location:formInsert.php');
?>