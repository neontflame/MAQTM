<?php
// trecos pegos do especulamente pq boa parte do heavy lifting ja foi feito la !
$db = new PDO("mysql:host=" . $config['DB_HOST'] . ";dbname=" . $config['DB_NAME'], $config['DB_USER'], $config['DB_PASS']);

// hq trecos
class HqTools {
	public function requestIDator($id)
	{
		global $db;

		$rows = $db->prepare("SELECT * FROM hqs WHERE comicGuid = ?");
		$rows->bindParam(1, $id);
		$rows->execute();
		$hq = $rows->fetch(PDO::FETCH_OBJ);

		if ($hq == false) {
			return null;
		}

		return $hq;
	}

	public function criar($userGuid, $saveData, $screenShot, $titulo, $descricao)
	{
		global $db;
		
		$rows = $db->prepare("INSERT INTO hqs (userGuid, saveData, titulo, descricao) VALUES (?, ?, ?, ?)");
		$rows->bindParam(1, $userGuid);
		$rows->bindParam(2, $saveData);
		$rows->bindParam(3, $titulo);
		$rows->bindParam(4, $descricao);
		$rows->execute();
		
		$id = $db->lastInsertId();
		
		$screenshotsDir = $_SERVER['DOCUMENT_ROOT'] . '/Static/Screenshots';
		$fpScreensh = fopen($screenshotsDir . '/' . $id . '.png',"wb");
		fwrite($fpScreensh,base64_decode($screenShot));
		fclose($fpScreensh);
		
		return $id;
	}
}

?>