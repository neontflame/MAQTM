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

	public static function atualizar($userGuid, $comicGuid, $saveData, $screenShot, $titulo, $descricao)
	{
		global $db;
		
		if ($comicGuid != null) {
			// ediçao
			$rows = $db->prepare("UPDATE hqs SET userGuid = ?, saveData = ?, titulo = ?, descricao = ? WHERE comicGuid = ?");
			$rows->bindParam(1, $userGuid);
			$rows->bindParam(2, $saveData);
			$rows->bindParam(3, $titulo);
			$rows->bindParam(4, $descricao);
			$rows->bindParam(5, $comicGuid);
			$rows->execute();
			
			$id = $comicGuid;
		} else {
			// criaçao
			$rows = $db->prepare("INSERT INTO hqs (userGuid, saveData, titulo, descricao) VALUES (?, ?, ?, ?)");
			$rows->bindParam(1, $userGuid);
			$rows->bindParam(2, $saveData);
			$rows->bindParam(3, $titulo);
			$rows->bindParam(4, $descricao);
			$rows->execute();
			
			$id = $db->lastInsertId();
		}
		
		$screenshotsDir = $_SERVER['DOCUMENT_ROOT'] . '/Arquivos/SaveGame/Screenshots';
		$fpScreensh = fopen($screenshotsDir . '/' . $id . '.png',"wb");
		fwrite($fpScreensh,base64_decode($screenShot));
		fclose($fpScreensh);
		
		return $id;
	}
	
	public static function comicMaisRecente($userGuid)
	{
		global $db;

		$rows = $db->prepare("SELECT * FROM hqs WHERE userGuid = ? ORDER BY comicGuid DESC LIMIT 1");
		$rows->bindParam(1, $userGuid);
		$rows->execute();
		$hq = $rows->fetch(PDO::FETCH_OBJ);

		if ($hq == false) {
			return null;
		}

		return $hq;
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


// comentario trecos
class ComentarioTools {
	public static function requestIDator($comentarioGuid)
	{
		global $db;

		$rows = $db->prepare("SELECT * FROM comentarios WHERE comentarioGuid = ?");
		$rows->bindParam(1, $comentarioGuid);
		$rows->execute();
		$comentaro = $rows->fetch(PDO::FETCH_OBJ);

		if ($comentaro == false) {
			return null;
		}

		return $comentaro;
	}

	public static function comentariosDeUmaHq($comicGuid, $pagina = null, $perPage = 10)
	{
		global $comentarioPaginas;
		$comentarios = [];
		$comentariosMasChique = [];
		
		global $db;
		
		if ($pagina != null) {
			$rows = $db->prepare("SELECT COUNT(*) as count FROM comentarios WHERE comicGuid = ?");
			$rows->bindParam(1, $comicGuid);
			$rows->execute();
			$count = $rows->fetch(PDO::FETCH_OBJ)->count;
	
			$comentarioPaginas = ceil($count / $perPage);
			$offset = ($pagina - 1) * $perPage;
	
			$rows = $db->prepare("SELECT * FROM comentarios WHERE comicGuid = ? LIMIT ? OFFSET ?");
			$rows->bindParam(1, $comicGuid);
			$rows->bindParam(2, $perPage, PDO::PARAM_INT);
			$rows->bindParam(3, $offset, PDO::PARAM_INT);
			$rows->execute();
		} else {
			$rows = $db->prepare("SELECT * FROM comentarios WHERE comicGuid = ?");
			$rows->bindParam(1, $comicGuid);
			$rows->execute();
		}
		
		while ($comcomic = $rows->fetch(PDO::FETCH_OBJ)) {
			array_push($comentariosMasChique, $comcomic);
		}
		
		foreach ($comentariosMasChique as $commy) {
			array_push($comentarios, $commy->comentarioGuid);
		}

		return $comentarios;
	}
}

?>