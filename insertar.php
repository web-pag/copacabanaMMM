<?php
require_once("db.php");
$conexion = conexion();
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$edad = $_POST["edad"];
$Id_Compromiso = $_POST["Id_Compromiso"];
$Id_Clase = $_POST["Id_Clase"];
$campana = $_POST["campana"];
$Id_Tema = $_POST["Id_Tema"];
$Ensenanza = $_POST["Ensenanza"];
$Oracion = $_POST["Oracion"];
$Evangelismo = $_POST["Evangelismo"];
$Visitacion = $_POST["Visitacion"];
$Hospitalario = $_POST["Hospitalario"];
$Cocina = $_POST["Cocina"];
$Escuela_Dominical = $_POST["Escuela_Dominical"];
$Carcelario = $_POST["Carcelario"];
$Ujieres = $_POST["Ujieres"];
$comentarios = $_POST["comentarios"];

$statement = $conexion->prepare("INSERT INTO datos (nombre, email, edad, Id_Compromiso, Id_Clase, campana, Id_Tema, Ensenanza,
Oracion, Evangelismo, Visitacion, Hospitalario, Cocina, Escuela_Dominical, Carcelario, Ujieres, comentarios) 
VALUES ('$nombre', '$email', '$edad', '$Id_Compromiso', '$Id_Clase', '$campana', '$Id_Tema', '$Ensenanza', '$Oracion', 
'$Evangelismo', '$Visitacion', '$Hospitalario', '$Cocina', '$Escuela_Dominical', '$Carcelario', '$Ujieres', '$comentarios')");

$statement->execute();

if ($statement) {
    header("Location:index.php");
    echo '<script type="text/javascript"> alert("Tus datos han sido enviados exitosamente.") </script>';
} else {
    echo '<script type="text/javascript"> alert("Ups! ha ocurrio un error, intentelo más tarde.") </script>';
}
