<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Admin/config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Admin/db.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Utils/MQTMUtils.php";

$caminhoPacotes = $_SERVER['DOCUMENT_ROOT'] . "/MQTMAdm/Arquivos/Pacotes/";

$oPostEmQuestao = ''; 

function redirect($location)
{
	header("Location: " . $location);
	die();
}

session_start();

// login trecos
$usuario = null;

if (isset($_SESSION['userGuid'])) {
	$usuario = UsuarioTools::requestIDator($_SESSION['userGuid']);
}

class RenderizadoresMisc {
	public static function comentario($comario) { 
		$comment = ComentarioTools::requestIDator($comario);
		
		if ($comment == null) return;
		
		$usuarioComm = UsuarioTools::requestIDator($comment->userGuid);
		$comicDoUsuarioComm = HqTools::comicMaisRecente($comment->userGuid);
		
		if ($comment->respostaGuid != null) {
			$resposta = ComentarioTools::requestIDator($comment->respostaGuid);
			$usuarioRespondido = UsuarioTools::requestIDator(ComentarioTools::requestIDator($comment->respostaGuid)->userGuid);
		}
		?>
		<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_upHistoriaComentarioItem">
			<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdHistoriaComentario" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdHistoriaComentario" value="<?= $comment->comentarioGuid ?>">
			<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdHistoriaComentario_Conversa" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdHistoriaComentario_Conversa">
			<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdUsuario_Historia" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdUsuario_Historia" value="<?= $comicDoUsuarioComm->comicGuid ?>"> <!-- presumo que seja a ultima historia que esse user fez -->
			<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdUsuario_Mural" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdUsuario_Mural">
			<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdBlogItem" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdBlogItem">
			<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdJogo" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdJogo">
			<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdHistoria" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdHistoria" value="<?= $comment->comicGuid ?>">
			<input type="hidden" name="ctl00$ContentPlaceHolder1$ucComentarioCelula$rptComentarios$ctl05$hfIdUsuario_Comentador" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_hfIdUsuario_Comentador" value="<?= $comment->userGuid ?>">
			<div class="comentario">
				<a href="/AutorPerfil.aspx?idUsuario=<?= $usuarioComm->userGuid ?>&bn=1" class="lnkTooltip portraitComentario">
				<span class="usuarioComentario">
				<?= $usuarioComm->apelido ?>
				</span>
				<span class="avatarContentThumbContainer">
				<img src="/imagens/blank.png" alt="Avatar" class="avatarBackgroundThumb">
				<img src="/Arquivos/avatar/modelo1/thumbs/Avatar_<?= $usuarioComm->pfp ?>_thumb.png" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_Avatar1_imgAvatarThumb" alt="Avatar" class="avatarContentThumb">
				<img src="/imagens/blank.png" class="avatarMolduraThumb" title="<?= $usuarioComm->apelido ?>" alt="<?= $usuarioComm->apelido ?>">
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
							minha última história: 
						</p>
						<a class="imageFloat" href="/HistoriaVisualizar.aspx?idHistoria=<?= $comicDoUsuarioComm->comicGuid ?>">
							<img id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_imgHistoria" ant="<?= $comicDoUsuarioComm->titulo ?>" src="/Arquivos/SaveGame/Screenshots/<?= $comicDoUsuarioComm->comicGuid ?>.png" border="0">
							<h3>
							<?= $comicDoUsuarioComm->titulo ?>
							</h3>
						</a>
					</div>
					<div class="b">
						<div>
						</div>
					</div>
				 </div>
				</div>
				<span class="dataComentario">
				<!-- 01/11/2011 23:49 -->
				<?= date_format(formatarData($comment->data), "d/m/Y H:i") ?>
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
				<?php if ($comment->respostaGuid != null) : ?>
				 <a href="/AutorPerfil.aspx?idUsuario=<?= $usuarioRespondido->userGuid ?>&bn=1" id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_lnlUsuarioRespondido" class="comentario_autor_contexto">
				 <?= $usuarioRespondido->apelido ?></a> escreveu:
				 <img src="/imagens/blank.png" class="comentarioAutorContexto" alt="">
				 <div class="comentario_conteudo_contexto">	
					<img src="/imagens/blank.png" class="comentarioOpenQuote" alt="">	
					<?= $resposta->conteudo ?>
					<img src="/imagens/blank.png" class="comentarioCloseQuote" alt="">
				 </div>
				<?php endif; ?>
				 <?= $comment->conteudo ?>
				</span>
				<div class="interactionBox" id="interactionBoxFeedback<?= $comment->comentarioGuid ?>">
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
				<div id="upMotivoComentarioReportar<?= $comment->comentarioGuid ?>"></div>
				<div id="ctl00_ContentPlaceHolder1_ucComentarioCelula_rptComentarios_ctl05_upMotivoComentarioReportar">
				</div>
			</div>
		</div>
		<?php	
	}
}

class RenderizadorDeHq {
	public static function doLado($comic, $tipoDeLado) {
		?>
			<div id="ctl00_ContentPlaceHolder1_ucHistoriaTopModulo<?= $tipoDeLado ?>_rptHistoriasCelulaMiniMiniCriterio_ctl00_ucHistoriaCelulaMini_divClassModular" class="popularFotos" >
				<a href="/HistoriaVisualizar.aspx?idHistoria=<?= $comic->comicGuid ?>">
					<img
						src="/Arquivos/SaveGame/Screenshots/<?= $comic->comicGuid ?>.png"
						id="ctl00_ContentPlaceHolder1_ucHistoriaTopModulo<?= $tipoDeLado ?>_rptHistoriasCelulaMiniMiniCriterio_ctl00_ucHistoriaCelulaMini_imgHistoria"
						class="status_ultimahistoria_foto"
						height="24"
						width="34"
						title="<?= $comic->titulo ?>"
						alt="<?= $comic->titulo ?>"
					/>
				</a>
			</div>
		<?php
	}
	
	public static function containerQuadrinhos($comic, $tipo, $aTag) {
		switch ($tipo) {
			case 1: ?>
			<div class="container_quadrinhos">
				<div class="container_quadrinhos_texto">
					<a href="/HistoriaVisualizar.aspx?idHistoria=<?= $comic->comicGuid ?>">
						<img
							src="/Arquivos/SaveGame/Screenshots/<?= $comic->comicGuid ?>.png"
							id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula2_imgHistoria"
							title="<?= $comic->titulo ?>"
							alt="<?= $comic->titulo ?>"
						/>
					</a>
					
					<span class="quadrinhos_titulo">
						<a href="/HistoriaVisualizar.aspx?idHistoria=<?= $comic->comicGuid ?>"><?= $comic->titulo ?></a>
					</span>
					
					<span class="quadrinhos_descricao">
						<a href="/HistoriaVisualizar.aspx?idHistoria=<?= $comic->comicGuid ?>">
							<?= explode("\n", $comic->descricao)[0] ?>
						</a>
					</span>
					
					<br />
					
					<div id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula2_DivBotoes" style="display: none" class="botoes">
					</div>
					
					<span class="quadrinhos_autor"><a href="/AutorPerfil.aspx?idUsuario=<?= $comic->userGuid ?>"><?= UsuarioTools::requestIDator($comic->userGuid)->apelido ?></a> </span>
					
					<br />
					
					<span class="quadrinhos_visualizacao">
						<img src="/imagens/blank.png" alt="visualizações" title="visualizações" />
						<em><?= $comic->views ?></em>
					</span>
					
					<span class="quadrinhos_comentarios">
						<a href="/HistoriaVisualizar.aspx?idHistoria=<?= $comic->comicGuid ?>#comentario">
							<img src="/imagens/blank.png" alt="comentários" title="comentários"/> 
							<em>21</em>
						</a>
					</span>
					
					<div class="estrelas"> 
						<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula2_Nota1" class="quadrinhos_fav_full" width="17" height="17">
						<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula2_Nota2" class="quadrinhos_fav_full" width="17" height="17">
						<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula2_Nota3" class="quadrinhos_fav_full" width="17" height="17">
						<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula2_Nota4" class="quadrinhos_fav_full" width="17" height="17">
						<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula2_Nota5" class="quadrinhos_fav_full" width="17" height="17">
					</div>
				</div>
				<div class="container_quadrinhos_valores" id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula2_ucBarraCategoria_VotCat">
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left: -22%" src="/imagens/barra_susto.png"/>
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left: -22%" src="/imagens/barra_romance.png"/>
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left: -22%" src="/imagens/barra_loucura.png"/>
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left: -22%" src="/imagens/barra_humor.png"/>
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left: -22%" src="/imagens/barra_ficcao.png"/>
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left: -22%" src="/imagens/barra_acao.png"/>
					<img style="width: 144px; height: 14px; margin-top: 2px; margin-left: -22%" src="/imagens/barra_drama.png"/>
				</div>
				<div class="container_quadrinhos_valores_moldura">
					<img alt="Moldura" src="/imagens/voto_moldura.png" />
				</div>
			</div>
			<?php
				break;
			case 2: ?>
				<div class="container_quadrinhos">
					<div class="container_quadrinhos_texto">
						<a href="/HistoriaVisualizar.aspx?idHistoria=<?= $comic->comicGuid ?>">
							<img src="/Arquivos/SaveGame/Screenshots/<?= $comic->comicGuid ?>.png"
								id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula1_imgHistoria"
								title="<?= $comic->titulo ?>"
								alt="<?= $comic->titulo ?>"/>
						</a>
						<span class="quadrinhos_titulo">
							<a href="/HistoriaVisualizar.aspx?idHistoria=<?= $comic->comicGuid ?>"><?= $comic->titulo ?></a>
						</span>
						<div
							id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula1_DivBotoes"
							style="display: none"
							class="botoes"
						></div>
						<span class="quadrinhos_autor"><a href="/AutorPerfil.aspx?idUsuario=<?= $comic->userGuid ?>"><?= UsuarioTools::requestIDator($comic->userGuid)->apelido ?></a> </span>
						<br />
						<span class="quadrinhos_visualizacao">
							<img src="/imagens/blank.png" alt="visualizações" title="visualizações" /> <em><?= $comic->views ?></em>
						</span>
						<span class="quadrinhos_comentarios">
							<a href="/HistoriaVisualizar.aspx?idHistoria=<?= $comic->comicGuid ?>#comentario">
								<img src="/imagens/blank.png" alt="comentários" title="comentários" /> <em>21</em>
							</a>
						</span>
						<div class="estrelas">
							<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistoriasMelhores<?= $aTag ?>_ctl00_ucHistoriaCelula1_Nota1" class="quadrinhos_fav_full" width="17" height="17"/>
							<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistoriasMelhores<?= $aTag ?>_ctl00_ucHistoriaCelula1_Nota2" class="quadrinhos_fav_full" width="17" height="17"/>
							<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistoriasMelhores<?= $aTag ?>_ctl00_ucHistoriaCelula1_Nota3" class="quadrinhos_fav_full" width="17" height="17"/>
							<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistoriasMelhores<?= $aTag ?>_ctl00_ucHistoriaCelula1_Nota4" class="quadrinhos_fav_full" width="17" height="17"/>
							<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistoriasMelhores<?= $aTag ?>_ctl00_ucHistoriaCelula1_Nota5" class="quadrinhos_fav_full" width="17" height="17"/>
						</div>
					</div>
				</div>
			<?php
				break;
			case 3: ?>
				<div class="container_quadrinhos">
					<div class="container_quadrinhos_texto">
						<a href="/HistoriaVisualizar.aspx?idHistoria=<?= $comic->comicGuid ?>">
							<img
								src="/Arquivos/SaveGame/Screenshots/<?= $comic->comicGuid ?>.png"
								id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula3_imgHistoria"
								title="<?= $comic->titulo ?>"
								alt="<?= $comic->titulo ?>"
							/>
						</a>
						<span class="quadrinhos_titulo">
							<a href="/HistoriaVisualizar.aspx?idHistoria=<?= $comic->comicGuid ?>"><?= $comic->titulo ?></a>
						</span>
						<div
							id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula3_DivBotoes"
							style="display: none"
							class="botoes"
						></div>
						<span class="quadrinhos_autor"
							><a href="/AutorPerfil.aspx?idUsuario=<?= $comic->userGuid ?>"><?= UsuarioTools::requestIDator($comic->userGuid)->apelido ?></a>
						</span>
						<br />
						<span class="quadrinhos_visualizacao">
							<img src="/imagens/blank.png" alt="visualizações" title="visualizações" /> <em><?= $comic->views ?></em>
						</span>
						<span class="quadrinhos_comentarios">
							<a href="/HistoriaVisualizar.aspx?idHistoria=<?= $comic->comicGuid ?>#comentario">
								<img src="/imagens/blank.png" alt="comentários" title="comentários" /> <em>9</em>
							</a>
						</span>
						<div class="estrelas">
							<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula3_Nota1" class="quadrinhos_fav_full" width="17" height="17"/>
							<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula3_Nota2" class="quadrinhos_fav_half" width="17" height="17" />
							<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula3_Nota3" class="quadrinhos_fav_empty" width="17" height="17" />
							<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula3_Nota4" class="quadrinhos_fav_empty" width="17" height="17" />
							<img src="/imagens/blank.png" id="ctl00_ContentPlaceHolder1_rptHistorias<?= $aTag ?>_ctl00_ucHistoriaCelula3_Nota5" class="quadrinhos_fav_empty" width="17" height="17" />
						</div>
					</div>
				</div>
			<?php 
				break;
		}
	}
}
?>