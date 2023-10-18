<?php
function mostrar($nombre, $clave){

    // Conectar con la base de datos
    $conexion = new PDO("mysql:host=localhost;dbname=aa", "root", "");
    $sql = "SELECT * FROM Productos WHERE nombre = :nombre AND clave = :clave";
  
    // Ejecutar la consulta
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia->bindParam(":clave", $clave);
    $sentencia->execute();
  
    // Devolver el objeto PDOStatement
    return $sentencia;
  }
  
  $nombre = $_GET["nombre"];
  $clave = $_GET["clave"];
  
  // Obtener los datos de la tabla
  $sentencia = mostrar($nombre, $clave);
  
  // Mostrar los datos en una tabla HTML
  foreach ($sentencia as $fila) {
    echo "<tr>";
    echo "<td>" . $fila["nombre"] . "</td>";
    echo "<td>" . $fila["clave"] . "</td>";
    echo "</tr>";
  }
  
?>
<a href="borrar.php?nombre=$nombre">eliminar</a>