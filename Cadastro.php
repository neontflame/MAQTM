<?php 
if (isset($_POST['ctl00$ContentPlaceHolder1$cbxAceite'])) {
	header("Location: " . '/Cadastro2.aspx');
	die();
}

$tipoDPagina = "";

include $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";

include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/SiteAbre.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/Header.php";

?>
<div id="master_middle">
	<div id="master_col_02" class="cadastroDados">
		<div id="ctl00_ContentPlaceHolder1_panelAceite">
			<div class="container_col_02" style="width: 956px;">
				<div class="containerheader_col_02" id="cadastro" style="margin-left: 0;">
					<img class="cadastro" src="/imagens/blank.png" alt="Status" width="22px" height="20px">
					<h3>Cadastro</h3>
				</div>               
			<h5>Regras da Máquina de Quadrinhos</h5>
			<div class="precadastro_img">
				<img src="/imagens/PreCadastro_01.png" alt="">
				<img src="/imagens/PreCadastro_02.png" alt="">
				<img src="/imagens/PreCadastro_03.png" alt="">
				<img src="/imagens/PreCadastro_04.png" alt="">
			</div>
			<fieldset id="cadastro" class="termoUso">
				<p class="termodeuso">
					<input id="ctl00_ContentPlaceHolder1_cbxAceite" type="checkbox" name="ctl00$ContentPlaceHolder1$cbxAceite"><label for="ctl00_ContentPlaceHolder1_cbxAceite">Eu concordo com as regras da Máquina de Quadrinhos.</label>
				</p>
				<input type="submit" name="ctl00$ContentPlaceHolder1$btAceite" value="Continuar" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btAceite&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_btAceite" class="bt_curto">
			</fieldset>

			</div>
			<div class="clearall">
			</div>
			<div class="containerbottom_col_02">
			</div>
		</div>
	</div>
</div>
<div class="clearall">
</div>
<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/Footer.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/SiteFecha.php";
?>