<?php
$conexion = new mysqli("localhost", "root", "", "prueba");
if($conexion->connect_error){
    die("La conexion falló:" . $conexion->connect_error);
}

$Nombre = $_POST["Nombre"];
$Apellidos = $_POST["Apellido"];
$Correo = $_POST["Correo"];
$Contrasena = $_POST["Contraseña"];
$ConfirmarContrasena = $_POST["CContraseña"];

if($Contrasena !== $ConfirmarContrasena){
    echo '<script>alert("Las contraseñas no coinciden, intentalo de nuevo.");</script>';
}
else{
    if($conexion->query("INSERT INTO usuario(nombre, apellido, correo, contrasena) VALUES ('$Nombre', '$Apellidos', '$Correo', '$Contrasena')") === TRUE){
        echo '<script>alert("Los datos han sido registrados correctamente.");</script>';
    } else {
        echo '<script>alert("Se ha producido un error.");</script>';
    }
}
$conexion->close();
?>