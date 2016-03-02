<?php session_start(); 
?>
<!DOCTYPE html>
<html class="animated bounce" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->

    <title><?php echo  @ $_SESSION['usu'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/animate.css" rel="stylesheet">             
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    <script src="js/jquery-min.js"></script> 
     <script>
       $(function() { $('#cerrar').hover(function(event) { 
      $('#cerrar').addClass("animated rubberBand"); 
       }, function() {     
     $('#cerrar').removeClass('animated rubberBand'); 
     }); 
   });
     $(function() { $('#creacion').hover(function() { 
      $('#creacion').addClass("animated rubberBand"); 
       }, function() {     
     $('#creacion').removeClass('animated rubberBand'); 
     }); 
   });
      </script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 id="logoletra" class="masthead-brand">XD</h3>
              <nav>
                <ul class="nav masthead-nav">
                 <li class="active"><a id="cerrar" href="cerrar.php">Salir</a></li>
                 
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Hola <?php echo @ $_SESSION['usu'];?>,<?php echo @ $_SESSION['n']; ?></h1>
            <p class="lead">En esta seccion podras crear cuentas de empleados</p>
				<p class="lead">
					<div id="creacion" class="inner cover">
               <div class="col-sm-9 col-sm-offset-1">
               <a  href="#" data-toggle="modal" data-target="#cliente"><div  class="servicio">
                 <h2 > Creacion de Empleados </h2>
               </div></a>  
               </div>                              
          </div>


				</p>
            <p class="lead">
                 <!--Codigo Modal -->
        <div class="modal fade" id="cliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color:#252525;"id="myModalLabel">Registra Empleado</h4>
              </div>
              <div class="modal-body">
              
                    <form id="form_empleados" action="procesos/crea_empreado.php" method="POST">
                    <br><br>
                    <div class="form-group">
                    <label for="txt_apellidos" class="control-label col-sm-2">Nombres </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="txt_nombres" name="txt_nombres" placeholder="ingrese Nombres">        
                    </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                    <label for="txt_apellidos" class="control-label col-sm-2">Apellidos </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="txt_apellidos" name="txt_apellidos" placeholder="ingrese Apellidos">
                    </div>
                    </div>
                    <br><br>                  
                    <input type="text" value="Empleado" id="txt_cargo" name="txt_cargo" hidden>
                    <div class="form-group">
                    <label for="txt_usuario" class="control-label col-sm-2">Usuario </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="txt_usuario" name="txt_usuario" placeholder="ingrese Usuario">
                    </div>
                    </div>
                    <br><br> 
                    <div class="form-group">
                    <label for="txt_pass" class="control-label col-sm-2">Contraseña</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="txt_pass" name="txt_pass" placeholder="ingrese contraseña">
                    </div>
                    </div>
                    <br><br>
                     <button type="submit" id="btn_enviar" name="btn_enviar" class="btn btn-primary col-sm-3 col-sm-offset-5">Enviar</button>
                     <br><br>                             
                    </form> 

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>               
              </div>
            </div>
          </div>
        </div>
          <!--Fin Codigo Modal -->
            </p>
            <p class="lead">
            	<br><br><br><br>
              <ul style="color:#252525;" class="list-group">
                <li class="list-group-item text-left"><h5>Nombre completo  |  Nombre de usuario  |  Pass de usuario | </h5></li>

			<?php 
			include_once "enlace.php";     
			$stm = $dbconn->prepare("select * from usuarios where cargo_usuarios = 'Empleado' ");
				if (!$stm) {
			    print ("Error en prepare: " . $dbconn->error . "</br>");
			    exit;
			    }	   
			    $stm->bind_result($id_usuarios,$nombres_usuarios,$apellidos_usuarios,$cargo_usuarios,$usuario,$pass);
			    $stm->execute();
			    while ($stm->fetch()) {          
			    print "<li class='list-group-item text-left'><form action='procesos/eliminar_usuarios.php' method='post' ><input type='text' name='txt_id' value='".$id_usuarios."' hidden/>".$nombres_usuarios. " " .$apellidos_usuarios. " | ".$usuario." | ".$pass."<button type='submmit' style='margin-left:1%;' class='btn btn-danger btn-xs pull-right btn-separation-left ' data-toggle='tooltip' data-placement='right' title='Eliminar Empleado'><span class='glyphicon glyphicon-trash '></span></button><button type='button' style='margin-left:1%; 'class='btn btn-info btn-xs pull-right btn-separation-left' data-target='#editar".$id_usuarios."'data-toggle='modal'title='Editar Registro'><span data-toggle='tooltip' data-placement='top' title='Editar Empleado!' class='glyphicon glyphicon-pencil'></span></button></form></li>
           <!--Codigo Modal -->
        <div class='modal fade' id='editar".$id_usuarios."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title' style='color:#252525;'id='myModalLabel'>Editar Cliente</h4>
              </div>
              <div class='modal-body'>
              
                     <form id='formusu' action='procesos/actualizar_usuarios.php' method='POST'>
                    <br><br>
                    <input type='text' id='txt_id' name='txt_id' value='".$id_usuarios."' hidden>
                    <div class='form-group'>
                    <label for='txt_nombres' class='control-label col-sm-2'>Nombres </label>
                    <div class='col-sm-10'>
                    <input type='text' class='form-control' id='txt_nombres' name='txt_nombres' value='".$nombres_usuarios."' placeholder='ingrese el nombre completo'>        
                    </div>
                    </div>
                    <br><br>
                    <div class='form-group'>
                    <label for='txt_apellidos' class='control-label col-sm-2'>Apellidos </label>
                    <div class='col-sm-10'>
                    <input type='text' class='form-control' id='txt_apellidos' name='txt_apellidos' value='".$apellidos_usuarios."'placeholder='ingrese apellido completo'>
                    </div>
                    </div>
                    <br><br> 
                    <div class='form-group'>
                    <label for='txt_usuario' class='control-label col-sm-2'>Apellidos </label>
                    <div class='col-sm-10'>
                    <input type='text' class='form-control' id='txt_usuario' name='txt_usuario' value='".$usuario."' placeholder='ingrese Nombre  de usuario'>
                    </div>
                    </div>
                    <br><br>
                    <div class='form-group'>
                    <label for='txt_pass' class='control-label col-sm-2'>Direccion </label>
                    <div class='col-sm-10'>
                    <input type='password' class='form-control' id='txt_pass' name='txt_pass' value='".$pass."' placeholder='ingrese su direccion'>
                    </div>
                    </div>
                    <br><br>                                                             
                     <button type='submit' id='btn_enviar' name='btn_enviar' class='btn btn-primary col-sm-3 col-sm-offset-5'>Enviar</button> <br><br>                           
                    </form> 
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>               
              </div>
            </div>
          </div>
        </div>
          <!--Fin Codigo Modal -->";
	     }	
			 ?>
        </ul>
            </p>
          </div>       
          <div class="mastfoot">
            <div class="inner">
              <p>WebMaster <a href="http://descargalogratis.cl" target="_blank" >Osman Ahumada</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

      <script src="js/bootstrap.min.js"></script> 
       <script>
     $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
     </script>     
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
