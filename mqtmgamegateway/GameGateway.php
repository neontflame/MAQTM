<?php
// ok nos sabemos que isso precisa de um WSDL 
// unico problema e eu Nao Sei como sequer funciona um wsdl
// entao nos vamos fumblar bags ate conseguir

$savedComicsDir = $_SERVER['DOCUMENT_ROOT'] . '/Static/ComicsSalvas';
$screenshotsDir = $_SERVER['DOCUMENT_ROOT'] . '/Static/Screenshots';

class GameGatewayReimplement
{
    public function Save($userGuid, $comicGuid, $saveData, $screenShot, $titulo, $descricao)
    {
        // todo: fazer o treco
    }
    public function OfflineScreenShotSave($screenShot, $titulo, $descricao)
    {
        // todo: fazer o treco
    }
    public function Load($userGuid, $comicGuid, $readOnly)
    {
        // todo: fazer o treco
    }
}

$options = ['uri' => 'http://tempuri.org/'];
$server = new SoapServer(null, $options);
$server->setClass('GameGatewayReimplement');
$server->handle();

?>