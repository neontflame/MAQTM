<?php 
// Funçoes Insanas obrigado robo maldito que eu odeio um pouco menos mas ainda odeio
function decryptBytes($encryptedData) {
	$key = 217;
	$decryptedData = '';
	$length = strlen($encryptedData);
	
	for ($i = 0; $i < $length; $i++) {
		$encryptedByte = ord($encryptedData[$i]);
		$decryptedByte = ($encryptedByte - $key) & 0xFF; // Mantém no range 0-255
		$decryptedData .= chr($decryptedByte);
		$key = ($key + 1) & 0xFF; // Incrementa e mantém no range 0-255
	}
	
	return $decryptedData;
}

function appendXML(SimpleXMLElement $to, SimpleXMLElement $from) {
	$toDom = dom_import_simplexml($to);
	$fromDom = dom_import_simplexml($from);
	$toDom->appendChild($toDom->ownerDocument->importNode($fromDom, true));
}
?>