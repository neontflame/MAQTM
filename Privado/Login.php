<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/SiteAbre.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/Header.php";
?>
	<div id="master_middle">
		<div id="master_col_01">
			<div id="masterpromo_col_01">

					<embed src="/imagens/Col1_04_v2.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="140" height="200" name="franja_col1" align="middle" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash">
			</div>
		</div>
			<div id="master_col_02">
				<div class="container_col_02">
					<div class="containerheader_col_02">
						<img class="login" src="/imagens/blank.png" alt="Status" width="22px" height="20px">
						<h3>Log in</h3>
					</div>
					<fieldset id="login">
							<p>
								<label>
									Seu E-mail</label>
								<input name="ctl00$ContentPlaceHolder1$ucusuariologin$EmailTextBox" type="text" id="ctl00_ContentPlaceHolder1_ucusuariologin_EmailTextBox" tabindex="1" class="email"><input type="submit" name="ctl00$ContentPlaceHolder1$ucusuariologin$btnLembrarSenha" value="Lembrar Senha!" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$ucusuariologin$btnLembrarSenha&quot;, &quot;&quot;, true, &quot;LembrarSenha&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_ucusuariologin_btnLembrarSenha" tabindex="5" class="bt_curto_azul"></p> 
							<p>
								<label>
									Senha</label>
								<input name="ctl00$ContentPlaceHolder1$ucusuariologin$SenhaTextBox" type="password" id="ctl00_ContentPlaceHolder1_ucusuariologin_SenhaTextBox" tabindex="2" class="senha">
								</p>
							<p>
								<span css=""><input id="ctl00_ContentPlaceHolder1_ucusuariologin_cbxLoginLembrar" type="checkbox" name="ctl00$ContentPlaceHolder1$ucusuariologin$cbxLoginLembrar" tabindex="3"><label for="ctl00_ContentPlaceHolder1_ucusuariologin_cbxLoginLembrar"> Permanecer logado.</label></span>		
							</p>
							<div>
							<input type="submit" name="ctl00$ContentPlaceHolder1$ucusuariologin$btnEntrar" value="Entrar" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$ucusuariologin$btnEntrar&quot;, &quot;&quot;, true, &quot;Login&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_ucusuariologin_btnEntrar" tabindex="4" class="bt_curto">
							</div>
							<p>Não é cadastrado? <a href="/Cadastro.aspx" id="ctl00_ContentPlaceHolder1_ucusuariologin_A1" tabindex="6">Cadastre-se agora</a> !
							</p>
					</fieldset>
					<div class="containerbottom_col_02">
						<div class="clearall">
						</div>
					</div>
				</div>
			</div>
			<div class="clearall">
			</div>
		
	</div>
	<div class="clearall">
	</div>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/Footer.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/SiteFecha.php";
?>