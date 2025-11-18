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

function encryptBytes($decryptedData) {
	$key = 217;
	$encryptedData = '';
	$length = strlen($decryptedData);
	
	for ($i = 0; $i < $length; $i++) {
		$decryptedByte = ord($decryptedData[$i]);
		$encryptedByte = ($decryptedByte + $key) & 0xFF; // Mantém no range 0-255
		$encryptedData .= chr($encryptedByte);
		$key = ($key - 1) & 0xFF; // Incrementa e mantém no range 0-255
	}
	
	return $encryptedData;
}

function appendXML(SimpleXMLElement $to, SimpleXMLElement $from) {
	$toDom = dom_import_simplexml($to);
	$fromDom = dom_import_simplexml($from);
	$toDom->appendChild($toDom->ownerDocument->importNode($fromDom, true));
}

function copyXmlElements($from, $to)
{
	foreach($from->children() as $child) {
		$newChild = $to->addChild($child->getName());
		foreach($child->attributes() as $key => $value) {
			$newChild->addAttribute($key, $value);
		}
		$newChild[0] = (string)$child;
		copyXmlElements($child, $newChild);
	}
}

function formatarData($datetime) {
	$date = date_create($datetime);
	return $date;
}
?>