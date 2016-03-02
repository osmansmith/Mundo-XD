<?php 

// conexion para php5.5

// nombre del host de la base de datos
$dbhost = "localhost";
// nombre de la base de datos
$database="mundo";
// nombre del usuario de base de datos
$user="root";
// nombre de la contraseña de la base de datos
$password="toor";
 
// Conectarse a la base de datos
$dbconn = new mysqli($dbhost,$user,$password,$database);
 


 ?>