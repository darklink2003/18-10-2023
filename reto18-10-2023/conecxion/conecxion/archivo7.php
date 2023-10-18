<?php
$c=$_GET['documento'];
$d=$_GET['nombre'];
$a=$_GET['correo'];
$b=$_GET['clave'];
$e=$_GET['categoria'];

require("archivo5.php");
echo registrar("$c","$d","$a","$b","$e");
?>
<a href="archivo2.php?correo=<?php echo $a?>&clave=<?php echo $b?>">INICIO</a>