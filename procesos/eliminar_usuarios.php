<?php 

$id = $_POST['txt_id'];

    include_once "../enlace.php";

     $stm = $dbconn->prepare("DELETE FROM usuarios WHERE id_usuarios = ".$id."");
        if (!$stm) {
          print ("Error en prepare: " . $dbconn->error . "</br>");
          exit;
          }            
         
          $stm->execute();
          header("location:../creausu.php");


 ?>