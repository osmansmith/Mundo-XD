<?php 

include_once "../enlace.php";		
		$nombres = $_POST['txt_nombres'];
		$apellidos = $_POST['txt_apellidos'];		
		$usuario= $_POST['txt_usuario'];
		$pass = $_POST['txt_pass'];
		$id = $_POST['txt_id'];
	

		 $stm = $dbconn->prepare("UPDATE usuarios SET nombres_usuarios = '".$nombres."',apellidos_usuarios = '".$apellidos."',  usuario = '".$usuario."', pass = '".$pass."' WHERE id_usuarios = '".$id."'");

      if (!$stm) {
	    print ("Error en prepare: " . $dbconn->error . "</br>");
	    exit;
	    }	   	    
	    $stm->execute(); 	     	           
      header("location:../creausu.php");


 ?>