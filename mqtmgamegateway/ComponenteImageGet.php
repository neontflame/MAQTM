<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/MQTMUtils.php";
header('Content-Type: application/x-shockwave-flash');

$startDirectory = $_SERVER['DOCUMENT_ROOT'] . "/Pacotes/";
$targetFileName = $_GET['guid'] . '.mci';

// shoutout praquele robo maldito que eu odeio
try {
    $directoryIterator = new RecursiveDirectoryIterator($startDirectory, RecursiveDirectoryIterator::SKIP_DOTS);

    $iterator = new RecursiveIteratorIterator($directoryIterator, RecursiveIteratorIterator::SELF_FIRST);

    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getFilename() === $targetFileName) {
            echo file_get_contents($file->getPathname());
			break;
        }
    }
} catch (UnexpectedValueException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
