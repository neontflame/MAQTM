<?php
header("content-type: application/rss+xml; charset=utf-8");
// copiado do especulamente hihi
$directories = glob($_SERVER['DOCUMENT_ROOT'] . "/Pacotes/*", GLOB_ONLYDIR);

echo '<packsData>' . "\n";
foreach ($directories as $dir) {
    echo '<pack guid="' . basename($dir) . '" name="'. basename($dir) .'" />' . "\n";
}
echo '</packsData>';
?>