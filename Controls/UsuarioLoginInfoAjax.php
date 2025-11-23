<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";
?>
<div id="login_user">
	<?php if(isset($usuario)) {	?>
	<p> Olá <a href="/AutorPerfil.aspx?idUsuario=<?= $usuario->userGuid ?>" id="A1">"<?= $usuario->apelido ?>"</a>, seja bem vindo! </p>
	<p> Para sair <a href="/Privado/Logout.aspx" id="A2">clique aqui</a>. </p>
	<?php } else { ?>
	<p> Se já for cadastrado, faça seu <a href="/Privado/Login.aspx?urlretorno=" id="A1">login</a>! </p>
	<p> Se não for, cadastre-se <a href="/Cadastro.aspx" id="A2"> aqui</a>. </p>
	<?php }?>
	<p class="login_pacote" id="P1">
		<a href="/Privado/EditorQuadrinhos.aspx" id="A3"> <strong>Já criou sua história hoje?</strong></a>
	</p>
</div>