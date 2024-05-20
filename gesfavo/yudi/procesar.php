<?php

include("conexion.php");

$nombre = $_POST['nombre']; $apellidos = $_POST['apellidos']; $telefono = $_POST['telefono']; $direccion = $_POST['direccion']; $municipio = $_POST['municipio']; $departamento = $_POST['departamento'];
$documento = $_POST['documento']; $email = $_POST['email']; $fecha_nacimiento = $_POST['fecha_nacimiento'];

$sql = "INSERT INTO usuarios (nombre, apellidos, telefono, direccion, municipio, departamento, documento, email, fecha_nacimiento) VALUES ( '$nombre', '$apellidos', '$telefono', '$direccion', '$municipio', '$departamento', '$documento', '$email', '$fecha_nacimiento')";

if ($conn->query($sql) === TRUE) {
    echo "Registro creado exitosamente";
    header("Location: index.php");  exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
