<?php 

include_once "../enlace.php";		
		$nombres = $_POST['txt_nombres'];
		$apellidos = $_POST['txt_apellidos'];
		$direccion = $_POST['txt_direccion'];
		$ciudad =  $_POST['txt_ciudad'];
		$fono = $_POST['txt_fono'];
		$servicio = $_POST['sel_servicio'];
		$id = $_POST['txt_id'];
		$rut = $_POST['txt_rut'];

		 $stm = $dbconn->prepare("UPDATE cliente SET nombres_cliente = '".$nombres."',apellidos_cliente = '".$apellidos."', direccion_cliente = '".$direccion."', ciudad_cliente = '".$ciudad."', fono_cliente = '".$fono."',servicio_cliente = '".$servicio."', rut_cliente='".$rut."' WHERE id_cliente = '".$id."'");

      if (!$stm) {
	    print ("Error en prepare: " . $dbconn->error . "</br>");
	    exit;
	    }	   	    
	    $stm->execute(); 	     	           
      header("location:../empleados.php");


 ?>