<?php


$a=$_GET['correo'];
$b=$_GET['clave'];


require("archivo5.php");
echo borrar("$a","$b");
?>
<a href="archivo2.php?correo=<?php echo $a?>&clave=<?php echo $b?>">INICIO</a>