<?php

    include("did.php");
echo data($conexion);


function data($conexion)
{
 
    $salida = "";
    $q = "SELECT (1+2) as suma";
    $r = $conexion->query($q);
    while($fila = mysqli_fetch_array($r))
    {
        $salida.= $fila[0];
    }

    $conexion->close();
    return $salida; 

}
    
