<?php

$a=$_GET['correo'];
$b=$_GET['clave'];

require("archivo5.php");
echo perfil("$a","$b");

?>
<br><a href="archivo2.php?correo=<?php echo $a?>&clave=<?php echo $b?>">INICIO</a>
<br><a href="archivo8.php?correo=<?php echo $a?>&clave=<?php echo $b?>">Borrar</a>