<?php
require_once("../conn/clases.php");

$id = $_GET["id"];

landingBtn::chanGralInactivo();

landingBtn::chanEdoActivo($id);

?>