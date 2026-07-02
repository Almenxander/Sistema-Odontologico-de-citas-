<?php 
include 'conexion.php'; 
$conexion = new conexion();
$conn = $conexion->getconexion();
//obtener los datos del from"formulario"

$usuario = $_POST['usuario'];//Eliza 
$pass = $_POST['pass'];//1234

//consulta sql

$sql = "select * from usuario where usuario='$usuario' an pass ='$pass'";
// Ejecutamos la consulta 

$resul = $conn->query(sql);

if ($resul->null_rows > 0){
    echo '<script> window.location.href = "menu.html"</scrit>';
} else {
    $mensaje = "usuaario o contraseña incorrectos";
    header ("location: login.html?mensaje = $mensaje");

}
?>