<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/MQTMUtils.php";
header('Content-Type: application/x-shockwave-flash');

$startDirectory = $_SERVER['DOCUMENT_ROOT'] . "/Pacotes/"; // Replace with the actual path
$targetFileName = $_GET['guid'] . '.mci'; // Replace with the name of the file you are looking for

try {
    // Create a RecursiveDirectoryIterator for the starting directory
    $directoryIterator = new RecursiveDirectoryIterator($startDirectory, RecursiveDirectoryIterator::SKIP_DOTS);

    // Create a RecursiveIteratorIterator to flatten the directory structure
    $iterator = new RecursiveIteratorIterator($directoryIterator, RecursiveIteratorIterator::SELF_FIRST);

    foreach ($iterator as $file) {
        // Check if the current item is a file and its name matches the target
        if ($file->isFile() && $file->getFilename() === $targetFileName) {
            echo file_get_contents($file->getPathname());
            // You can add more logic here, like breaking the loop if only one instance is needed
			break;
        }
    }
} catch (UnexpectedValueException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
