<?php
$conexion = new mysqli("localhost", "root", "", "prueba");
if($conexion->connect_error){
    die("La conexion falló:" . $conexion->connect_error);
}

$Correo = $_POST["Correo"];
$Contrasena = $_POST["Contra"];

$resultado = $conexion->query("SELECT nombre FROM usuario WHERE correo = '$Correo' AND contrasena = '$Contrasena'");
if ($resultado->num_rows > 0){
    $fila = $resultado->fetch_assoc();
    $NombreUsuario = $fila["nombre"];
    $respuesta = array("autenticado"=>true, "NombreUsuario" => $NombreUsuario);
    echo json_encode($respuesta);
} else {
    $respuesta = array("autenticado"=>false, "NombreUsuario" => $respuesta);
}

$conexion->close();
?>