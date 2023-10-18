<?php
    $conexion = mysqli_connect('localhost','root','','db_ejemplo');
    $producto = $conexion->query("SELECT * FROM tb_productos LIMIT 10");
    $usuario = $conexion->query("SELECT * FROM tb_usuarios");
    $compra = $conexion->query("SELECT  factura_id,producto_nombre,producto_color,producto_precio,producto_caracteristicas,cantidad,producto_precio*cantidad AS precio_total,usuario_nombre
                                FROM tb_productos,tb_usuarios
                                INNER JOIN compra
                                WHERE compra.id_usuario = tb_usuarios.id_usuario AND compra.producto_id = tb_productos.producto_id");


 /* function productos($conexion,$producto)
    {
        

        while ($fila = $producto->fetch_assoc()) {
            echo '<tr>';
            echo '<td>'. $fila['producto_id']. '</td>';
            echo '<td>'. $fila['producto_nombre']. '</td>';
            echo '<td>'. $fila['producto_color']. '</td>';
            echo '<td>'. $fila['producto_precio']. '</td>';
            echo '<td>'. $fila['producto_caracteristicas']. '</td>';
        }
        
        return $fila;
    }

   function usuarios($conexion,$usuario)
    {
        
        while($fila1 = $usuario->fetch_assoc())
        {
            echo '<tr>';
            echo '<td>'. $fila1['id_usuario']. '</td>';
            echo '<td>'. $fila1['usuario_nombre']. '</td>';
            echo '<td>'. $fila1['usuario_correo']. '</td>';
            echo '<td>'. $fila1['usuario_contrasena']. '</td>';
            echo '<td>'. $fila1['categoria_nombre']. '</td>';
        } 

    }

    function compra ($conexion,$compra)
    {
        while($fila1 = $compra->fetch_assoc())
        {
            echo '<tr>';
            echo '<td>'. $fila1['factura_id']. '</td>';
            echo '<td>'. $fila1['producto_nombre']. '</td>';
            echo '<td>'. $fila1['producto_color']. '</td>';
            echo '<td>'. $fila1['producto_precio']. '</td>';
            echo '<td>'. $fila1['producto_caracteristicas']. '</td>';
            echo '<td>'. $fila1['cantidad']. '</td>';
            echo '<td>'. $fila1['precio_total']. '</td>';
            echo '<td>'. $fila1['usuario_nombre']. '</td>';
            
        } 
    }


   


*/

 
echo autenticar("calioo@gmail.com","pepe");

function autenticar($correo, $clave)
{
    require("compra.php");
    $salida="";
   $imprimir = "SELECT * from tb_usuarios where usuario_correo = '$correo' and usuario_contrasena ='$clave'";
   echo $imprimir;
   $sql = $conexion->query("$imprimir");
    if($datos = $sql->fetch_object())
    {
        $salida.="TE HAS AUTENTICADO CORRECTAMENTE";
    }else{
        $salida.="ERROR NO ESTAS REGISTRADO";
    }

    return $salida;
}
   

