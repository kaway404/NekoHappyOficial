<?php if(isset($template)){?>
<div class="align">
<div class="flex">

<div class="feed">
<div class="configusa" style="position: relative; top: -20px;">
<h1>Configurando seu perfil</h1>
<p>Seja bem vindo <?php echo $user['usuario'];?>, essa é a sua primeira etapa aqui no NekoHappy. Configure seu perfil de acordo com seu gosto.</p>
<hr>
<p>Qual seu jogo favorito?</p>
<input type="" id="game" name="" placeholder="Exemplo: Counter Strike Global Offensive">
<hr>
<p>Qual seu filme/série/anime favorito?</p>
<input type="" id="filme" name="" placeholder="Exemplo: A rede social">
<hr>
<p>Qual seu anime favorito? Entre eles</p>
<select class="animef" id="animefavorito">
<?php
$anim = "SELECT * FROM anime WHERE id ORDER BY id ASC";
$anime = mysqli_query($conn, $anim);
$animed = mysqli_fetch_assoc($anime);
foreach ($anime as $anime => $animes) {
?>
<option id="animefavorito" value="<?php echo $animes['id'];?>"><?php echo $animes['slug'];?></option>
<?php } ?>
</select>
<p>Qual vai ser seu pin-code? <span uk-tooltip="Irá ser usado para proteger sua conta de invasores e também será usado para recuperar sua conta." style="color: #151515 !important; cursor: pointer;">Para que serve?</span></p>
<input type="" id="pin" name="" placeholder="Exemplo: 4002">
<hr>
<p>Edite sua foto perfil</p>
<input id="fileupload" style="left: 20px; bottom: 10px; position: relative;" type="file" name="FilesPic" multiple data-url="/changephoto">
<div class="progress">
<div class="subprogress"></div>
</div>

<hr>

<div class="btn" uk-tooltip="Concluir este passo" id="concluir">Concluir</div>

<div class="error"></div>

</div>
</div>


</div>
</div>

<script src="/assets/js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="/assets/js/jquery.iframe-transport.js" type="text/javascript"></script>
<script src="/assets/js/jquery.fileupload.js" type="text/javascript"></script>

<script type="text/javascript">
    function Reset(){
        $('.progress .subprogress').css('width', '0%');
    }

    $(function () {
        $('#fileupload').fileupload({
            dataType: 'json',
            done: function (e, data) {
                window.setTimeout('Reset()', 2000);            
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('.progress .subprogress').css('width', progress + '%');
            }
        });

    });

	$( "#concluir" ).click(function() {

		var game = $("#game");
        var gamePost = game.val();
        var filme = $("#filme");
        var filmePost = filme.val();
        var pin = $("#pin");
        var pinPost = pin.val();
        var anime = $("#animefavorito");
        var animePost = anime.val();
        $.post("/configurando", {game: gamePost, filme: filmePost, pin: pinPost, anime: animePost},
        function(data){
         $(".error").html(data);
         }
         , "html");
         return false;

	});

</script>
<?Php } else{ include '../404/index.php';}?>

