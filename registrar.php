<?php

include_once('conexregistrar.php');



$nombre=trim($_POST['nombre']);
$usuario=trim($_POST['usuario']);
$gmail=trim($_POST['gmail']);
$contrasena=trim($_POST['contrasena']);



$consulta="INSERT INTO sesion ( nombre, usuario, gmail, contrasena) VALUES ('$nombre','$usuario','$gmail','$contrasena')";
$resul = mysqli_query($conexion,$consulta);


?>