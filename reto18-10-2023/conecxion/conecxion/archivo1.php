<?php

$a=$_GET['correo'];
$b=$_GET['clave'];

require("archivo5.php");
echo autenticar("$a","$b");
?>
<br><a href="archivo6.php?correo=<?php echo $a?>&clave=<?php echo $b?>">PERFIL</a>
