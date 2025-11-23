<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Admin/config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Admin/db.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Utils/MQTMUtils.php";

$caminhoPacotes = $_SERVER['DOCUMENT_ROOT'] . "/MQTMAdm/Arquivos/Pacotes/";

$oPostEmQuestao = ''; 

function redirect($location)
{
	header("Location: " . $location);
	die();
}

session_start();

// login trecos
$usuario = null;

if (isset($_SESSION['userGuid'])) {
	$usuario = UsuarioTools::requestIDator($_SESSION['userGuid']);
}

?>