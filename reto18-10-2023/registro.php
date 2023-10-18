<?php

// Función para registrar un usuario mediante la URL
function registrar_por_url($nombre, $clave) {
  // Conectar con la base de datos
  $conexion = new PDO("mysql:host=localhost;dbname=aa", "root", "");

  // Crear la consulta SQL
  $sql = "INSERT INTO Productos (nombre, clave) VALUES (:nombre, :clave)";

  // Preparar la consulta
  $sentencia = $conexion->prepare($sql);

  // Vincular los parámetros
  $sentencia->bindParam(":nombre", $nombre);
  $sentencia->bindParam(":clave", $clave);

  // Ejecutar la consulta
  $sentencia->execute();

  // Cerrar la conexión
  $conexion = null;

  // Devolver el resultado
  return $sentencia->rowCount();
}

// Obtener los parámetros de la URL
$nombre = $_GET["nombre"];
$clave = $_GET["clave"];

// Registrar al usuario
$resultado = registrar_por_url($nombre, $clave);

// Comprobar el resultado
if ($resultado == 1) {
  // El usuario se ha registrado correctamente
  header('location:autentifico.php');

} else {
  // Se ha producido un error al registrar al usuario
  echo "Se ha producido un error al registrar al usuario.";
}

?>
<h1>registro</h1>