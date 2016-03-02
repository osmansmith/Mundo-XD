<?php 
$msj = "";
session_start();
if (isset($_POST['btnenviar'])) {
  if (isset($_POST['nombre']) && !empty($_POST['nombre']) && (isset($_POST['pass'])&& !empty($_POST['pass']))){
  include_once "enlace.php";
      $sql = "SELECT * FROM usuarios WHERE usuario='$_POST[nombre]' and pass ='$_POST[pass]'";
      $result = mysqli_query($dbconn,$sql);        
      if ($row = mysqli_fetch_assoc($result)) {  
      $_SESSION['idusu'] = $row["id_usuarios"];    
      $_SESSION['nom'] = $row["usuario"];
      $_SESSION['pas'] = $row["pass"]; 
       $_SESSION['n'] = $row["nombres_usuarios"]; 
      $_SESSION['usu'] = $row["cargo_usuarios"];  
      if ($_SESSION['usu'] == "Administrador") {
              header("location:creausu.php");
          }else{
              header("location:empleados.php");
          }    
    
      mysql_free_result($result);      
}else{
  $msj="<div class='animated zoomIn alert alert-danger' role='alert'>Usuario No Registrado, intentelo nuevamente</div>";
}
  }else{
    //falso
    $msj="<div class='animated zoomIn alert alert-danger' role='alert'><strong>  Debes ingresar Usuario y contraseña para acceder</strong></div>"; 
 } 
}
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

    <title>Mundo XD</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/animate.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    
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
                  <li class="active"><a href="#">Inicio</a></li>
                 
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Mundo XD</h1>
            <p class="lead">Somos especialistas en eventos infantiles de alta calidad, no dudes en probar nuestros servicios</p>
            <p class="lead">
             <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#formulario">
              Ver Más
            </button>
            </p>
          </div>
          <?php echo $msj; ?>

         <!--Codigo Modal -->
        <div class="modal fade" id="formulario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color:#252525;"id="myModalLabel">Debes ser miembro para entrar</h4>
              </div>
              <div class="modal-body">
              
                    <form action="index.php" method="POST">
                    <div class="form-group">
                      <label for="name" style="color:#252525;" class="col-sm-2 control-label">Usuario</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" style="text-align:center;" id="nombre" name="nombre" placeholder="Nombre de usuario">
                    </div>
                    </div>
                    </br> </br> 
                    <div class="form-group">
                      <label for="contraseña" style="color:#252525;" class="col-sm-2 control-label">contraseña</label>
                      <div class="col-sm-10">
                      <input type="password" class="form-control" style="text-align:center;"  id="pass" name="pass" placeholder="Escriba contraseña">
                    </div>
                    </div>
                          <br></br>                             
                    <button type="submit" name="btnenviar" id="btnenviar" class="btn btn-info">Acceder</button>
                  </form>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>               
              </div>
            </div>
          </div>
        </div>
          <!--Fin Codigo Modal -->

          <div class="mastfoot">
            <div class="inner">
              <p>WebMaster <a href="http://descargalogratis.cl" target="_blank" >Osman Ahumada</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>
    <script src="js/jquery-min.js"></script> 
    <script src="js/bootstrap.min.js"></script>        
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
