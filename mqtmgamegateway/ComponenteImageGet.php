<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";

header('Content-Type: application/x-shockwave-flash');

$startDirectory = $caminhoPacotes;
$targetFileName = $_GET['guid'] . '.mci';
$targetSWFFileName = $_GET['guid'] . '.swf';

// shoutout praquele robo maldito que eu odeio
try {
    $directoryIterator = new RecursiveDirectoryIterator($startDirectory, RecursiveDirectoryIterator::SKIP_DOTS);

    $iterator = new RecursiveIteratorIterator($directoryIterator, RecursiveIteratorIterator::SELF_FIRST);

    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getFilename() === $targetFileName) {
            echo file_get_contents($file->getPathname());
			break;
        }

        if ($file->isFile() && $file->getFilename() === $targetSWFFileName) {
            echo encryptBytes(file_get_contents($file->getPathname())); // jank momento
			break;
        }
    }
} catch (UnexpectedValueException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
