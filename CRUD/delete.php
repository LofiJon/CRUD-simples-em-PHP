<?php
  include "connect.php";

  $id = 1;

    mysqli_query($link,"DELETE FROM tb_login WHERE id_login ='$id'");

?>