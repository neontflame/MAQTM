<?php
// trecos pegos do especulamente pq boa parte do heavy lifting ja foi feito la !
$db = new PDO("mysql:host=" . $config['DB_HOST'] . ";dbname=" . $config['DB_NAME'], $config['DB_USER'], $config['DB_PASS']);

// hq trecos
class HqTools {
	public static function requestIDator($comicGuid)
	{
		global $db;

		$rows = $db->prepare("SELECT * FROM hqs WHERE comicGuid = ?");
		$rows->bindParam(1, $comicGuid);
		$rows->execute();
		$hq = $rows->fetch(PDO::FETCH_OBJ);

		if ($hq == false) {
			return null;
		}

		return $hq;
	}

	public static function criar($userGuid, $saveData, $screenShot, $titulo, $descricao)
	{
		global $db;
		
		$rows = $db->prepare("INSERT INTO hqs (userGuid, saveData, titulo, descricao) VALUES (?, ?, ?, ?)");
		$rows->bindParam(1, $userGuid);
		$rows->bindParam(2, $saveData);
		$rows->bindParam(3, $titulo);
		$rows->bindParam(4, $descricao);
		$rows->execute();
		
		$id = $db->lastInsertId();
		
		$screenshotsDir = $_SERVER['DOCUMENT_ROOT'] . '/Arquivos/SaveGame/Screenshots';
		$fpScreensh = fopen($screenshotsDir . '/' . $id . '.png',"wb");
		fwrite($fpScreensh,base64_decode($screenShot));
		fclose($fpScreensh);
		
		return $id;
	}
	
	public static function editar($userGuid, $comicGuid, $saveData, $screenShot, $titulo, $descricao)
	{
		global $db;
		
		$rows = $db->prepare("UPDATE hqs SET userGuid = ?, saveData = ?, titulo = ?, descricao = ? WHERE comicGuid = ?");
		$rows->bindParam(1, $userGuid);
		$rows->bindParam(2, $saveData);
		$rows->bindParam(3, $titulo);
		$rows->bindParam(4, $descricao);
		$rows->bindParam(5, $comicGuid);
		$rows->execute();
		
		$id = $db->lastInsertId();
		
		$screenshotsDir = $_SERVER['DOCUMENT_ROOT'] . '/Arquivos/SaveGame/Screenshots';
		$fpScreensh = fopen($screenshotsDir . '/' . $id . '.png',"wb");
		fwrite($fpScreensh,base64_decode($screenShot));
		fclose($fpScreensh);
		
		return $id;
	}
}

// user trecos
class UsuarioTools {
	public static function requestIDator($userGuid)
	{
		global $db;

		$rows = $db->prepare("SELECT * FROM usuarios WHERE userGuid = ?");
		$rows->bindParam(1, $userGuid);
		$rows->execute();
		$user = $rows->fetch(PDO::FETCH_OBJ);

		if ($user == false) {
			return null;
		}

		return $user;
	}
	
	public static function criar($nome, $email, $senha, $pfp)
	{
		global $db;
		
		$rows = $db->prepare("INSERT INTO usuarios (nome, email, senha, pfp) VALUES (?, ?, ?, ?)");
		$rows->bindParam(1, $nome);
		$rows->bindParam(2, $email);
		$hashword = password_hash($senha, PASSWORD_DEFAULT);
		$rows->bindParam(3, $hashword);
		$rows->bindParam(4, $pfp);
		$rows->execute();
		
		$id = $db->lastInsertId();
		return $id;
	}
}

?>