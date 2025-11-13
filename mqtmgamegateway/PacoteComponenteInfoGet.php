<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/MQTMUtils.php";
// Source - https://stackoverflow.com/a
// Posted by Josh Davis, modified by community. See post 'Timeline' for change history
// Retrieved 2025-11-12, License - CC BY-SA 2.5

function fix_latin1_mangled_with_utf8_maybe_hopefully_most_of_the_time($str)
{
    return preg_replace_callback('#[\\xA1-\\xFF](?![\\x80-\\xBF]{2,})#', 'utf8_encode_callback', $str);
}

function utf8_encode_callback($m)
{
    return utf8_encode($m[0]);
}

header("content-type: application/rss+xml; charset=iso-8859-1");
	
$rootXML = new SimpleXMLElement('<defaultPackData/>');

$osPacotes = explode(',', $_GET['guid']);
array_unshift($osPacotes, '_Base');

foreach ($osPacotes as $pacote) {
$packPath = $_SERVER['DOCUMENT_ROOT'] . "/Pacotes/" . $pacote;
	// Lista todos os arquivos do diretório
	$files = scandir($packPath);
	foreach ($files as $file) {
		if (pathinfo($file, PATHINFO_EXTENSION) === 'mcc') {
			$filePath = $packPath . '/' . $file;
			
			// Lê e descriptografa o arquivo
			$encryptedContent = file_get_contents($filePath);
			$decryptedContent = utf8_encode(decryptBytes($encryptedContent));
			
			try {
				// Parseia o XML descriptografado
				$componentXML = new SimpleXMLElement($decryptedContent);
				
				// Adiciona metadados (como na função ActionScript)
				$componentXML->addAttribute('guid', pathinfo($file, PATHINFO_FILENAME));
				$componentXML->addAttribute('packFolder', basename($packPath));
						
				// Calcula caminho para o arquivo .mci
				$mciPath = substr($filePath, 0, -4) . '.mci'; // Remove .mcc e adiciona .mci
				$componentXML->addAttribute('fullPath', $mciPath);
						
				// Adiciona ao XML raiz
				appendXML($rootXML, $componentXML);
						
			} catch (Exception $e) {
				error_log("Erro ao parsear XML do arquivo $filePath: " . $e->getMessage());
			}
		}
	}
}

echo utf8_decode($rootXML->asXML());
?>