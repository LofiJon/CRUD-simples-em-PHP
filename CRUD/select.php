<?php
    include "connect.php";
        $consulta = $_POST['consulta'];//0
    $sql = mysqli_query($link,"SELECT *FROM tb_login WHERE nome like '%$consulta%'");//contem;
    while($vetor = mysqli_fetch_array($sql)){
        $id = $vetor['id_login'];
        $nome = $vetor['nome'];
        $email = $vetor['email'];
        $senha = $vetor['senha'];

     //echo "Id: $id<br>";
     echo "O nome  $nome  foi encontrado !<br>";
     //echo "Email: $email<br>";
    // echo "senha: $senha<hr>";
     
}

?>