<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/MQTMUtils.php";

$urlManeira = $_SERVER['DOCUMENT_ROOT'] . "/Pacotes/" . $_GET['guid'] . '/' . $_GET['guid'] . ".mpi";
$filewoah = file_get_contents($urlManeira);

header('Content-Type: image/png');
echo decryptBytes($filewoah);
?>