<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";
// ok nos sabemos que isso precisa de um WSDL 
// unico problema e eu Nao Sei como sequer funciona um wsdl
// entao nos vamos fumblar bags ate conseguir

$savedComicsDir = $_SERVER['DOCUMENT_ROOT'] . '/Static/ComicsSalvas';
$screenshotsDir = $_SERVER['DOCUMENT_ROOT'] . '/Static/Screenshots';

class GameGatewayReimplement
{
	public function Save($userGuid, $comicGuid, $saveData, $screenShot, $titulo, $descricao)
	{
		$hqTrecos = new HqTools();
		$hqTrecos->criar($userGuid, $saveData, $screenShot, $titulo, $descricao);
	}
	public function OfflineScreenShotSave($screenShot, $titulo, $descricao)
	{
		return 'ok';
	}
	public function Load($userGuid, $comicGuid, $readOnly)
	{
		$hqTrecos = new HqTools();
		$comicData = $hqTrecos->requestIDator($comicGuid);

		$innerXml = '<?xml version="1.0"?>' .
			'<root>' .
			'<c>' . $comicData->saveData . '</c>' .
			'<a>' . $comicData->userGuid . '</a>' .
			'<t>' . $comicData->titulo . '</t>' .
			'<d>' . $comicData->descricao . '</d>' .
			'</root>';

		$cdataWrapped = '<![CDATA[' . $innerXml . ']]>';

		return new SoapVar($cdataWrapped, XSD_ANYXML);
	}
}

$options = ['uri' => 'http://tempuri.org/'];
$server = new SoapServer(null, $options);
$server->setClass('GameGatewayReimplement');
$server->handle();

?>