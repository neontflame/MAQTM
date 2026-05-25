<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/Admin/Autoload.php";
?>

<div class="bgAvatar"></div>
<b>Configuração do Perfil</b>

<form>
   <fieldset>
      <legend>Selecione a máquina que melhor representa você:</legend>
      <div class="avatarSelectContainer">
		<?php foreach ($dicionarioDeAvatares as $dicId => $dicNome) :?>
         <div class="avatarSelect">
            <span class="avatarContentThumbContainer">
               <img
                  src="/imagens/blank.png"
                  alt="Avatar"
                  class="avatarBackgroundThumb"
               />
               <img
                  src="/Arquivos/avatar/modelo1/thumbs/Avatar_<?= $dicNome ?>_thumb.png"
                  id="rptAtavar_ctl00_Avatar2_imgAvatarThumb"
                  alt="Avatar"
                  class="avatarContentThumb"
               />
               <img
                  src="/imagens/blank.png"
                  class="avatarMolduraThumb"
                  title="TODO: trocar isso"
                  alt="TODO: trocar isso"
               />
            </span>

            <input
               type="radio"
               value="<?= $dicId ?>"
               name="rdIdAvatar"
               id="rdIdAvatar"
               class="bgSeletor_radio"
            />
         </div>
		<?php endforeach; ?>

      </div>
      <div class="clearall"></div>
      <input
         type="button"
         onclick=""
         value="continuar"
         class="bt_curto close"
      />
   </fieldset>
</form>

<script type="text/javascript">
   $(document).ready(function () {
      $(".avatarSelect").click(function () {
         $("div.selected").removeClass("selected");
         $(this).addClass("selected");
         $(this).children("input:radio").attr("checked", "checked");
      });

      //if close button is clicked
      $(".window .close").click(function (e) {
         //Cancel the link behavior
         e.preventDefault();
         $("#mask, .window").hide();
         var idAvatarPreview = $("input:radio[name=rdIdAvatar]:checked").val();
         if (idAvatarPreview > 0) {
            $("#idAvatar").val(idAvatarPreview);
            $.get(
               "/Controls/AvatarAjax.aspx?at=grande&ld=1&id=" + idAvatarPreview,
               function (data) {
                  $(".avatarContentGrandeContainer").html(data);
               },
            );
         }
      });
   });
</script>
