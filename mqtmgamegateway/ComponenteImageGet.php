<?php
header('Content-Type: application/octet-stream');

$dir = $_SERVER['DOCUMENT_ROOT'] . "/Pacotes/";
// $di = new RecursiveDirectoryIterator($dir);
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
// Get all files and folders within the working dir

foreach ($iterator as $filename => $file) {
	$path = pathinfo($filename);
	if ($path['basename'] == $_GET['guid'] . '.mci') {
		echo file_get_contents($path['dirname'] . '/' . $path['basename']);
		break;
	}
} 
?>