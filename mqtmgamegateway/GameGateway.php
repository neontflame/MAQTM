<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";
// ok nos sabemos que isso precisa de um WSDL 
// unico problema e eu Nao Sei como sequer funciona um wsdl
// entao nos vamos fumblar bags ate conseguir

$savedComicsDir = $_SERVER['DOCUMENT_ROOT'] . '/Static/ComicsSalvas';
$screenshotsDir = $_SERVER['DOCUMENT_ROOT'] . '/Static/Screenshots';

// ok a parte de loading eu tive que deixar pro robo desgraçado fazer porque 
// eu juro por tudo que e mais sagrado eu NAO TAVA conseguindo fazer isso funcionar
// take it away robo maldito que eu odeio

// Check if this is a Load request
$input = file_get_contents('php://input');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && strpos($input, 'Load') !== false) {
    
    // Parse the SOAP request manually to get parameters
    $dom = new DOMDocument();
    $dom->loadXML($input);
    $xpath = new DOMXPath($dom);
    $xpath->registerNamespace('soap', 'http://schemas.xmlsoap.org/soap/envelope/');
    $xpath->registerNamespace('ns1', 'http://tempuri.org/');
    
    $userGuid = $xpath->evaluate('string(//ns1:userGuid)');
    $comicGuid = $xpath->evaluate('string(//ns1:comicGuid)');
    $readOnly = $xpath->evaluate('string(//ns1:readOnly)');
    
    // Your existing logic
    $hqTrecos = new HqTools();
    $comicData = $hqTrecos->requestIDator($comicGuid);
    
    // Build the EXACT XML structure that Flash expects
    $response = '<?xml version="1.0"?>
<root>
    <c>' . $comicData->saveData . '</c>
    <a>' . $comicData->userGuid . '</a>
    <t>' . $comicData->titulo . '</t>
    <d>' . $comicData->descricao . '</d>
</root>';
    
    // Send raw SOAP response with the XML as CDATA
    header('Content-Type: text/xml; charset=utf-8');
    $soapResponse = '<?xml version="1.0" encoding="UTF-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" 
               xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
               xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <soap:Body>
        <LoadResponse xmlns="http://tempuri.org/">
            <LoadResult><![CDATA[' . $response . ']]></LoadResult>
        </LoadResponse>
    </soap:Body>
</soap:Envelope>';
    
    echo $soapResponse;
    exit;
}

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
		return 'fallback';
    }
}

$options = ['uri' => 'http://tempuri.org/'];
$server = new SoapServer(null, $options);
$server->setClass('GameGatewayReimplement');
$server->handle();

?>