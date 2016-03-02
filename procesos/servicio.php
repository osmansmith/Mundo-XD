<?php 
session_start();
include_once "enlace.php";
$id = $_POST['txt_id'];
$nombre =$_POST['txt_nombre'];
$servicio=$_POST['txt_servicio'];

if ($_POST['txt_servicio'] == "Animacion y personajes" ) {
   $stm = $dbconn->prepare("select * from animacionypersonajes where codigo_animacion = ".$id."");
        if (!$stm) {
          print ("Error en prepare: " . $dbconn->error . "</br>");
          exit;
          }  

          $stm->bind_result($id_cliente,$id_usuario_cliente,$rut_cliente,$nombres_cliente,$apellidos_cliente,$direccion_cliente,$ciudad_cliente,$fono_cliente,$servicio_cliente);
         
          $stm->execute();
           //  $count = "";
          while ($stm->fetch()) {
            $id = $id_cliente;
            $nombre = $nombres_cliente;
            $servicio = $servicio_cliente;
           }  
}

if ($_POST['txt_servicio'] == "Juegos Infantiles" ) {
   $stm = $dbconn->prepare("select * from juegosinfantiles where cliente_juego = ".$_SESSION['idusu']);
        if (!$stm) {
          print ("Error en prepare: " . $dbconn->error . "</br>");
          exit;
          }  

          $stm->bind_result($id_cliente,$id_usuario_cliente,$rut_cliente,$nombres_cliente,$apellidos_cliente,$direccion_cliente,$ciudad_cliente,$fono_cliente,$servicio_cliente);
         
          $stm->execute();
           //  $count = "";
          while ($stm->fetch()) {
            $id = $id_cliente;
            $nombre = $nombres_cliente;
            $servicio = $servicio_cliente;
           }  
}


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
            <h1 class="cover-heading">Registro de Servicios</h1>
            <p class="lead">hola empleado <?php echo @$_SESSION['nom']; ?></p>
            <p class="lead">            
            </p>
          </div>
         <div id="creacion" class="inner cover">
               <div class="col-sm-9 col-sm-offset-1">
               <a  href="empleados.php" ><div  class="servicio">
                 <h2> Volver al perfil </h2>
               </div></a>  
               </div> 
               <br><br>                            
          </div>
           
        <p class="lead">
         


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