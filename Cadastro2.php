<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";

$tipoDPagina = "cadastro";

include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/SiteAbre.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/Header.php";
?>
<div id="master_middle">
	<div id="master_col_01" class="avatarEditar">
		<span class="avatarContentGrandeContainer">
			<img src="/imagens/blank.png" alt="Avatar" class="avatarBackground">
			<img src="/Arquivos/avatar/modelo1/Avatar_Var01_Cascao.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContent">
			<img src="/imagens/blank.png" class="avatarMoldura" title="">
		</span>
		
		Clique aqui para mudar seu avatar.
		
	</div>
	<div id="master_col_02">
		<div class="container_col_02">
			<div class="containerheader_col_02" id="cadastro" style="margin-left: 0;">
				<img class="cadastro" src="/imagens/blank.png" alt="Status" width="22px" height="20px">
				<h3>Cadastro</h3>
			</div>
			
			<form>
			<fieldset id="cadastro">
				<p>Something something texto something something.<br>
				Eu nao sei o que ta escrito na print pq ela e mt pequena
				</p>
				<input id="idAvatar" name="idAvatar" value="Var01_Cascao" style="display:none;">
				<p>
					<label>Nome:</label>
					<input name="txtNome" type="text" id="ctl00_ContentPlaceHolder1_txtNome" size="30" display="Dynamic">
				</p>

				<p>
					<label>E-mail:</label>
					<input name="txtEmail" type="text" id="ctl00_ContentPlaceHolder1_txtEmail" size="30" display="Dynamic">
				</p>
				
				<p>
					<label>Confirme e-mail:</label>
					<input name="txtEmail" type="text" id="ctl00_ContentPlaceHolder1_txtEmailConfirme" size="30" display="Dynamic">
				</p>
				
				<p>
					<label>Data de nascimento:</label>
					<input name="txtDia" type="number" id="ctl00_ContentPlaceHolder1_txtDia" size="2" display="Dynamic"> / <input name="txtMes" type="number" id="ctl00_ContentPlaceHolder1_txtMes" size="2" display="Dynamic">  / <input name="txtAno" type="number" id="ctl00_ContentPlaceHolder1_txtAno" size="4" display="Dynamic"> 
				</p>

				<p class="sexo">
					<label>Gênero:</label>
					<input name="gen" type="radio" value="0">Masculino	<input name="gen" type="radio" value="1">Feminino	<input name="gen" type="radio" value="2">Talvez mano	<input name="gen" type="radio" value="3">Opção malvada e fodida
				</p>
				<p>
					<label>Senha</label>
					<input name="txtSenha" type="password" id="ctl00_ContentPlaceHolder1_txtSenha" size="50" display="Dynamic" value="">
				</p>
				<p>
					<label>Confirme senha</label>
					<input name="txtSenha" type="password" id="ctl00_ContentPlaceHolder1_txtSenha" size="50" display="Dynamic" value="">
				</p>
				<p>
					<label>Qual é o nome de solteira da sua vó? *wink wink nudge nudge*</label>
					<input name="txtPerguntaDeSeguranca" type="text" id="ctl00_ContentPlaceHolder1_txtSeiLaMano" size="30" display="Dynamic">
				</p>
				
				<p class="termodeuso">
					<input id="cbxAceite" type="checkbox" name="ctl00$ContentPlaceHolder1$cbxAceite"><label for="ctl00_ContentPlaceHolder1_cbxAceite">Eu concordo com as regras da Máquina de Quadrinhos.</label>
				</p>
			</fieldset>
				<input type="submit" name="btnEntrar" value="Enviar" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions('btnEntrar', '', true, '', '', false, false))" id="ctl00_ContentPlaceHolder1_btnEntrar" class="bt_curto btn_enviarFaleConosco">
			</form>
			
			<div class="clearall">
			</div>
			<div class="containerbottom_col_02">
			</div>
		</div>
	</div>
	<div id="boxes" class="window" style="z-index: 9999;"></div>
	<script type="text/javascript">

		$(document).ready(function() {
			$('.avatarContentGrandeContainer').click(function() {
				$.get('/Cadastro_Ajax.aspx', function(data) {
					$('#boxes').html(data);
					$('#boxes').show();
				});
			});
		});

	</script>
</div>
<div class="clearall">
</div>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/Footer.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/SiteFecha.php";
?>