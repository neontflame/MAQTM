<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";
// at=grande
// ld=1 (nao faço ideia)
// id=Id do avatar

if ($_GET['at'] == 'grande') { ?>
	<img src="/imagens/blank.png" alt="Avatar" class="avatarBackground">
	<img src="/Arquivos/avatar/modelo1/Avatar_<?= $dicionarioDeAvatares[$_GET['id']] ?>.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContent">
	<img src="/imagens/blank.png" class="avatarMoldura" title="">
<?php
}

if ($_GET['at'] == 'thumb') { ?>
	<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
	<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_<?= $dicionarioDeAvatares[$_GET['id']] ?>_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
	<img src="/imagens/blank.png" class="avatarMolduraThumb" title="">
<?php
}
?>