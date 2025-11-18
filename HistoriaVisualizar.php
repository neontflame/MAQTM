<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";

$tipoDPagina = 'leitor';

$id = $_GET['idHistoria'];
$historiaInfo = HqTools::requestIDator($id);
$autorInfo = UsuarioTools::requestIDator($historiaInfo->userGuid);

$meta['titulo'] = $historiaInfo->titulo . ' - Máquina Aberta de Quadrinhos da Turma da Mônica';

include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/SiteAbre.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/Header.php";


?>
	<div id="master_middle">
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
							<iframe allowtransparency="true" frameborder="0" scrolling="no" src="./HistoriaVisualizar_files/tweet_button.1324331373.html" class="twitter-share-button twitter-count-none" title="Twitter Tweet Button" style="width: 66px; height: 20px;"></iframe>
							<a name="fb_share" type="icon" class="botao_facebook" href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fweb.archive.org%2Fweb%2F20111229015108%2Fhttp%3A%2F%2Fwww.maquinadequadrinhos.com.br%2FHistoriaVisualizar.aspx%3FidHistoria%3D1145961&amp;t=1955-2011%20-%20M%C3%A1quina%20de%20Quadrinhos%20da%20Turma%20da%20M%C3%B4nica&amp;src=sp" style="text-decoration: none;"><span class="FBConnectButton_Simple"><span class="FBConnectButton_Text_Simple">﻿</span></span></a>
							<a href="http://www.blogger.com/blog_this.pyra?t&amp;u=http%3a%2f%2fwww.maquinadequadrinhos.com.br%2fHistoriaVisualizar.aspx%3fidHistoria%3d1145961&amp;n=1955-2011+-+M%c3%a1quina+de+Quadrinhos+da+Turma+da+M%c3%b4nica&amp;pli=1" target="_blank" title="Compartilhar no Blogger !" class="blogger"><img alt="Compartilhar no Blogger !" src="./HistoriaVisualizar_files/blogger.gif" style="width:16px; height:16px; padding:0; border:0; vertical-align:middle;"></a> 
							
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
					<span class="quadrinhos_autor"><h5>Autor</h5>
							<a href="/AutorPerfil.aspx?idUsuario=<?= $autorInfo->userGuid ?>&bn=1">
								<span id="ctl00_ContentPlaceHolder1_lblAutorNome"><?= $autorInfo->apelido ?></span>
							</a>
					</span>
					<br>
						<span class="quadrinhos_descricao"><h5>Descrição</h5>
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
						<em><span id="ctl00_ContentPlaceHolder1_lblComentariosQtd">330</span></em>
					</span>
				</div>
				<div class="status_comentario">
					<span>Deseja comentar?</span><br><br>
					<center><p><a href="/Cadastro.aspx?r=1">Cadastre-se</a> na Máquina de Quadrinhos gratuitamente ou faça o <a id="ctl00_ContentPlaceHolder1_ucComentarioInsercao_lkBtnLogin" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$ucComentarioInsercao$lkBtnLogin&#39;,&#39;&#39;)">login</a>, caso você já seja um membro.</p></center>
				</div>

				<div id="ctl00_ContentPlaceHolder1_ucComentarioInsercao_upHistoriaComentar"></div>
						
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
			
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_upHistoriaComentarioItem">
		
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl00$hfIdHistoriaComentario" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_hfIdHistoriaComentario" value="6252902">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl00$hfIdHistoriaComentario_Conversa" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_hfIdHistoriaComentario_Conversa">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl00$hfIdUsuario_Historia" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_hfIdUsuario_Historia" value="60262">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl00$hfIdUsuario_Mural" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_hfIdUsuario_Mural">
							
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl00$hfIdBlogItem" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_hfIdBlogItem">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl00$hfIdJogo" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_hfIdJogo">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl00$hfIdHistoria" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_hfIdHistoria" value="1145961">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl00$hfIdUsuario_Comentador" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_hfIdUsuario_Comentador" value="428800">
							<div class="comentario">
								<a href="/AutorPerfil.aspx?idUsuario=428800&amp;bn=1" class="lnkTooltip portraitComentario">
									<span class="usuarioComentario ">
										Emma_Rock_STAR
									</span>

									


	<span class="avatarContentThumbContainer">
		<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
		<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_Var01_Denise_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
		<img src="/imagens/blank.png" class="avatarMolduraThumb" title="Emma_Rock_STAR" alt="Emma_Rock_STAR">
	</span>

									  

									
								</a>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_divTooltip" class="tooltip" style="display: none; position: relative;
									z-index: 2;">
									<div class="dialog">
										<div class="content">
											<div class="t">
											</div>
											<p>
												
												
											Veja
												minha última história: </p> <a class="imageFloat" href="/HistoriaVisualizar.aspx?idHistoria=1267992">
													<img id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_imgHistoria" ant="Revista Land &amp; Sea &quot;Especial Férias&quot; Edição Nº 1" src="./HistoriaVisualizar_files/253173cb-9e2b-4049-9eb8-43f3ad3d73a6.jpg" border="0">
													<h3>
														Revista Land &amp; Sea "Especial Férias" Edição Nº 1</h3>
												</a>
										</div>
										<div class="b">
											<div>
											</div>
										</div>
									</div>
								</div>
								
								<span class="dataComentario">
									17/12/2011 19:37
								</span>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_upInteracoesSecundarias">
			
										
											<span class="comentario_reportar hoverAction" style="opacity: 0;">
												<a href="/HistoriaVisualizar.aspx?idHistoria=1145961" onclick="return ComentarioReporteFormLoad(this, 6252902);">
													<img title="Reportar!" alt="Reportar!" src="/imagens/blank.png" class="reportar">
												</a></span>
										
										<span class="comentario_mover hoverAction" style="opacity: 0;">
											
										</span>
									
		</div>
								<span class="status_comentario_conteudo">
									
									Faltou a metade da apple ! :'( adeus steve !
								</span>
								<div class="interactionBox" id="interactionBoxFeedback6252902">
								
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_upInteractionBox">
			
											
											<span class="comentario_responder hoverAction" style="opacity: 0;">
												
												<a id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_btnComentarioResponderNaHistoria" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl00$btnComentarioResponderNaHistoria&#39;,&#39;&#39;)"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_imgResponderDefaultHistoria" class="responderDefault" alt="Responder!" title="Responder!"></a>
											</span>
										
		</div>
									
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_upgComentarioAcao" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_upgComentarioAcaoSecundaria" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<span class="processando" style="display:none" id="feedbackSecundario6252902">Processando...</span>
								</div>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_upComentarioResposta">
			
										<div class="divReposta">
											
										</div>
									
		</div>
								<div id="upMotivoComentarioReportar6252902"></div>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl00_upMotivoComentarioReportar">
			
										
										
									
		</div>
							</div>
						
	</div>
				
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_upHistoriaComentarioItem">
		
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl01$hfIdHistoriaComentario" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_hfIdHistoriaComentario" value="6230451">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl01$hfIdHistoriaComentario_Conversa" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_hfIdHistoriaComentario_Conversa">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl01$hfIdUsuario_Historia" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_hfIdUsuario_Historia" value="60262">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl01$hfIdUsuario_Mural" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_hfIdUsuario_Mural">
							
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl01$hfIdBlogItem" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_hfIdBlogItem">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl01$hfIdJogo" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_hfIdJogo">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl01$hfIdHistoria" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_hfIdHistoria" value="1145961">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl01$hfIdUsuario_Comentador" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_hfIdUsuario_Comentador" value="241721">
							<div class="comentario">
								<a href="/AutorPerfil.aspx?idUsuario=241721&amp;bn=1" class="lnkTooltip portraitComentario">
									<span class="usuarioComentario ">
										beatriz  robert
									</span>

									


	<span class="avatarContentThumbContainer">
		<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
		<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_Var01_Magali_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
		<img src="/imagens/blank.png" class="avatarMolduraThumb" title="beatriz  robert" alt="beatriz  robert">
	</span>

									  

									
								</a>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_divTooltip" class="tooltip" style="display: none; position: relative;
									z-index: 2;">
									<div class="dialog">
										<div class="content">
											<div class="t">
											</div>
											<p>
												
												
											Veja
												minha última história: </p> <a class="imageFloat" href="/HistoriaVisualizar.aspx?idHistoria=898589">
													<img id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_imgHistoria" ant="concursinho mqtmzinho" src="./HistoriaVisualizar_files/968f64f2-e04c-48c4-a4d2-6cecb5628a76.jpg" border="0">
													<h3>
														concursinho mqtmzinho</h3>
												</a>
										</div>
										<div class="b">
											<div>
											</div>
										</div>
									</div>
								</div>
								
								<span class="dataComentario">
									15/12/2011 14:25
								</span>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_upInteracoesSecundarias">
			
										
											<span class="comentario_reportar hoverAction" style="opacity: 0;">
												<a href="/HistoriaVisualizar.aspx?idHistoria=1145961" onclick="return ComentarioReporteFormLoad(this, 6230451);">
													<img title="Reportar!" alt="Reportar!" src="/imagens/blank.png" class="reportar">
												</a></span>
										
										<span class="comentario_mover hoverAction" style="opacity: 0;">
											
										</span>
									
		</div>
								<span class="status_comentario_conteudo">
									
									eu tenho um ipad minha mãe tem iphone e meu pai tem ipod
				  somos a familia jobs
				   vai pelo bom caminho steve
								</span>
								<div class="interactionBox" id="interactionBoxFeedback6230451">
								
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_upInteractionBox">
			
											
											<span class="comentario_responder hoverAction" style="opacity: 0;">
												
												<a id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_btnComentarioResponderNaHistoria" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl01$btnComentarioResponderNaHistoria&#39;,&#39;&#39;)"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_imgResponderDefaultHistoria" class="responderDefault" alt="Responder!" title="Responder!"></a>
											</span>
										
		</div>
									
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_upgComentarioAcao" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_upgComentarioAcaoSecundaria" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<span class="processando" style="display:none" id="feedbackSecundario6230451">Processando...</span>
								</div>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_upComentarioResposta">
			
										<div class="divReposta">
											
										</div>
									
		</div>
								<div id="upMotivoComentarioReportar6230451"></div>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl01_upMotivoComentarioReportar">
			
										
										
									
		</div>
							</div>
						
	</div>
				
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_upHistoriaComentarioItem">
		
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl02$hfIdHistoriaComentario" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_hfIdHistoriaComentario" value="6037421">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl02$hfIdHistoriaComentario_Conversa" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_hfIdHistoriaComentario_Conversa" value="5806827">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl02$hfIdUsuario_Historia" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_hfIdUsuario_Historia" value="60262">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl02$hfIdUsuario_Mural" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_hfIdUsuario_Mural">
							
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl02$hfIdBlogItem" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_hfIdBlogItem">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl02$hfIdJogo" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_hfIdJogo">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl02$hfIdHistoria" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_hfIdHistoria" value="1145961">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl02$hfIdUsuario_Comentador" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_hfIdUsuario_Comentador" value="248559">
							<div class="comentario">
								<a href="/AutorPerfil.aspx?idUsuario=248559&amp;bn=1" class="lnkTooltip portraitComentario">
									<span class="usuarioComentario ">
										xSonic
									</span>

									


	<span class="avatarContentThumbContainer">
		<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
		<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_Var01_Bidu_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
		<img src="/imagens/blank.png" class="avatarMolduraThumb" title="xSonic" alt="xSonic">
	</span>

									  

									
								</a>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_divTooltip" class="tooltip" style="display: none; position: relative;
									z-index: 2;">
									<div class="dialog">
										<div class="content">
											<div class="t">
											</div>
											<p>
												
												
											Veja
												minha última história: </p> <a class="imageFloat" href="/HistoriaVisualizar.aspx?idHistoria=1265922">
													<img id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_imgHistoria" ant="Para Zombie Attack" src="./HistoriaVisualizar_files/a5bbbe34-d07d-459b-aed0-20e44a797c16.jpg" border="0">
													<h3>
														Para Zombie Attack</h3>
												</a>
										</div>
										<div class="b">
											<div>
											</div>
										</div>
									</div>
								</div>
								
								<span class="dataComentario">
									20/11/2011 10:38
								</span>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_upInteracoesSecundarias">
			
										
											<span class="comentario_reportar hoverAction" style="opacity: 0;">
												<a href="/HistoriaVisualizar.aspx?idHistoria=1145961" onclick="return ComentarioReporteFormLoad(this, 6037421);">
													<img title="Reportar!" alt="Reportar!" src="/imagens/blank.png" class="reportar">
												</a></span>
										
										<span class="comentario_mover hoverAction" style="opacity: 0;">
											
										</span>
									
		</div>
								<span class="status_comentario_conteudo">
									<a href="/AutorPerfil.aspx?idUsuario=124355&amp;bn=1" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_lnlUsuarioRespondido" class="comentario_autor_contexto">
											x_X Gi_Rock X_x</a> escreveu:
										<img src="/imagens/blank.png" class="comentarioAutorContexto" alt="">
										<div class="comentario_conteudo_contexto">	
											<img src="/imagens/blank.png" class="comentarioOpenQuote" alt="">	
											Eu estava usando sarcasmo '-'
											<img src="/imagens/blank.png" class="comentarioCloseQuote" alt="">
										</div>
										
									
									O Steve Jobs Criou O Windows Mac Focou?
								</span>
								<div class="interactionBox" id="interactionBoxFeedback6037421">
								
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_upInteractionBox">
			
											
											<span class="comentario_responder hoverAction" style="opacity: 0;">
												
												<a id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_btnComentarioResponderNaHistoria" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl02$btnComentarioResponderNaHistoria&#39;,&#39;&#39;)"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_imgResponderDefaultHistoria" class="responderDefault" alt="Responder!" title="Responder!"></a>
											</span>
										
		</div>
									
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_upgComentarioAcao" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_upgComentarioAcaoSecundaria" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<span class="processando" style="display:none" id="feedbackSecundario6037421">Processando...</span>
								</div>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_upComentarioResposta">
			
										<div class="divReposta">
											
										</div>
									
		</div>
								<div id="upMotivoComentarioReportar6037421"></div>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl02_upMotivoComentarioReportar">
			
										
										
									
		</div>
							</div>
						
	</div>
				
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_upHistoriaComentarioItem">
		
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl03$hfIdHistoriaComentario" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_hfIdHistoriaComentario" value="5973165">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl03$hfIdHistoriaComentario_Conversa" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_hfIdHistoriaComentario_Conversa">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl03$hfIdUsuario_Historia" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_hfIdUsuario_Historia" value="60262">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl03$hfIdUsuario_Mural" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_hfIdUsuario_Mural">
							
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl03$hfIdBlogItem" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_hfIdBlogItem">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl03$hfIdJogo" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_hfIdJogo">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl03$hfIdHistoria" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_hfIdHistoria" value="1145961">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl03$hfIdUsuario_Comentador" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_hfIdUsuario_Comentador" value="318762">
							<div class="comentario">
								<a href="/AutorPerfil.aspx?idUsuario=318762&amp;bn=1" class="lnkTooltip portraitComentario">
									<span class="usuarioComentario ">
										aline s2
									</span>

									


	<span class="avatarContentThumbContainer">
		<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
		<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_Var01_Marina_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
		<img src="/imagens/blank.png" class="avatarMolduraThumb" title="aline s2" alt="aline s2">
	</span>

									  

									
								</a>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_divTooltip" class="tooltip" style="display: none; position: relative;
									z-index: 2;">
									<div class="dialog">
										<div class="content">
											<div class="t">
											</div>
											<p>
												
												
											Veja
												minha última história: </p> <a class="imageFloat" href="/HistoriaVisualizar.aspx?idHistoria=1262479">
													<img id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_imgHistoria" ant="novo nome aline s2" src="./HistoriaVisualizar_files/f7b9c666-74a9-43a2-a1d2-bb6843bcc63e.jpg" border="0">
													<h3>
														novo nome aline s2</h3>
												</a>
										</div>
										<div class="b">
											<div>
											</div>
										</div>
									</div>
								</div>
								
								<span class="dataComentario">
									05/11/2011 17:58
								</span>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_upInteracoesSecundarias">
			
										
											<span class="comentario_reportar hoverAction" style="opacity: 0;">
												<a href="/HistoriaVisualizar.aspx?idHistoria=1145961" onclick="return ComentarioReporteFormLoad(this, 5973165);">
													<img title="Reportar!" alt="Reportar!" src="/imagens/blank.png" class="reportar">
												</a></span>
										
										<span class="comentario_mover hoverAction" style="opacity: 0;">
											
										</span>
									
		</div>
								<span class="status_comentario_conteudo">
									
									oi,bolinho de arroz com feijão (zoando) poeria ler minha HQ "irmas secretas trailer" e "irmans secretas 1"? mt mt obrigada se poder espalhar e votar no máximo mesmo! quero mt que vá a 1º p.
								</span>
								<div class="interactionBox" id="interactionBoxFeedback5973165">
								
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_upInteractionBox">
			
											
											<span class="comentario_responder hoverAction" style="opacity: 0;">
												
												<a id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_btnComentarioResponderNaHistoria" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl03$btnComentarioResponderNaHistoria&#39;,&#39;&#39;)"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_imgResponderDefaultHistoria" class="responderDefault" alt="Responder!" title="Responder!"></a>
											</span>
										
		</div>
									
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_upgComentarioAcao" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_upgComentarioAcaoSecundaria" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<span class="processando" style="display:none" id="feedbackSecundario5973165">Processando...</span>
								</div>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_upComentarioResposta">
			
										<div class="divReposta">
											
										</div>
									
		</div>
								<div id="upMotivoComentarioReportar5973165"></div>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl03_upMotivoComentarioReportar">
			
										
										
									
		</div>
							</div>
						
	</div>
				
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_upHistoriaComentarioItem">
		
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl04$hfIdHistoriaComentario" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_hfIdHistoriaComentario" value="5940690">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl04$hfIdHistoriaComentario_Conversa" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_hfIdHistoriaComentario_Conversa">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl04$hfIdUsuario_Historia" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_hfIdUsuario_Historia" value="60262">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl04$hfIdUsuario_Mural" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_hfIdUsuario_Mural">
							
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl04$hfIdBlogItem" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_hfIdBlogItem">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl04$hfIdJogo" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_hfIdJogo">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl04$hfIdHistoria" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_hfIdHistoria" value="1145961">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl04$hfIdUsuario_Comentador" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_hfIdUsuario_Comentador" value="388925">
							<div class="comentario">
								<a href="/AutorPerfil.aspx?idUsuario=388925&amp;bn=1" class="lnkTooltip portraitComentario">
									<span class="usuarioComentario ">
										Tita_tata
									</span>

									


	<span class="avatarContentThumbContainer">
		<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
		<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_Var02_Magali_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
		<img src="/imagens/blank.png" class="avatarMolduraThumb" title="Tita_tata" alt="Tita_tata">
	</span>

									  

									
								</a>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_divTooltip" class="tooltip" style="display: none; position: relative;
									z-index: 2;">
									<div class="dialog">
										<div class="content">
											<div class="t">
											</div>
											<p>
												
												
											Veja
												minha última história: </p> <a class="imageFloat" href="/HistoriaVisualizar.aspx?idHistoria=1133903">
													<img id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_imgHistoria" ant="DUPLA PERSONALIDADE-2  o sumiço de sabrina parte 1" src="./HistoriaVisualizar_files/09b64414-b805-4eb0-bab8-fdcd81df818c.jpg" border="0">
													<h3>
														DUPLA PERSONALIDADE-2  o sumiço de sabrina parte 1</h3>
												</a>
										</div>
										<div class="b">
											<div>
											</div>
										</div>
									</div>
								</div>
								
								<span class="dataComentario">
									01/11/2011 23:51
								</span>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_upInteracoesSecundarias">
			
										
											<span class="comentario_reportar hoverAction" style="opacity: 0;">
												<a href="/HistoriaVisualizar.aspx?idHistoria=1145961" onclick="return ComentarioReporteFormLoad(this, 5940690);">
													<img title="Reportar!" alt="Reportar!" src="/imagens/blank.png" class="reportar">
												</a></span>
										
										<span class="comentario_mover hoverAction" style="opacity: 0;">
											
										</span>
									
		</div>
								<span class="status_comentario_conteudo">
									
									lindooooooooooooooo! amei.vc é muito criativo.tem muito talento.poderia até trabalhar na MSP
								</span>
								<div class="interactionBox" id="interactionBoxFeedback5940690">
								
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_upInteractionBox">
			
											
											<span class="comentario_responder hoverAction" style="opacity: 0;">
												
												<a id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_btnComentarioResponderNaHistoria" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl04$btnComentarioResponderNaHistoria&#39;,&#39;&#39;)"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_imgResponderDefaultHistoria" class="responderDefault" alt="Responder!" title="Responder!"></a>
											</span>
										
		</div>
									
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_upgComentarioAcao" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_upgComentarioAcaoSecundaria" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<span class="processando" style="display:none" id="feedbackSecundario5940690">Processando...</span>
								</div>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_upComentarioResposta">
			
										<div class="divReposta">
											
										</div>
									
		</div>
								<div id="upMotivoComentarioReportar5940690"></div>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl04_upMotivoComentarioReportar">
			
										
										
									
		</div>
							</div>
						
	</div>
				
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_upHistoriaComentarioItem">
		
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdHistoriaComentario" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdHistoriaComentario" value="5940682">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdHistoriaComentario_Conversa" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdHistoriaComentario_Conversa">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdUsuario_Historia" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdUsuario_Historia" value="60262">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdUsuario_Mural" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdUsuario_Mural">
							
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdBlogItem" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdBlogItem">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdJogo" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdJogo">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdHistoria" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdHistoria" value="1145961">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdUsuario_Comentador" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdUsuario_Comentador" value="388925">
							<div class="comentario">
								<a href="/AutorPerfil.aspx?idUsuario=388925&amp;bn=1" class="lnkTooltip portraitComentario">
									<span class="usuarioComentario ">
										Tita_tata
									</span>

									


	<span class="avatarContentThumbContainer">
		<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
		<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_Var02_Magali_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
		<img src="/imagens/blank.png" class="avatarMolduraThumb" title="Tita_tata" alt="Tita_tata">
	</span>

									  

									
								</a>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_divTooltip" class="tooltip" style="display: none; position: relative;
									z-index: 2;">
									<div class="dialog">
										<div class="content">
											<div class="t">
											</div>
											<p>
												
												
											Veja
												minha última história: </p> <a class="imageFloat" href="/HistoriaVisualizar.aspx?idHistoria=1133903">
													<img id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_imgHistoria" ant="DUPLA PERSONALIDADE-2  o sumiço de sabrina parte 1" src="./HistoriaVisualizar_files/09b64414-b805-4eb0-bab8-fdcd81df818c.jpg" border="0">
													<h3>
														DUPLA PERSONALIDADE-2  o sumiço de sabrina parte 1</h3>
												</a>
										</div>
										<div class="b">
											<div>
											</div>
										</div>
									</div>
								</div>
								
								<span class="dataComentario">
									01/11/2011 23:49
								</span>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_upInteracoesSecundarias">
			
										
											<span class="comentario_reportar hoverAction" style="opacity: 0;">
												<a href="/HistoriaVisualizar.aspx?idHistoria=1145961" onclick="return ComentarioReporteFormLoad(this, 5940682);">
													<img title="Reportar!" alt="Reportar!" src="/imagens/blank.png" class="reportar">
												</a></span>
										
										<span class="comentario_mover hoverAction" style="opacity: 0;">
											
										</span>
									
		</div>
								<span class="status_comentario_conteudo">
									<a href="/AutorPerfil.aspx?idUsuario=86337&amp;bn=1" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_lnlUsuarioRespondido" class="comentario_autor_contexto">
											Harrynito88</a> escreveu:
										<img src="/imagens/blank.png" class="comentarioAutorContexto" alt="">
										<div class="comentario_conteudo_contexto">	
											<img src="/imagens/blank.png" class="comentarioOpenQuote" alt="">	
											Porcaria é ouvir o seu comentario ''brusco''! Se não gostou não precisava comentar! e mais,sem o Steve Jobs,não ia existir IPods,MAC,Computadores,IPhones,ITunes e etc!
											<img src="/imagens/blank.png" class="comentarioCloseQuote" alt="">
										</div>
										
									
									é verdade!tem tanta gente grossa,ñ precisava insultar o altor da história q teve todo o trabalho para fazer essa HQ viu?! e pobre do Steve Jobs
								</span>
								<div class="interactionBox" id="interactionBoxFeedback5940682">
								
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_upInteractionBox">
			
											
											<span class="comentario_responder hoverAction" style="opacity: 0;">
												
												<a id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_btnComentarioResponderNaHistoria" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$btnComentarioResponderNaHistoria&#39;,&#39;&#39;)"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_imgResponderDefaultHistoria" class="responderDefault" alt="Responder!" title="Responder!"></a>
											</span>
										
		</div>
									
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_upgComentarioAcao" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_upgComentarioAcaoSecundaria" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<span class="processando" style="display:none" id="feedbackSecundario5940682">Processando...</span>
								</div>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_upComentarioResposta">
			
										<div class="divReposta">
											
										</div>
									
		</div>
								<div id="upMotivoComentarioReportar5940682"></div>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_upMotivoComentarioReportar">
			
										
										
									
		</div>
							</div>
						
	</div>
				
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_upHistoriaComentarioItem">
		
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl06$hfIdHistoriaComentario" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_hfIdHistoriaComentario" value="5889789">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl06$hfIdHistoriaComentario_Conversa" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_hfIdHistoriaComentario_Conversa">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl06$hfIdUsuario_Historia" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_hfIdUsuario_Historia" value="60262">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl06$hfIdUsuario_Mural" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_hfIdUsuario_Mural">
							
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl06$hfIdBlogItem" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_hfIdBlogItem">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl06$hfIdJogo" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_hfIdJogo">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl06$hfIdHistoria" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_hfIdHistoria" value="1145961">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl06$hfIdUsuario_Comentador" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_hfIdUsuario_Comentador" value="373470">
							<div class="comentario">
								<a href="/AutorPerfil.aspx?idUsuario=373470&amp;bn=1" class="lnkTooltip portraitComentario">
									<span class="usuarioComentario ">
										godinotia
									</span>

									


	<span class="avatarContentThumbContainer">
		<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
		<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_Var02_Dragao_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
		<img src="/imagens/blank.png" class="avatarMolduraThumb" title="godinotia" alt="godinotia">
	</span>

									  

									
								</a>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_divTooltip" class="tooltip" style="display: none; position: relative;
									z-index: 2;">
									<div class="dialog">
										<div class="content">
											<div class="t">
											</div>
											<p>
												
												
												Eu ainda estou criando minhas histórias, venha me visitar mais tarde, quando terei criado muitas histórias!</p>
											<p></p> 
											
										</div>
										<div class="b">
											<div>
											</div>
										</div>
									</div>
								</div>
								
								<span class="dataComentario">
									27/10/2011 13:39
								</span>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_upInteracoesSecundarias">
			
										
											<span class="comentario_reportar hoverAction" style="opacity: 0;">
												<a href="/HistoriaVisualizar.aspx?idHistoria=1145961" onclick="return ComentarioReporteFormLoad(this, 5889789);">
													<img title="Reportar!" alt="Reportar!" src="/imagens/blank.png" class="reportar">
												</a></span>
										
										<span class="comentario_mover hoverAction" style="opacity: 0;">
											
										</span>
									
		</div>
								<span class="status_comentario_conteudo">
									
									dane-se  steve  jobs ,ah  mas eu  adorei  o  computador
								</span>
								<div class="interactionBox" id="interactionBoxFeedback5889789">
								
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_upInteractionBox">
			
											
											<span class="comentario_responder hoverAction" style="opacity: 0;">
												
												<a id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_btnComentarioResponderNaHistoria" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl06$btnComentarioResponderNaHistoria&#39;,&#39;&#39;)"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_imgResponderDefaultHistoria" class="responderDefault" alt="Responder!" title="Responder!"></a>
											</span>
										
		</div>
									
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_upgComentarioAcao" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_upgComentarioAcaoSecundaria" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<span class="processando" style="display:none" id="feedbackSecundario5889789">Processando...</span>
								</div>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_upComentarioResposta">
			
										<div class="divReposta">
											
										</div>
									
		</div>
								<div id="upMotivoComentarioReportar5889789"></div>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl06_upMotivoComentarioReportar">
			
										
										
									
		</div>
							</div>
						
	</div>
				
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_upHistoriaComentarioItem">
		
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl07$hfIdHistoriaComentario" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_hfIdHistoriaComentario" value="5888415">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl07$hfIdHistoriaComentario_Conversa" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_hfIdHistoriaComentario_Conversa">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl07$hfIdUsuario_Historia" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_hfIdUsuario_Historia" value="60262">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl07$hfIdUsuario_Mural" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_hfIdUsuario_Mural">
							
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl07$hfIdBlogItem" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_hfIdBlogItem">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl07$hfIdJogo" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_hfIdJogo">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl07$hfIdHistoria" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_hfIdHistoria" value="1145961">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl07$hfIdUsuario_Comentador" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_hfIdUsuario_Comentador" value="147756">
							<div class="comentario">
								<a href="/AutorPerfil.aspx?idUsuario=147756&amp;bn=1" class="lnkTooltip portraitComentario">
									<span class="usuarioComentario ">
										Biieel
									</span>

									


	<span class="avatarContentThumbContainer">
		<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
		<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_Var01_Anjinho_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
		<img src="/imagens/blank.png" class="avatarMolduraThumb" title="Biieel" alt="Biieel">
	</span>

									  

									
								</a>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_divTooltip" class="tooltip" style="display: none; position: relative;
									z-index: 2;">
									<div class="dialog">
										<div class="content">
											<div class="t">
											</div>
											<p>
												
												
											Veja
												minha última história: </p> <a class="imageFloat" href="/HistoriaVisualizar.aspx?idHistoria=1180539">
													<img id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_imgHistoria" ant="Quiz MQTM Episodio 2" src="./HistoriaVisualizar_files/023894a1-c034-44ad-99e3-8827daa5f93a.jpg" border="0">
													<h3>
														Quiz MQTM Episodio 2</h3>
												</a>
										</div>
										<div class="b">
											<div>
											</div>
										</div>
									</div>
								</div>
								
								<span class="dataComentario">
									27/10/2011 07:23
								</span>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_upInteracoesSecundarias">
			
										
											<span class="comentario_reportar hoverAction" style="opacity: 0;">
												<a href="/HistoriaVisualizar.aspx?idHistoria=1145961" onclick="return ComentarioReporteFormLoad(this, 5888415);">
													<img title="Reportar!" alt="Reportar!" src="/imagens/blank.png" class="reportar">
												</a></span>
										
										<span class="comentario_mover hoverAction" style="opacity: 0;">
											
										</span>
									
		</div>
								<span class="status_comentario_conteudo">
									
									Nossa muito legal
								</span>
								<div class="interactionBox" id="interactionBoxFeedback5888415">
								
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_upInteractionBox">
			
											
											<span class="comentario_responder hoverAction" style="opacity: 0;">
												
												<a id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_btnComentarioResponderNaHistoria" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl07$btnComentarioResponderNaHistoria&#39;,&#39;&#39;)"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_imgResponderDefaultHistoria" class="responderDefault" alt="Responder!" title="Responder!"></a>
											</span>
										
		</div>
									
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_upgComentarioAcao" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_upgComentarioAcaoSecundaria" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<span class="processando" style="display:none" id="feedbackSecundario5888415">Processando...</span>
								</div>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_upComentarioResposta">
			
										<div class="divReposta">
											
										</div>
									
		</div>
								<div id="upMotivoComentarioReportar5888415"></div>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl07_upMotivoComentarioReportar">
			
										
										
									
		</div>
							</div>
						
	</div>
				
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_upHistoriaComentarioItem">
		
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl08$hfIdHistoriaComentario" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_hfIdHistoriaComentario" value="5888386">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl08$hfIdHistoriaComentario_Conversa" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_hfIdHistoriaComentario_Conversa">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl08$hfIdUsuario_Historia" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_hfIdUsuario_Historia" value="60262">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl08$hfIdUsuario_Mural" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_hfIdUsuario_Mural">
							
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl08$hfIdBlogItem" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_hfIdBlogItem">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl08$hfIdJogo" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_hfIdJogo">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl08$hfIdHistoria" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_hfIdHistoria" value="1145961">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl08$hfIdUsuario_Comentador" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_hfIdUsuario_Comentador" value="261141">
							<div class="comentario">
								<a href="/AutorPerfil.aspx?idUsuario=261141&amp;bn=1" class="lnkTooltip portraitComentario">
									<span class="usuarioComentario ">
										xiroca natalino
									</span>

									


	<span class="avatarContentThumbContainer">
		<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
		<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_Var01_DoContra_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
		<img src="/imagens/blank.png" class="avatarMolduraThumb" title="xiroca natalino" alt="xiroca natalino">
	</span>

									  

									
								</a>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_divTooltip" class="tooltip" style="display: none; position: relative;
									z-index: 2;">
									<div class="dialog">
										<div class="content">
											<div class="t">
											</div>
											<p>
												
												
											Veja
												minha última história: </p> <a class="imageFloat" href="/HistoriaVisualizar.aspx?idHistoria=1262655">
													<img id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_imgHistoria" ant="A LEGIÃO DOS CAVALEIROS-Episódio 2" src="./HistoriaVisualizar_files/dff9b688-626b-492a-a90c-10ed778e6299.jpg" border="0">
													<h3>
														A LEGIÃO DOS CAVALEIROS-Episódio 2</h3>
												</a>
										</div>
										<div class="b">
											<div>
											</div>
										</div>
									</div>
								</div>
								
								<span class="dataComentario">
									27/10/2011 01:52
								</span>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_upInteracoesSecundarias">
			
										
											<span class="comentario_reportar hoverAction" style="opacity: 0;">
												<a href="/HistoriaVisualizar.aspx?idHistoria=1145961" onclick="return ComentarioReporteFormLoad(this, 5888386);">
													<img title="Reportar!" alt="Reportar!" src="/imagens/blank.png" class="reportar">
												</a></span>
										
										<span class="comentario_mover hoverAction" style="opacity: 0;">
											
										</span>
									
		</div>
								<span class="status_comentario_conteudo">
									
									Lindo, nunca tive nada disso, mas que pena de Steve Jobs!!
								</span>
								<div class="interactionBox" id="interactionBoxFeedback5888386">
								
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_upInteractionBox">
			
											
											<span class="comentario_responder hoverAction" style="opacity: 0;">
												
												<a id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_btnComentarioResponderNaHistoria" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl08$btnComentarioResponderNaHistoria&#39;,&#39;&#39;)"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_imgResponderDefaultHistoria" class="responderDefault" alt="Responder!" title="Responder!"></a>
											</span>
										
		</div>
									
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_upgComentarioAcao" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_upgComentarioAcaoSecundaria" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<span class="processando" style="display:none" id="feedbackSecundario5888386">Processando...</span>
								</div>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_upComentarioResposta">
			
										<div class="divReposta">
											
										</div>
									
		</div>
								<div id="upMotivoComentarioReportar5888386"></div>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl08_upMotivoComentarioReportar">
			
										
										
									
		</div>
							</div>
						
	</div>
				
					<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_upHistoriaComentarioItem">
		
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl09$hfIdHistoriaComentario" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_hfIdHistoriaComentario" value="5872476">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl09$hfIdHistoriaComentario_Conversa" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_hfIdHistoriaComentario_Conversa">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl09$hfIdUsuario_Historia" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_hfIdUsuario_Historia" value="60262">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl09$hfIdUsuario_Mural" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_hfIdUsuario_Mural">
							
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl09$hfIdBlogItem" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_hfIdBlogItem">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl09$hfIdJogo" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_hfIdJogo">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl09$hfIdHistoria" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_hfIdHistoria" value="1145961">
							<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl09$hfIdUsuario_Comentador" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_hfIdUsuario_Comentador" value="358264">
							<div class="comentario">
								<a href="/AutorPerfil.aspx?idUsuario=358264&amp;bn=1" class="lnkTooltip portraitComentario">
									<span class="usuarioComentario ">
										Hrick
									</span>

									


	<span class="avatarContentThumbContainer">
		<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
		<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_Var01_Cebolinha_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
		<img src="/imagens/blank.png" class="avatarMolduraThumb" title="Hrick" alt="Hrick">
	</span>

									  

									
								</a>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_divTooltip" class="tooltip" style="display: none; position: relative;
									z-index: 2;">
									<div class="dialog">
										<div class="content">
											<div class="t">
											</div>
											<p>
												
												
											Veja
												minha última história: </p> <a class="imageFloat" href="/HistoriaVisualizar.aspx?idHistoria=1223558">
													<img id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_imgHistoria" ant="minecraft a aventura epica" src="./HistoriaVisualizar_files/c0800e1a-8066-417b-acb7-d8c36d3f0b58.jpg" border="0">
													<h3>
														minecraft a aventura epica</h3>
												</a>
										</div>
										<div class="b">
											<div>
											</div>
										</div>
									</div>
								</div>
								
								<span class="dataComentario">
									24/10/2011 21:59
								</span>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_upInteracoesSecundarias">
			
										
											<span class="comentario_reportar hoverAction" style="opacity: 0;">
												<a href="/HistoriaVisualizar.aspx?idHistoria=1145961" onclick="return ComentarioReporteFormLoad(this, 5872476);">
													<img title="Reportar!" alt="Reportar!" src="/imagens/blank.png" class="reportar">
												</a></span>
										
										<span class="comentario_mover hoverAction" style="opacity: 0;">
											
										</span>
									
		</div>
								<span class="status_comentario_conteudo">
									
									nunca mais vou ter um iphone!!!!!!!!!!!!!!!!vida longa a steve jobs!!!!!!!!!!!!!!
								</span>
								<div class="interactionBox" id="interactionBoxFeedback5872476">
								
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_upInteractionBox">
			
											
											<span class="comentario_responder hoverAction" style="opacity: 0;">
												
												<a id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_btnComentarioResponderNaHistoria" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl09$btnComentarioResponderNaHistoria&#39;,&#39;&#39;)"><img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_imgResponderDefaultHistoria" class="responderDefault" alt="Responder!" title="Responder!"></a>
											</span>
										
		</div>
									
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_upgComentarioAcao" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_upgComentarioAcaoSecundaria" style="display:none;">
			
											<span class="processando">Processando...</span>
										
		</div>
									<span class="processando" style="display:none" id="feedbackSecundario5872476">Processando...</span>
								</div>
								
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_upComentarioResposta">
			
										<div class="divReposta">
											
										</div>
									
		</div>
								<div id="upMotivoComentarioReportar5872476"></div>
								<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl09_upMotivoComentarioReportar">
			
										
										
									
		</div>
							</div>
						
	</div>
				
		
</div>
	<div class="clearall">
	</div>
</div>
<div class="clearall">
</div>
<div class="containerbottom_col_02">
</div>
<div class="clearall">
</div>

<div class="clearall">
</div>
<div id="quadrinhos_paginacao">
	  <span>
						<em>1</em>
						<a href="/HistoriaVisualizar.aspx?pagina=2&amp;idHistoria=1145961" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_ucPaginacao_lnkBAnchor">2</a>
						<a href="/HistoriaVisualizar.aspx?pagina=3&amp;idHistoria=1145961" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_ucPaginacao_lnkCAnchor">3</a>
						<a href="/HistoriaVisualizar.aspx?pagina=4&amp;idHistoria=1145961" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_ucPaginacao_lnkDAnchor">4</a>
						<a href="/HistoriaVisualizar.aspx?pagina=5&amp;idHistoria=1145961" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_ucPaginacao_lnkEAnchor">5</a>
						...
						<a href="/HistoriaVisualizar.aspx?pagina=33&amp;idHistoria=1145961" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_ucPaginacao_lnkFAnchor">33</a>
					</span><a href="/HistoriaVisualizar.aspx?pagina=2&amp;idHistoria=1145961" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_ucPaginacao_lnkProxima">
						<img id="quadrinhos_paginacao_avanca" src="/imagens/blank.png" width="13px" height="15px"></a> <a href="/HistoriaVisualizar.aspx?pagina=11&amp;idHistoria=1145961" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_ucPaginacao_lnkProximaSalto">
								<img id="quadrinhos_paginacao_ultima" src="/imagens/blank.png" width="19px" height="16px"></a>
</div>
<div class="clearall">
</div>

<div class="clearall">
</div>

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
							<div id="dicasDiversas" style="display: block;">1) 1/12 - <b>Sempre que ler uma história, não deixe de dar a sua opinião votando</b>. O seu voto tem o poder de fazer com que a Máquina de Quadrinhos da Turma da Mônica se torne uma fonte de histórias divertidas e educativas, além de incentivar o autor a criar mais histórias e melhorar.<a href="#" id="lnkDicaProxima">Próxima</a> 
	

</div> 
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
						
							<center><p><a href="/Cadastro.aspx?r=1">Cadastre-se</a> ou faça o <a id="ctl00_ContentPlaceHolder1_lkBtnLogin3" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lkBtnLogin3&#39;,&#39;&#39;)">login</a> caso você já seja um membro.</p></center>
										
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
								Veja os resultados!</h3></div><div class="container_quadrinhos_texto">
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
						<span id="ctl00_ContentPlaceHolder1_lblVotosQtd">91</span></em></span><div class="clearall">
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
	
<div class="clearall">
</div>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/Footer.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/SiteFecha.php";
?>