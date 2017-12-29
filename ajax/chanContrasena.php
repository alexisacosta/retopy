<?php
require_once("../conn/clases.php");
$s = new Session();

$i = $_SESSION['idpersona'];
$c = $_POST['c'];
$f = date('Y-n-j');

Usuario::cambioContrasena($i, $c, $f);

?>