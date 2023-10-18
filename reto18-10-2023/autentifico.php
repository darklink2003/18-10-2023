<?php
// Función para autentificar un usuario
function autenticar($nombre, $clave) {
    // Conectar con la base de datos
    $conexion = new PDO("mysql:host=localhost;dbname=aa", "root", "");
  
    // Crear la consulta SQL
    $sql = "SELECT * FROM Productos WHERE nombre = :nombre AND clave = :clave";
  
    // Preparar la consulta
    $sentencia = $conexion->prepare($sql);
  
    // Vincular los parámetros
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia->bindParam(":clave", $clave);
  
    // Ejecutar la consulta
    $sentencia->execute();
  
    // Comprobar el resultado
    if ($sentencia->rowCount() == 1) {
      // El usuario existe
      return true;
    } else {
      // El usuario no existe
      return false;
    }
  
 
  }
  
// Obtener los parámetros de la URL
$nombre = $_GET["nombre"];
$clave = $_GET["clave"];

// Autenticar al usuario
$resultado = autenticar($nombre, $clave);

// Comprobar el resultado
if ($resultado == true) {
  // El usuario está autenticado
  header('location:consulto.php');
} else {
  // El usuario no está autenticado
  echo "El usuario no está autenticado.";
}

  
?>
<h1>auto</h1>