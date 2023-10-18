<?php


function registrar($documento,$nombre,$correo,$clave,$categoria)
{
    require("archivo3.php");
    $salida = "";
    $imprimir = "INSERT INTO tb_usuarios VALUES ('$documento','$nombre','$correo','$clave','$categoria')";
    $slq = $conexion->query("$imprimir");
    $conexion->close();
    return $salida;
    
}

function borrar($correo,$clave)
{
    require("archivo3.php");
    $salida = "";
    $imprimir = "DELETE FROM tb_usuarios where usuario_correo='$correo' and usuario_contrasena='$clave';";
    $slq = $conexion->query("$imprimir");
    $conexion->close();
    return $salida;
    
}

function autenticar($correo,$clave)
{
    require("archivo3.php");
    $salida="";
    $imprimir = "SELECT * from tb_usuarios where usuario_correo='$correo' and usuario_contrasena='$clave'";
    $sql = $conexion->query("$imprimir");
    if($fila = $sql->fetch_assoc())
    {      
        $salida.="TE HAS AUTENTICADO CORRECTAMENTE.";
    }else{
        header("Location: archivo4.php?correo=$correo&clave=$clave");
    }

    $conexion->close();
    return $salida;
}

function perfil($correo,$clave)
{
    require("archivo3.php");
    $salida="";
    $imprimir = "SELECT * from tb_usuarios where usuario_correo='$correo' and usuario_contrasena='$clave'";

    
    $sql = $conexion->query("$imprimir");
  
    while($fila = $sql->fetch_assoc())
    {      
        $salida.= "<tr>";
        $salida.="<th>". $fila['id_usuario']." <th>";
        $salida.= "<th>".$fila['usuario_nombre']." <th>";
        $salida.= "<th>".$fila['usuario_correo']." <th>";
        $salida.= "<th>".$fila['usuario_contrasena']." <th>";
        $salida.= "<th>".$fila['categoria_nombre']."<th>";
        $salida.= "</tr>";

    
    }

    $conexion->close();
    return $salida;
}

 