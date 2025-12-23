<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";

$tipoDPagina = 'leitor';

$id = $_GET['idHistoria'];
$historiaInfo = HqTools::requestIDator($id);
$autorInfo = UsuarioTools::requestIDator($historiaInfo->userGuid);

$meta['titulo'] = $historiaInfo->titulo . ' - Máquina Aberta de Quadrinhos da Turma da Mônica';

include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/SiteAbre.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/Header.php";

$comentarioPaginas = 1;
$comentarioPaginaAtual = $_GET['pagina'] ?? 1;

$minhaComicMaisRecente = HqTools::comicMaisRecente($usuario->userGuid);

$comentos = ComentarioTools::comentariosDeUmaHq($id);
?><div id="master_middle">
	<div id="master_col_02" style="width: 740px;">
		<div class="container_col_02" id="leitor">
			<!--[if IE]>
			<style type="text/css">
				@font-face {font-family: 'KOMIKAX'; src: url('font/KOMIKAX_-webfont.eot');}
			</style>
			<![endif]-->
			<!--[if IE 7]>
			<style type="text/css">
				div#leitor.container_col_02 h2 {font-size: 1.25em; margin-top: -35px;}
			</style>
			<![endif]-->
			<h2 class="shadow"><span id="ctl00_ContentPlaceHolder1_lblTituloShadow"><?= $historiaInfo->titulo ?></span></h2>
			<h2><span id="ctl00_ContentPlaceHolder1_lblTitulo"><?= $historiaInfo->titulo ?></span></h2>
			<div id="ctl00_ContentPlaceHolder1_upEditorVisualizar">
				<div id="leitorswf">
					<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="MQTM_Main" name="MQTM_Main" width="640" height="400" codebase="https://web.archive.org/web/20111229015108oe_/http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
						<param name="movie" value="/Editor/MQTM_Mainv4_9.swf">
						<param name="quality" value="high">
						<param name="wmode" value="transparent">
						<param name="bgcolor" value="#ffffff">
						<param name="FlashVars" value="spgf=0&alt=&fullScreenDisplay=0&iv=1&userGuid=&comicGuid=<?= $historiaInfo->comicGuid ?>&modeStartup=3">
						<param name="allowScriptAccess" value="sameDomain">
						<embed id="MQTM_MainEmbed" name="MQTM_MainEmbed" src="/Editor/MQTM_Mainv4_9.swf" quality="high" bgcolor="#ffffff" width="640" height="400" align="middle" flashvars="spgf=0&alt=&fullScreenDisplay=0&iv=1&userGuid=&comicGuid=<?= $historiaInfo->comicGuid ?>&modeStartup=3"" play="true" loop="false" wmode="transparent" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer">
					</object>
				</div>
			</div>
			<div id="controle_historia">
				<span>Publicada em
				<span id="ctl00_ContentPlaceHolder1_lblDataPublicacao"><?= date_format(formatarData($historiaInfo->data), "d/m/Y") ?></span>
				</span>
				<span id="ctl00_ContentPlaceHolder1_upHistoriaReporte">
				<span class="reportar_button">
				<a onclick="return confirm(&#39;Você precisa estar logado. Clique em Ok para continuar.&#39;);" id="ctl00_ContentPlaceHolder1_btnHistoriaReportar" class="reportar_hist" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$btnHistoriaReportar&#39;,&#39;&#39;)">
				<img src="/imagens/blank.png">
				</a>										
				</span>
				</span>
			</div>
			<div id="ctl00_ContentPlaceHolder1_upgHistoriaReportar" style="display:none;">
				<span class="reportar_button">	
				<span class="processando">Aguarde...</span>
				</span>
			</div>
			<div class="clearall"></div>
			<div id="botoes_sociais">
				<a name="fb_share" type="icon" class="botao_facebook" href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fweb.archive.org%2Fweb%2F20111229015108%2Fhttp%3A%2F%2Fwww.maquinadequadrinhos.com.br%2FHistoriaVisualizar.aspx%3FidHistoria%3D1145961&amp;t=1955-2011%20-%20M%C3%A1quina%20de%20Quadrinhos%20da%20Turma%20da%20M%C3%B4nica&amp;src=sp" style="text-decoration: none;"><span class="FBConnectButton_Simple"><span class="FBConnectButton_Text_Simple">﻿</span></span></a>
				<a href="http://www.blogger.com/blog_this.pyra?t&amp;u=http%3a%2f%2fwww.maquinadequadrinhos.com.br%2fHistoriaVisualizar.aspx%3fidHistoria%3d1145961&amp;n=1955-2011+-+M%c3%a1quina+de+Quadrinhos+da+Turma+da+M%c3%b4nica&amp;pli=1" target="_blank" title="Compartilhar no Blogger !" class="blogger"><img alt="Compartilhar no Blogger !" src="http://1.bp.blogspot.com/_YUvD9j84Cik/TBvMqnnrVtI/AAAAAAAAAG8/O65EnRFSHFk/blogger.gif" style="width:16px; height:16px; padding:0; border:0; vertical-align:middle;"></a> 
				<script type="text/javascript" src="/Javascript/FB.Share"></script>
				<script type="text/javascript" src="/Javascript/widgets.js"></script>
				<script type="text/javascript" src="/Javascript/jsapi"></script>	
				<div id="enviarEmail_amigo">
					<span class="enviar_botao">
					<a id="ctl00_ContentPlaceHolder1_lnkEnviarParaAmigoFormularioExibir" class="email_btn" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lnkEnviarParaAmigoFormularioExibir&#39;,&#39;&#39;)">
					<img src="/imagens/blank.png" title="enviar para um amigo!" alt="enviar para um amigo!">
					</a>
					</span>
				</div>
			</div>
			<div id="status_historia">
				<div class="estrelas">
					<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_Nota1" class="quadrinhos_fav_full" width="17" height="17"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_Nota2" class="quadrinhos_fav_full" width="17" height="17"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_Nota3" class="quadrinhos_fav_full" width="17" height="17"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_Nota4" class="quadrinhos_fav_full" width="17" height="17"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_Nota5" class="quadrinhos_fav_half" width="17" height="17">
				</div>
				<span class="quadrinhos_visualizacao">
				<img src="/imagens/blank.png" alt="visualizações" title="visualizações">
				<em>
				<span id="ctl00_ContentPlaceHolder1_lblVisualizacaoQtd"><?= $historiaInfo->views ?></span>
				</em>
				</span>
			</div>
			<div id="ctl00_ContentPlaceHolder1_upFormEnviarParaAmigo"></div>
			<div id="ctl00_ContentPlaceHolder1_upgAmigo" style="display:none;">
				<span class="processando">Por favor, aguarde...</span>
			</div>
			<div id="ctl00_ContentPlaceHolder1_upFormEnviarParaAmigoLogadoAviso"></div>
			<div id="ctl00_ContentPlaceHolder1_upFormEnviarParaAmigoEmailSucesso">
			</div>
			<span class="quadrinhos_autor">
				<h5>Autor</h5>
				<a href="/AutorPerfil.aspx?idUsuario=<?= $autorInfo->userGuid ?>&bn=1">
				<span id="ctl00_ContentPlaceHolder1_lblAutorNome"><?= $autorInfo->apelido ?></span>
				</a>
			</span>
			<br>
			<span class="quadrinhos_descricao">
				<h5>Descrição</h5>
				<span id="ctl00_ContentPlaceHolder1_lblQuadrinhoDescricao"><?= $historiaInfo->descricao ?></span>
			</span>
			<br>
			<div class="clearall">
			</div>
		</div>
		<!-- Tag de publicidade Google  - Superbanner (728x90 aparentemente) -->
		<div class="publicidade_col02_superbanner noclearall">
			<img src="/Publicidade/Publi_BannerSuper_Top.png" alt="Publicidade" class="top">
		</div>
		<div class="container_col_02">
			<div class="containerheader_col_02">
				<img class="comentarios" src="/imagens/blank.png" alt="Comentários" width="22px" height="20px">
				<h3>Comentários</h3>
				<span class="quadrinhos_comentarios">
				<img src="/imagens/blank.png" alt="comentários" title="comentários">
				<em><span id="ctl00_ContentPlaceHolder1_lblComentariosQtd"><?= count(ComentarioTools::comentariosDeUmaHq($id)) ?></span></em>
				</span>
			</div>
			<div class="status_comentario">
				<?php if ($usuario == null) : ?>
				<span>Deseja comentar?</span><br><br>
				<center>
					<p><a href="/Cadastro.aspx?r=1">Cadastre-se</a> na Máquina de Quadrinhos gratuitamente ou faça o <a id="ctl00_ContentPlaceHolder1_ucComentarioInsercao_lkBtnLogin" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$ucComentarioInsercao$lkBtnLogin&#39;,&#39;&#39;)">login</a>, caso você já seja um membro.</p>
				</center>
				<?php endif; ?>
			</div>
			<div id="ctl00_ContentPlaceHolder1_ucComentarioInsercao_upHistoriaComentar">
				<!-- Very Very Important!! -->
				<!-- recriaçao de comentarios pq eu nao achei Nenhuma print a respeito -->
				<!-- baseado em memorias e suposiçoes e o css -->
				<?php if ($usuario != null) : ?>
				<div class="comentario comentarioInicio">
					<a href="/AutorPerfil.aspx?idUsuario=<?= $usuario->userGuid ?>&bn=1" class="lnkTooltip portraitComentario">
						<span class="usuarioComentario">
						<?= $usuario->apelido ?>
						</span>
						<span class="avatarContentThumbContainer">
							<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
							<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_<?= $usuario->pfp ?>_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
							<img src="/imagens/blank.png" class="avatarMolduraThumb" title="<?= $usuario->apelido ?>" alt="<?= $usuario->apelido ?>">
						</span>
					</a>
					<!-- colocando isso aqui so pra ter certeza -->
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_divTooltip" class="tooltip" style="display: none; position: relative; z-index: 2;">
						<div class="dialog">
							<div class="content">
								<div class="t">
								</div>
								<p>
									Veja
									minha última história: 
								</p>
								<a class="imageFloat" href="/HistoriaVisualizar.aspx?idHistoria=<?= $minhaComicMaisRecente->comicGuid ?>">
									<img id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_imgHistoria" ant="<?= $minhaComicMaisRecente->titulo ?>" src="/Arquivos/SaveGame/Screenshots/<?= $minhaComicMaisRecente->comicGuid ?>.png" border="0">
									<h3>
									<?= $minhaComicMaisRecente->titulo ?>
									</h3>
								</a>
							</div>
							<div class="b">
								<div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- this is how we make comentario -->
					<textarea class="novocomentario" style="width: 587px;"></textarea>
					<div class="interactionBox">
						<p><span class="caracteres_Qtd">500</span> caracteres restantes</p>
						<a id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_btnComentarioComentarNaHistoria" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl00$btnComentarioComentarNaHistoria','')"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_imgComentarDefaultHistoria" class="comentarDefault" alt="Comentar!" title="Comentar!"></a>
					</div>
				</div>
				<?php else : ?>
				<!-- ah espera vc nn ta logado lol -->
				<?php endif; ?>
				<!-- end recriaçao de comentarios -->
			</div>
			<a name="comentario"></a>
			<div class="status_comentario">
				<img src="/imagens/blank.png" alt="Comentários" width="12px" height="12px">
				<span>Comentários:</span>
			</div>
			<div class="status_comentario">
				<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_upHistoriaComentarios">
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_upLidoNaoLidoTodos">
					</div>
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_upgLidoNaoLidoTodos" style="display:none;">
						<span class="processando processandoMover">Processando...</span>
					</div>
					<div class="clearall">
					</div>
					<!-- aqui vao comentarios -->
				<?php 
					foreach ($comentos as $comment) {
						RenderizadoresMisc::comentario($comment);
					}
				?>
				</div>
				<div class="clearall">
				</div>
			</div>
			<div class="clearall"></div>
			<div class="containerbottom_col_02"></div>
			<div class="clearall"></div>
			<div class="clearall"></div>
			<?php if ($comentarioPaginas > 1) : ?>
			<div id="quadrinhos_paginacao">
				<span>
				<?php if ($comentarioPaginaAtual > 1) : ?>
				<a href="/HistoriaVisualizar.aspx?pagina=1&idHistoria=<?= $id ?>" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_ucPaginacao_lnkAnteriorSalto">
					<img id="quadrinhos_paginacao_primeira" src="/imagens/blank.png" width="13px" height="15px">
				</a> 
				
				<a href="/HistoriaVisualizar.aspx?pagina=<?= $comentarioPaginaAtual - 1 ?>&idHistoria=<?= $id ?>" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_ucPaginacao_lnkAnterior">
					<img id="quadrinhos_paginacao_retrocede" src="/imagens/blank.png" width="19px" height="16px">
				</a>
				<?php endif; ?>
				
				<?php for ($pag = 1; $pag <= $comentarioPaginas; $pag += 1) { 
					if ($pag == $comentarioPaginaAtual) { ?>
						<em><?= $pag ?></em>
					<?php } else { ?>
						<a href="/HistoriaVisualizar.aspx?pagina=<?= $pag ?>&idHistoria=<?= $id ?>" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_ucPaginacao_lnkBAnchor">2</a>
				<?php } 
				}?>
				</span>
				<?php if ($comentarioPaginaAtual != $comentarioPaginas) : ?>
				<a href="/HistoriaVisualizar.aspx?pagina=<?= $comentarioPaginaAtual + 1 ?>&idHistoria=<?= $id ?>" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_ucPaginacao_lnkProxima">
					<img id="quadrinhos_paginacao_avanca" src="/imagens/blank.png" width="13px" height="15px">
				</a> 
				
				<a href="/HistoriaVisualizar.aspx?pagina=<?= $comentarioPaginas ?>&idHistoria=<?= $id ?>" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_ucPaginacao_lnkProximaSalto">
					<img id="quadrinhos_paginacao_ultima" src="/imagens/blank.png" width="19px" height="16px">
				</a>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div class="clearall"></div>
			<div class="clearall"></div>
			<script language="javascript" type="text/javascript">
				jQuery(document).ready(function() {
					//comentarios jquery
				$("body#ctl00_leitor .lnkTooltip").tooltip({ offset: [5, -10], relative: "true", position: "center right", predelay: '500', delay: '500', effect: 'slide', opacity: 1 });
					$("body#ctl00_leitor .lnkTooltip").click(function(eventObject) {
						location.href = eventObject.currentTarget.href;
					});
					$("body#ctl00_jogador .lnkTooltip").tooltip({ offset: [5, -10], relative: "true", position: "center right", predelay: '500', delay: '500', effect: 'slide', opacity: 1 });
					$("body#ctl00_jogador .lnkTooltip").click(function(eventObject) {
						location.href = eventObject.currentTarget.href;
					});
				
					$('.hoverAction').css("opacity", "0");
					$('.comentario').hover(function() {
						$('.hoverAction', this).animate({ opacity: 1 }, 200);
					}, function() {
						$('.hoverAction', this).animate({ opacity: 0 }, 200);
					});
				
				});
				
			</script>
			<div class="clearall">
			</div>
			<div class="containerbottom_col_02">
			</div>
		</div>
	</div>
	<div id="master_col_03">
		<input name="ctl00$ContentPlaceHolder1$ucBtnCriarHistoria$button" type="button" id="ctl00_ContentPlaceHolder1_ucBtnCriarHistoria_button" class="bt_longo" value="Criar história" onclick="location.href=&#39;/Privado/EditorQuadrinhos.aspx&#39;">
		<a href="/Tutorial/Tutorial_03.aspx" id="ctl00_ContentPlaceHolder1_ucBtnCriarHistoria_lkAprendaCriarHistoria" class="botao_ir">Aprenda a criar histórias!</a>
		<br>
		<br>
		<br>
		<div class="container_col_03">
			<div class="menuDicas">
				<img class="dicasTop" src="/imagens/monitor_menuDicas_top.png" alt="Dicas da MQTM">
				<div class="dicasFundo">
					<div id="dicasDiversas" style="display: block;">1) 1/12 - <b>Sempre que ler uma história, não deixe de dar a sua opinião votando</b>. O seu voto tem o poder de fazer com que a Máquina de Quadrinhos da Turma da Mônica se torne uma fonte de histórias divertidas e educativas, além de incentivar o autor a criar mais histórias e melhorar.<a href="#" id="lnkDicaProxima">Próxima</a> </div>
				</div>
				<img src="/imagens/monitor_menuDicas_bottom.png" alt="Dicas da MQTM">
			</div>
			<div class="clearall">
			</div>
			<div class="containerbottom_col_03">
			</div>
		</div>
		<div id="ctl00_ContentPlaceHolder1_upVotacao">
			<div class="container_col_03">
				<div class="containerheader_col_03">
					<img class="voto_entrar" src="/imagens/blank.png" alt="Status" width="22px" height="20px">
					<h3>
						Quer dar seu voto?
					</h3>
				</div>
				<div class="status_comentario">
					<center>
						<p><a href="/Cadastro.aspx?r=1">Cadastre-se</a> ou faça o <a id="ctl00_ContentPlaceHolder1_lkBtnLogin3" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lkBtnLogin3&#39;,&#39;&#39;)">login</a> caso você já seja um membro.</p>
					</center>
				</div>
				<div class="containerbottom_col_03"></div>
			</div>
			<!-- Tag de publicidade Google  - SmallSquare -->
			<div class="publicidade_col03_smallsquare noclearall">
				<img src="/Publicidade/Publi_BannerSmallSquare_Top.png" alt="Publicidade" class="top">
			</div>
			<div class="container_col_03">
				<div class="containerheader_col_03">
					<img class="voto_ver" src="/imagens/blank.png" alt="Selos" width="22px" height="20px">
					<h3>
						Veja os resultados!
					</h3>
				</div>
				<div class="container_quadrinhos_texto">
					<span>Roteiro</span> <span>Romance</span> <span>Diversão</span> <span>Humor</span>
					<span>Inovação</span> <span class="categoria_principal">Aventura</span> <span>Arte</span>
				</div>
				<div id="ctl00_ContentPlaceHolder1_ucBarraCategoria_VotCat" class="container_quadrinhos_valores">
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left:-24%;" alt="30%" src="/imagens/barra_susto.png">
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left:-26%;" src="/imagens/barra_romance.png">
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left:-25%;" src="/imagens/barra_loucura.png">
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left:-26%;" src="/imagens/barra_humor.png">
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left:-24%;" src="/imagens/barra_ficcao.png">
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left:-25%;" src="/imagens/barra_acao.png">
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left:-24%;" src="/imagens/barra_drama.png">	
				</div>
				<div class="container_quadrinhos_valores_moldura">
					<img alt="Moldura" src="/imagens/voto_moldura.png">
				</div>
				<div class="container_quadrinhos_valores_moldura">
					<img alt="Moldura" src="/imagens/voto_moldura.png">
				</div>
				<span class="quadrinhos_votos">Votos:
				<em>
				<span id="ctl00_ContentPlaceHolder1_lblVotosQtd">91</span></em></span>
				<div class="clearall">
				</div>
				<div class="containerbottom_col_03">
				</div>
			</div>
		</div>
		<!-- Tag de publicidade Google - WideSkyScrapper (160x600) -->
		<div class="publicidade_col03_widesky">
			<img src="/Publicidade/Publi_BannerWideSky_Top.png" alt="Publicidade" class="top">
		</div>
	</div>
	<div class="clearall">
	</div>
</div>
<div class="clearall"></div>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/Footer.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/SiteFecha.php";
?>