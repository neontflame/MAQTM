<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";

$tipoDPagina = 'home';

include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/SiteAbre.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/Header.php";


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
<div id="master_middle">
	<!-- <script type="text/javascript" src="/Javascript/google_service.js"> </script> <script type="text/javascript"> GS_googleAddAdSenseService("ca-pub-4592156504510145"); GS_googleEnableAllServices(); </script><script src="/Javascript/google_ads.js"></script> <script type="text/javascript"> GA_googleAddSlot("ca-pub-4592156504510145", "HistoriasPublicadas_Middle728x90"); </script> <script type="text/javascript"> GA_googleFetchAds(); </script> -->
	<div class="monitorOnline">
		<span id="lblUsuarioOnlineQtd" class="numeroOnline">0</span> <br />autores <br />online
	</div>
	<div id="master_col_01">
		<div id="masterpromo_col_01">
			<embed
					src="/imagens/Col1_01_v2.swf"
					quality="high"
					wmode="transparent"
					bgcolor="#ffffff"
					width="140"
					height="200"
					name="franja_col1"
					align="middle"
					allowscriptaccess="sameDomain"
					allowfullscreen="false"
					type="application/x-shockwave-flash">
			</embed>
		</div>
		<div class="container_col_01">
			<div class="containerheader_col_01">
				<img class="maisquadrinhos" src="/imagens/blank.png" alt="Top03" width="22px" height="20px" />
				<h3>das mais!</h3>
			</div>
			<!-- msp porque voce insiste em IDs tao longos -->
			<!-- aqui vao 9 dessas -->
			<!-- hqzinhas do lado -->
			<?php
				for ($i = 1; $i <= 9; $i++) {
					RenderizadorDeHq::doLado(HqTools::requestIDator(1), 'DasMais');
				}
			?>
			<!-- end hqzinhas do lado -->
			
			<br />
			<div class="clearall"></div>
			<a href="/HistoriasPublicadasDetalhe.aspx?crit=dm" id="ctl00_ContentPlaceHolder1_ucHistoriaTopModuloDasMais_lnkVerMais" class="botao_ir">ver mais &gt;&gt;</a>
			<div class="clearall"></div>
			<div class="containerbottom_col_01"></div>
		</div>
		
		<div class="container_col_01">
			<div class="containerheader_col_01">
				<img class="maisquadrinhos" src="/imagens/blank.png" alt="Top03" width="22px" height="20px" />
				<h3>populares</h3>
			</div>
			<!-- aqui vao mais 9 dessas -->
			<!-- hqzinhas do lado -->
			<?php
				for ($i = 1; $i <= 9; $i++) {
					RenderizadorDeHq::doLado(HqTools::requestIDator(1), 'Comentadas');
				}
			?>
			<!-- end hqzinhas do lado -->
			
			<br />
			<div class="clearall"></div>
			<a href="/HistoriasPublicadasDetalhe.aspx?crit=pop" id="ctl00_ContentPlaceHolder1_ucHistoriaTopModuloComentadas_lnkVerMais" class="botao_ir">ver mais &gt;&gt;</a>
			<div class="clearall"></div>
			<div class="containerbottom_col_01"></div>
		</div>
		<div class="container_col_01">
			<div class="containerheader_col_01">
				<img class="maisquadrinhos" src="/imagens/blank.png" alt="Top03" width="22px" height="20px" />
				<h3>Alternativas</h3>
			</div>
			<div class="menu_opcoes">
				<a href="/HistoriasPublicadasDetalhe.aspx?crit=vis"><span class="opcao_jogador">
						<img src="/imagens/blank.png" alt="Status" width="12px" height="12px" />Mais visualizadas
					</span></a>
				<a href="/HistoriasPublicadasDetalhe.aspx?crit=rc"><span class="opcao_jogador">
						<img src="/imagens/blank.png" alt="Status" width="12px" height="12px" />Mais recentes
				</span></a>
			</div>
			<div class="clearall"></div>
			<div class="containerbottom_col_01"></div>
		</div>
		<div class="container_col_01">
			<div class="containerheader_col_01">
				<img class="topAutores" src="/imagens/blank.png" alt="TopAutores" />
				<h3>Top Autores</h3>
			</div>
			<ol>
				<li class="top_autores"><a href="/AutorPerfil.aspx?idUsuario=136413" class="pos_1">Usuario</a></li>
				<li class="top_autores"><a href="/AutorPerfil.aspx?idUsuario=136413" class="pos_2">Usuario</a></li>
				<li class="top_autores"><a href="/AutorPerfil.aspx?idUsuario=136413" class="pos_3">Usuario</a></li>
				<li class="top_autores"><a href="/AutorPerfil.aspx?idUsuario=136413" class="pos_4">Usuario</a></li>
				<li class="top_autores"><a href="/AutorPerfil.aspx?idUsuario=136413" class="pos_5">Usuario</a></li>
			</ol>
			<div class="clearall"></div>
			<div class="containerbottom_col_01"></div>
		</div>
	</div>
	<div id="master_middle_vitrine">
		<div class="navigationSlider"> <div class="vitrineCarouselPrev"></div> <div class="vitrineCarouselNext"></div> </div>
		<div class="nivo-directionNav">
			<a class="nivo-prevNav"></a>
			<a class="nivo-nextNav"></a>
		</div>
		<div
			id="slider"
			style="position: relative; background: url(&quot;/imagens/img_c_v1_Vitrine_Home.jpg&quot;) no-repeat"
			class="nivoSlider"
		>
			<a href="/BlogItem.aspx?idBlogItem=64" class="nivo-imageLink" style="display: none"
				><img src="/imagens/img_a_v3_Vitrine_Home.jpg" alt="" style="display: none"
			/></a>
			<a href="/Privado/UsuarioIndicacao.aspx?idp=4" class="nivo-imageLink" style="display: none"
				><img src="/imagens/img_a_v2_Vitrine_Home.jpg" alt="" style="display: none"
			/></a>
			<a href="/BlogItem.aspx?idBlogItem=56" class="nivo-imageLink" style="display: none"
				><img src="/imagens/img_b_v1_Vitrine_Home.jpg" alt="" style="display: none"
			/></a>
			<a href="/BlogItem.aspx?idBlogItem=56" class="nivo-imageLink" style="display: block"
				><img src="/imagens/img_c_v1_Vitrine_Home.jpg" alt="" style="display: none"
			/></a>
			<div class="nivo-caption" style="display: none; opacity: 0.8">
				<p></p>
			</div>
			<div
				class="nivo-box"
				style="
					opacity: 1;
					left: 0px;
					top: 0px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) 0px 0px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.464176;
					left: 96px;
					top: 0px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -96px 0px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0;
					left: 192px;
					top: 0px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -192px 0px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0;
					left: 288px;
					top: 0px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -288px 0px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.19;
					left: 384px;
					top: 0px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -384px 0px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.6031;
					left: 480px;
					top: 0px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -480px 0px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.410176;
					left: 576px;
					top: 0px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -576px 0px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.968316;
					left: 672px;
					top: 0px;
					width: 98px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -672px 0px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.841596;
					left: 0px;
					top: 44px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) 0px -44px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.512796;
					left: 96px;
					top: 44px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -96px -44px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 1;
					left: 192px;
					top: 44px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -192px -44px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.632764;
					left: 288px;
					top: 44px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -288px -44px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.287664;
					left: 384px;
					top: 44px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -384px -44px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.957564;
					left: 480px;
					top: 44px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -480px -44px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.765744;
					left: 576px;
					top: 44px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -576px -44px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.913564;
					left: 672px;
					top: 44px;
					width: 98px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -672px -44px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0;
					left: 0px;
					top: 88px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) 0px -88px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0;
					left: 96px;
					top: 88px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -96px -88px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.123904;
					left: 192px;
					top: 88px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -192px -88px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.035676;
					left: 288px;
					top: 88px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -288px -88px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.889776;
					left: 384px;
					top: 88px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -384px -88px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.253504;
					left: 480px;
					top: 88px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -480px -88px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0;
					left: 576px;
					top: 88px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -576px -88px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.8631;
					left: 672px;
					top: 88px;
					width: 98px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -672px -88px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.998064;
					left: 0px;
					top: 132px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) 0px -132px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.7975;
					left: 96px;
					top: 132px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -96px -132px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.706236;
					left: 192px;
					top: 132px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -192px -132px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.914736;
					left: 288px;
					top: 132px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -288px -132px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.665916;
					left: 384px;
					top: 132px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -384px -132px no-repeat;
				"
			></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.993916;
					left: 480px;
					top: 132px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -480px -132px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.999676;
					left: 576px;
					top: 132px;
					width: 96px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -576px -132px no-repeat;
				"></div>
			<div
				class="nivo-box"
				style="
					opacity: 0.980956;
					left: 672px;
					top: 132px;
					width: 98px;
					height: 44px;
					background: url(&quot;/imagens/img_a_v3_Vitrine_Home.jpg&quot;) -672px -132px no-repeat;
				"></div>
		</div>
		<img src="/imagens/bg_Vitrine_Home.png" alt="" width="803" height="194" class="vitrineMoldura" />
		<!-- HistoriasPublicadas_Middle728x90 -->
		<!-- <script type="text/javascript"> GA_googleFillSlot("HistoriasPublicadas_Middle728x90"); </script><script src="/imagens/ads.htm"></script> -->
	</div>
	<div id="master_col_02">
		<div class="container_col_02">
			<div class="containerheader_col_02">
				<img class="melhoresquadrinhos" src="/imagens/blank.png" alt="" width="22px" height="20px" />
				<h3>Melhores quadrinhos do momento!</h3>
			</div>
			<p class="disclaimerMSP">
				A MSP não se responsabiliza pelo conteúdo e uso das imagens nas histórias abaixo.
				<a
					href="/Institucional/TermosDeUso.aspx#disclaimer"
					id="ctl00_ContentPlaceHolder1_ucMSPDisclaimer2_lnkSaibaMais"
					>Saiba Mais.</a
				>
			</p>
			<br />
			<p class="destaquePequeno">
				Última atualização:
				<span id="ctl00_ContentPlaceHolder1_AtualizacaoUltimaData_lblAtualizacaoUltimaData"
					>5/8/2011 19:38:48</span
				>
			</p>
			<br />
			<br />
			<!-- aqui sao 3 containers -->
			<!-- container quadrinhos -->
			<?php
				RenderizadorDeHq::containerQuadrinhos(HqTools::requestIDator(1), 1, 'MelhoresDoMomento');
				RenderizadorDeHq::containerQuadrinhos(HqTools::requestIDator(1), 1, 'MelhoresDoMomento');
				RenderizadorDeHq::containerQuadrinhos(HqTools::requestIDator(1), 1, 'MelhoresDoMomento');
			?>
			<!-- end container quadrinhos -->
			<div class="clearall"></div>
			<a href="/HistoriasPublicadasDetalhe.aspx?crit=mom" class="botao_ir"> ver outras &gt;&gt;</a>
			<div class="clearall"></div>
			<div class="containerbottom_col_02"></div>
		</div>
		<div class="container_col_02" id="melhoresdahome">
			<div class="containerheader_col_02">
				<img class="melhoresquadrinhos" src="/imagens/blank.png" alt="Melhores quadrinhos do momento" />
				<h3>Melhores quadrinhos da semana!</h3>
			</div>
			<p class="disclaimerMSP">
				A MSP não se responsabiliza pelo conteúdo e uso das imagens nas histórias abaixo.
				<a
					href="/Institucional/TermosDeUso.aspx#disclaimer"
					id="ctl00_ContentPlaceHolder1_ucMSPDisclaimer_lnkSaibaMais"
					>Saiba Mais.</a
				>
			</p>
			<br />
			<p class="destaquePequeno">
				Última atualização:
				<span id="ctl00_ContentPlaceHolder1_AtualizacaoUltimaData2_lblAtualizacaoUltimaData"
					>5/8/2011 19:38:48</span
				>
			</p>
			<br />
			<br />
			<!-- aqui tambem sao 3! -->
			<!-- container quadrinhos (outro) -->
			<?php
				RenderizadorDeHq::containerQuadrinhos(HqTools::requestIDator(1), 2, 'MelhoresSemanal');
				RenderizadorDeHq::containerQuadrinhos(HqTools::requestIDator(1), 2, 'MelhoresSemanal');
				RenderizadorDeHq::containerQuadrinhos(HqTools::requestIDator(1), 2, 'MelhoresSemanal');
			?>
			<!-- end container quadrinhos (outro) -->
			<div class="clearall"></div>
			<a href="/HistoriasPublicadasDetalhe.aspx?crit=sem" class="botao_ir"> ver outras &gt;&gt;</a>
			<div class="clearall"></div>
			<div class="containerbottom_col_02"></div>
		</div>
		<div class="container_col_02" id="destaquedahome">
			<div class="containerheader_col_02">
				<img class="melhoresquadrinhos" src="/imagens/blank.png" alt="Melhores quadrinhos do momento" />
				<h3>Quadrinhos em destaque!</h3>
			</div>
			<div id="destaquehome_quadrinhos">
				<!-- e mais um tipo de container de quadrinhos porque sim -->
				<!-- ooooh ceus isso vai ser meio maçante de programar -->
				<!-- aqui vao 2 -->
				<!-- container quadrinhos (Mais outro) -->
				<?php
					RenderizadorDeHq::containerQuadrinhos(HqTools::requestIDator(1), 3, 'Destaque');
					RenderizadorDeHq::containerQuadrinhos(HqTools::requestIDator(1), 3, 'Destaque');
				?>
				<!-- end container quadrinhos (Mais outro) -->
				
				<div class="clearall"></div>
			</div>
			<a href="/HistoriasPublicadasDetalhe.aspx?crit=dst" class="botao_ir">ver outras &gt;&gt;</a>
			<div class="clearall"></div>
			<div class="containerbottom_col_02"></div>
		</div>
	</div>
	<div id="master_col_03">
		<input
			name="ctl00$ContentPlaceHolder1$ucBtnCriarHistoria$button"
			type="button"
			id="ctl00_ContentPlaceHolder1_ucBtnCriarHistoria_button"
			class="bt_longo"
			value="Criar história"
			onclick="location.href='/Privado/EditorQuadrinhos.aspx'"
		/>
		<a
			href="/Tutorial/Tutorial_03.aspx"
			id="ctl00_ContentPlaceHolder1_ucBtnCriarHistoria_lkAprendaCriarHistoria"
			class="botao_ir"
			>Aprenda a criar histórias!</a
		>
		<br />
		<br />
		<br />
		<a
			href="https://web.archive.org/web/20110805224627/http://www.assinepanini.com.br/DetalheRevistas.asp?Produto_txt=MAQ&amp;Site_txt=HOTSITE&amp;Origem_txt=MAQUINADEQUADRINHOS&amp;Formato_txt=MAQUINADEQUADRINHOS"
			target="_blank"
			class="publibutton_col03"
			><img
				src="/imagens/bt_maqquadrinhos.gif"
				alt="Assinando por 1 ano o pacote de revistas da Turma da Mônica, você recebe 1 ano de acesso ilimitado na Máquina de Quadrinhos."
				width="180px"
				height="90px"
		/></a>
		<div class="container_col_03">
			<div class="containerheader_col_03">
				<img class="novidades" src="/imagens/blank.png" alt="Novidades" width="22px" height="20px" />
				<h3>Notícias</h3>
			</div>
			<div class="novidades">
				<!-- noticia -->
				<h2><a href="/BlogItem.aspx?idBlogItem=68">noticia coiso</a></h2>
				<!-- end noticia -->
			</div>
			<div class="clearall"></div>
			<br /><a href="/BlogItemListagem.aspx" class="botao_ir">Ver todas as notícias</a>
			<br />
			<div class="containerbottom_col_03"></div>
		</div>

		<div id="masterpromo_col_03">
			<embed src="/imagens/Col3_08_v2.swf"
					quality="high"
					wmode="transparent"
					bgcolor="#ffffff"
					width="230"
					height="224"
					name="bidu_col3"
					align="middle"
					allowscriptaccess="sameDomain"
					allowfullscreen="false"
					type="application/x-shockwave-flash"
					pluginspage="http://www.adobe.com/go/getflashplayer">
			</embed>
		</div>

	</div>
	<div class="clearall"></div>
</div>
<div class="clearall"> </div>
<script src="/Javascript/jquery.nivo.slider.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
		$(".monitorOnline").load("/Controls/UsuariosOnlineQtdAjax.aspx");

		//var vitrineCarouselLink = $("#slider")[0].children[0].href;

		var vitrineCarouselLink = $("#slider").find("a").eq(0).attr('href'); 

		$('.vitrineMoldura').click(function() {
			document.location.href = vitrineCarouselLink;
		});

		//$("#vitrineCarousel").jCarouselLite({
		//	auto: 12000,
		//	circular: true,
		//	btnNext: "#master_middle_vitrine .vitrineCarouselNext",
		//	btnPrev: "#master_middle_vitrine .vitrineCarouselPrev",
		//	afterEnd: function(a) {
		//		vitrineCarouselLink = a[0].children[0].href;
		//	}
		//});

		$('#slider').nivoSlider({
			controlNav: false,
			pauseTime: 5000,
			directionNav: true,
			directionNavHide: false,
			prevText: '',
			nextText: '',
			afterChange: function() {
				var idSlide = $('#slider').data('nivo:vars').currentSlide;
				vitrineCarouselLink = $("#slider").find("a").eq(idSlide).attr('href');
			}
		});

	})
</script>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/Footer.php";
include $_SERVER['DOCUMENT_ROOT'] . "/PartesDoSite/SiteFecha.php";
?>