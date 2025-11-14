var _____WB$wombat$assign$function_____=function(name){return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name))||self[name];};if(!self.__WB_pmw){self.__WB_pmw=function(obj){this.__WB_source=obj;return this;}}{
let window = _____WB$wombat$assign$function_____("window");
let self = _____WB$wombat$assign$function_____("self");
let document = _____WB$wombat$assign$function_____("document");
let location = _____WB$wombat$assign$function_____("location");
let top = _____WB$wombat$assign$function_____("top");
let parent = _____WB$wombat$assign$function_____("parent");
let frames = _____WB$wombat$assign$function_____("frames");
let opens = _____WB$wombat$assign$function_____("opens");
var comentarioAcaoURL = "/Controls/ComentarioCelulaAjax.aspx";
var historiaAcaoURL = "/Controls/HistoriaCelula_Ajax.aspx";

function ComentarioReporteFormLoad(control, id) {
    $(control.parentNode).remove();
    $("#feedbackSecundario" + id).show();
    $("#upMotivoComentarioReportar" + id).load(
            comentarioAcaoURL + "?id=" + id
            , function() {
                $("#feedbackSecundario" + id).hide();
            }
            );
    return false;
}

function HistoriaAcaoPost(source, id, url, msgConfirm, acao) {

    if (confirm(msgConfirm)) {
        $(source).attr('disabled', 'disabled');
        $.post(url
                , { id: id
                    , a: acao
                }
                , function(data) {
                    window.location.reload();
                }
        );
    }
    return false;

}

function HistoriaPublicacaoEnvioConfirmar(source, id) {

    return HistoriaAcaoPost(
        source
        , id
        , historiaAcaoURL
        , 'ATENÇÃO: As histórias criadas pelos usuários, antes de serem publicadas, passam por filtros de moderação. A Máquina de Quadrinhos não permitirá a publicação de histórias com conteúdo impróprio. A Máquina de Quadrinhos se reserva no Direito de bloquear ou excluir os usuários que insistirem na publicação de histórias que infrinjam as regras de uso do portal. Por favor, colabore conosco mantendo a sua Máquina sempre funcionando.'
        , "hpe"
    );
           
    return false;
}

function HistoriaDelecaoMarcar(source, id) {

    return HistoriaAcaoPost(
        source
        , id
        , historiaAcaoURL
        , 'A exclusão dessa HISTÓRIA implicará na perda de todos os comentários relacionados a mesma. A história também não poderá ser recuperada. Deseja realmente excluir a história?'
        , "hdm"
    );

    return false;
}

function HistoriaPlaylistDelete(source, id) {

    return HistoriaAcaoPost(
        source
        , id
        , historiaAcaoURL
        , 'A exclusão dessa SÉRIE NÃO implicará na exclusão das histórias relacionadas. Será excluída somente a ligação entre as histórias. Confirma exclusão da série?'
        , "hpx"
    );

    return false;
}

function comentarioReportePost(idHistoriaComentario) {

    if ($("#formComentarioReport" + idHistoriaComentario).valid()) {

        $("#upHistoriaReporte" + idHistoriaComentario + " #feedback").text("aguarde, processando...");
        $.post(comentarioAcaoURL + "?a=cr", {
            id: idHistoriaComentario
                    , tipo: $("#upHistoriaReporte" + idHistoriaComentario + " #ddlComentarioReporteTipo option:selected").val()
                    , descricao: $("#upHistoriaReporte" + idHistoriaComentario + " #txtComentarioReporteDescricao").val()
                }
                , function(data) {
                    $("#upMotivoComentarioReportar" + idHistoriaComentario).html(data);
                }
            );

    }

}


function comentarioDeletePost(id) {
    
    if (confirm("Realmente deseja excluir este comentário? Uma vez excluído ele não poderá ser recuperado.")) {
        $("#feedbackSecundario" + id).show();
        $.post(comentarioAcaoURL + "?a=cd"
                , {id: id}
                , function(data) {
                    $("#interactionBoxFeedback" + id).html(data);
                }
        );
    }

    return false;

}

}
/*
     FILE ARCHIVED ON 22:45:11 Aug 05, 2011 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 04:45:15 Nov 14, 2025.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 0.539
  exclusion.robots: 0.021
  exclusion.robots.policy: 0.01
  esindex: 0.009
  cdx.remote: 17.151
  LoadShardBlock: 85.052 (3)
  PetaboxLoader3.datanode: 75.499 (4)
  load_resource: 71.063
  PetaboxLoader3.resolve: 54.743
*/