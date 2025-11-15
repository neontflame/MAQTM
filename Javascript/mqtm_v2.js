
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