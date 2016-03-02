<?php 

$id = $_POST['txt_id'];

    include_once "../enlace.php";

     $stm = $dbconn->prepare("DELETE FROM cliente WHERE id_cliente = ".$id."");
        if (!$stm) {
          print ("Error en prepare: " . $dbconn->error . "</br>");
          exit;
          }            
         
          $stm->execute();
          header("location:../empleados.php");


 ?>