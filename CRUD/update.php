<?php
    include "connect.php";
    $nome = "Pedro";
    $senha = "123432";

    mysqli_query($link,"UPDATE tb_login set nome = '$nome', senha='$senha' WHERE  id_login = 5");

?>