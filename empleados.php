<?php 
session_start();
?>
<!DOCTYPE html>
<html class="animated bounce" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="<viewport></viewport>" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->

    <title>Bienvenido <?php echo @ $_SESSION['nom']; ?></title>

     <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/animate.css" rel="stylesheet">             
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script> 
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
     $(function() { $('#creacion1').hover(function() { 
      $('#creacion1').addClass("animated rubberBand"); 
       }, function() {     
     $('#creacion1').removeClass('animated rubberBand'); 
     }); 
   });
     $(function() { $('#creacion2').hover(function() { 
      $('#creacion2').addClass("animated rubberBand"); 
       }, function() {     
     $('#creacion2').removeClass('animated rubberBand'); 
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
            <h1 class="cover-heading">Pagina de empleados</h1>
            <p class="lead">hola empleado <?php echo @$_SESSION['nom']; ?></p>
            <p class="lead">            
            </p>
          </div>
         <div id="creacion" class="inner cover">
               <div class="col-sm-9 col-sm-offset-1">
               <a  href="#" data-toggle="modal" data-target="#cliente"><div  class="servicio">
                 <h2 > Creacion de clientes </h2>
               </div></a>  
               </div> 
               <br><br>                            
          </div>
           <div id="creacion1" class="inner cover">
               <div class="col-sm-9 col-sm-offset-1">
               <a  href="servicios_cliente.php" ><div  class="servicio">
                 <h2 > Servicios </h2>
               </div></a>  
               </div>                              
          </div>
          <br/>
           <div id="creacion2" class="inner cover">
               <div class="col-sm-9 col-sm-offset-1">
               <a  href="pagos.php" ><div  class="servicio">
                 <h2 > Pagos y Comision </h2>
               </div></a>  
               </div>                              
          </div>
            <br><br><br><br>
             <!--Codigo Modal -->
        <div class="modal fade" id="cliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color:#252525;"id="myModalLabel">Registra a tu cliente</h4>
              </div>
              <div class="modal-body">
              
                    <form id="formusu" action="procesos/crea_cliente.php" method="POST">
                    <br><br>
                    <input type="text" id="txt_id" name="txt_id" value="<?php echo $_SESSION['idusu']; ?>"hidden>
                    <div class="form-group">
                    <label for="txt_rut" class="control-label col-sm-2">Rut </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="txt_rut" name="txt_rut" placeholder="ingrese el rut">        
                    </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                    <label for="txt_nombres" class="control-label col-sm-2">Nombres </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="txt_nombres" name="txt_nombres" placeholder="ingrese primer y segundo nombre">
                    </div>
                    </div>
                    <br><br> 
                    <div class="form-group">
                    <label for="txt_apellidos" class="control-label col-sm-2">Apellidos </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="txt_apellidos" name="txt_apellidos" placeholder="ingrese primer y segundo apellido">
                    </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                    <label for="txt_direccion" class="control-label col-sm-2">Direccion </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="txt_direccion" name="txt_direccion" placeholder="ingrese su direccion ">
                    </div>
                    </div>
                    <br><br> 
                    <div class="form-group">
                    <label for="txt_ciudad" class="control-label col-sm-2">Ciudad </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="txt_ciudad" name="txt_ciudad" placeholder="ingrese ciudad">
                    </div>
                    </div>
                    <br><br> 
                    <div class="form-group">
                    <label for="txt_fono" class="control-label col-sm-2">Fono </label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="txt_fono" name="txt_fono" placeholder="ingrese contraseña">
                    </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                    <label for="sel_servicio" class="control-label col-sm-2">Servicio </label>
                    <div  class="col-sm-10">
                              <select class="form-control" name="sel_servicio">
                                <option value="Animacion y personajes" selected>Animación y personajes</option> 
                                <option value="Juegos Infantiles" >Juegos Infantiles</option>                                
                              </select>
                    </div>
                    </div>
                    <br><br>    
                     <button type="submit" id="btn_enviar" name="btn_enviar" class="btn btn-primary col-sm-3 col-sm-offset-5">Enviar</button> <br><br>                           
                    </form> 

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>               
              </div>
            </div>
          </div>
        </div>
          <!--Fin Codigo Modal -->
        <p class="lead">
              <br><br><br>
              <ul style="color:#252525; margin-top:10%;" class="list-group ">
                <li class="list-group-item text-center"><h5>Nombre completo |  Tipo de Servicio | Ciudad </h5> </li>
      <?php 
      include_once "enlace.php";
      $id = $_SESSION['idusu'];
      $stm = $dbconn->prepare("select * from cliente where id_usuario_cliente = ".$_SESSION['idusu']);
        if (!$stm) {
          print ("Error en prepare: " . $dbconn->error . "</br>");
          exit;
          }  

          $stm->bind_result($id_cliente,$id_usuario_cliente,$rut_cliente,$nombres_cliente,$apellidos_cliente,$direccion_cliente,$ciudad_cliente,$fono_cliente,$servicio_cliente);
         
          $stm->execute();
           //  $count = "";
          while ($stm->fetch()) {
           
          print "<li class='list-group-item text-center'><form action='procesos/eliminar_cliente.php' method='post' ><input type='text' name='txt_id' value='".$id_cliente."' hidden/>".$nombres_cliente. " " .$apellidos_cliente. " | ".$servicio_cliente." | ".$ciudad_cliente."<button type='submmit' style='margin-left:1%;' class='btn btn-danger btn-xs pull-right btn-separation-left ' data-toggle='tooltip' data-placement='right' title='Eliminar Cliente'><span class='glyphicon glyphicon-trash '></span></button><button type='button' style='margin-left:1%; 'class='btn btn-info btn-xs pull-right btn-separation-left' data-target='#editar".$id_cliente."'data-toggle='modal'title='Editar Registro'><span data-toggle='tooltip' data-placement='top' title='Editar Cliente!' class='glyphicon glyphicon-pencil'></span></button></form></li> 
             <!--Codigo Modal -->
        <div class='modal fade' id='editar".$id_cliente."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title' style='color:#252525;'id='myModalLabel'>Editar Cliente</h4>
              </div>
              <div class='modal-body'>
              
                     <form id='formusu' action='procesos/actualizar_cliente.php' method='POST'>
                    <br><br>
                    <input type='text' id='txt_id' name='txt_id' value='".$id_cliente."' hidden>
                    <div class='form-group'>
                    <label for='txt_rut' class='control-label col-sm-2'>Rut </label>
                    <div class='col-sm-10'>
                    <input type='text' class='form-control' id='txt_rut' name='txt_rut' value='".$rut_cliente."' placeholder='ingrese el rut'>        
                    </div>
                    </div>
                    <br><br>
                    <div class='form-group'>
                    <label for='txt_nombres' class='control-label col-sm-2'>Nombres </label>
                    <div class='col-sm-10'>
                    <input type='text' class='form-control' id='txt_nombres' name='txt_nombres' value='".$nombres_cliente."'placeholder='ingrese primer y segundo nombre'>
                    </div>
                    </div>
                    <br><br> 
                    <div class='form-group'>
                    <label for='txt_apellidos' class='control-label col-sm-2'>Apellidos </label>
                    <div class='col-sm-10'>
                    <input type='text' class='form-control' id='txt_apellidos' name='txt_apellidos' value='".$apellidos_cliente."' placeholder='ingrese primer y segundo apellido'>
                    </div>
                    </div>
                    <br><br>
                    <div class='form-group'>
                    <label for='txt_direccion' class='control-label col-sm-2'>Direccion </label>
                    <div class='col-sm-10'>
                    <input type='text' class='form-control' id='txt_direccion' name='txt_direccion' value='".$direccion_cliente."' placeholder='ingrese su direccion'>
                    </div>
                    </div>
                    <br><br> 
                    <div class='form-group'>
                    <label for='txt_ciudad' class='control-label col-sm-2'>Ciudad </label>
                    <div class='col-sm-10'>
                    <input type='text' class='form-control' id='txt_ciudad' name='txt_ciudad' value='".$ciudad_cliente."' placeholder='ingrese ciudad'>
                    </div>
                    </div>
                    <br><br> 
                    <div class='form-group'>
                    <label for='txt_fono' class='control-label col-sm-2'>Fono </label>
                    <div class='col-sm-10'>
                    <input type='number' class='form-control' id='txt_fono' name='txt_fono' value='".$fono_cliente."' placeholder='ingrese su telefono de contacto'>
                    </div>
                    </div>
                    <br><br>
                    <div class='form-group'>
                    <label for='sel_servicio' class='control-label col-sm-2'>Servicio </label>
                    <div  class='col-sm-10'>
                              <select class='form-control'  name='sel_servicio'>
                                <option value='Animacion y personajes' selected>Animación y personajes</option> 
                                <option value='Juegos Infantiles' >Juegos Infantiles</option>                                
                              </select>
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


             <p style="margin-top:10%;">WebMaster <a href="http://descargalogratis.cl" target="_blank" >Osman Ahumada</a>.</p>
           
            </p>

          

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