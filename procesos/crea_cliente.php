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

		$stm = $dbconn->prepare("INSERT INTO cliente(rut_cliente,nombres_cliente,apellidos_cliente,direccion_cliente,ciudad_cliente,fono_cliente,servicio_cliente,id_usuario_cliente) VALUES ('$rut','$nombres','$apellidos','$direccion','$ciudad',$fono,'$servicio',$id)");
      if (!$stm) {
	    print ("Error en prepare: " . $dbconn->error . "</br>");
	    exit;
	    }	   	    
	    $stm->execute(); 	     	           
      header("location:../empleados.php");	

 ?>