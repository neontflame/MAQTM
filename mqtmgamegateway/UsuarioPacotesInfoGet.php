<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";
header("content-type: application/xml; charset=utf-8");
// copiado do especulamente hihi
// na verdade nao e mais nao eu menti pra voces
$directories = glob($caminhoPacotes . "*", GLOB_ONLYDIR);

$blacklistDePacotes = ['_Base'];
echo '<packsData>' . "\n";
foreach ($directories as $dir) {
	// isso provavelmente beneficiaria bastante de uma database mas Pshhhhhhhhhhh depois eu vejo isso
	$nome = 'Pacote Temático - ' . basename($dir);
	
	if (basename($dir) == 'Basico') {
		$nome = 'Pacote Básico';
	}
	
	if (basename($dir) == 'Queixolas') {
		$nome = 'queioxnes';
	}
	
	if (!in_array(basename($dir), $blacklistDePacotes)) {
		echo '<pack guid="' . basename($dir) . '">' . 
				'<title>'. $nome .'</title>' .
				'<validity>-</validity></pack>' . 
				"\n";
	}
}
echo '</packsData>';
?>