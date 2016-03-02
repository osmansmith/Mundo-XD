<?php 
	if (isset($_POST['txt_nombres']) && !empty($_POST['txt_nombres']) &&
	    isset($_POST['txt_apellidos']) && !empty($_POST['txt_apellidos']) &&
	    isset($_POST['txt_usuario']) && !empty($_POST['txt_usuario']) &&
	    isset($_POST['txt_pass']) && !empty($_POST['txt_pass']) ) {
		include_once "../enlace.php";
		$nombres = utf8_encode($_POST['txt_nombres']);
		$apellidos = utf8_encode($_POST['txt_apellidos']);
		$usuario = utf8_encode($_POST['txt_usuario']);
		$pass = utf8_encode( $_POST['txt_pass']);
		$cargo = utf8_encode($_POST['txt_cargo']);
		
	    $stm = $dbconn->prepare("INSERT INTO usuarios (nombres_usuarios,apellidos_usuarios,cargo_usuarios,usuario,pass) VALUES('$nombres','$apellidos','$cargo','$usuario','$pass')");
      if (!$stm) {
	    print ("Error en prepare: " . $dbconn->error . "</br>");
	    exit;
	    }	   	    
	    $stm->execute(); 	     	    
        echo "<script>";
        echo "alert('La transacción ha sido exitosa')";
        echo "</script>";          
       header("location:../creausu.php");
	}else{
		 echo "<script>";
        echo "alert('Ha ocurrido un error')";
        echo "</script>";
         header("location:../creausu.php");
	}


 ?>