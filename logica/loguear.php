<?php
require'conexion.php';

session_start();

$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];



$q= "SELECT COUNT(*) as contar from sesion where usuario ='$usuario 'and nombre='$nombre'and contrasena='$contrasena' ";
$consulta= mysqli_query($conexion,$q);
$array= mysqli_fetch_array($consulta);

if ($array['contar']>0) {
    $_SESSION['username'] =$usuario;
    header("location: ../paginaprincipal.php");  
}else {
    echo"<p style='color: red;text-align: center;margin-top: 200px;font-size: 50px;'>¿QUIEN SOS VOS?</p>";
}



?>