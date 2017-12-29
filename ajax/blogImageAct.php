<?php
require_once("../conn/clases.php");

$url = $_POST["url"];
$id = $_POST["id"];

if (file_exists("../".$url)) {
	BlogImage::urlNew($url, $id);
	echo "ok";
}
?>