<?php

function borrarProducto($nombre) {

    // Conectar con la base de datos
    $conexion = new PDO("mysql:host=localhost;dbname=aa", "root", "");

    // Preparar la consulta SQL
    $sql = "DELETE FROM Productos WHERE nombre = :nombre";
    $sentencia = $conexion->prepare($sql);

    // Asignar el valor del parámetro
    $sentencia->bindParam(":nombre", $nombre);

    // Ejecutar la consulta
    $sentencia->execute();

    // Devolver el resultado
    return $sentencia->rowCount();
}
// Obtener el nombre del producto a borrar
$nombre = $_GET["nombre"];

// Borrar el producto
$resultado = borrarProducto($nombre);

// Mostrar el resultado
if ($resultado > 0) {
    echo "El producto se ha borrado correctamente.";
} else {
    echo "No se ha podido borrar el producto.";
}


?>