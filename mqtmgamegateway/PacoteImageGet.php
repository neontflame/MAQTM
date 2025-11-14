<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";

$urlManeira = $_SERVER['DOCUMENT_ROOT'] . "/Pacotes/" . $_GET['guid'] . '/' . $_GET['guid'] . ".mpi";
$urlManeiraPng = $_SERVER['DOCUMENT_ROOT'] . "/Pacotes/" . $_GET['guid'] . '/' . $_GET['guid'] . ".png";
$filewoah = file_get_contents($urlManeira);

header('Content-Type: image/png');
if (file_exists($urlManeiraPng)) {
	echo file_get_contents($urlManeiraPng);
} else {
	echo decryptBytes($filewoah);
}
?>