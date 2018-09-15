<?php if(isset($template)){ ?>


<div class="comunidade">
	<div class="notice">
    <p>Comunidade <?php echo $comunidade['nome'];?></p>
	</div>
	<div class="left-info">
		<div class="avatar">
			<?php if($comunidade['verificado'] == 1){?>
			<div class="verificado" uk-tooltip="Comunidade verificada" style=" background: #8f60da; padding: 5px; box-shadow: 2px 2px 2px rgba(0,0,0,.70); width: 20px; height: 20px; position: absolute; right: 10px; top: 10px; border-radius: 50%;">
				<span style="left: 0px; color: #fff !important;" uk-icon="icon: check" aria-hidden="true"></span>
			</div>
		<?php } ?>
			<?php if($user['id'] == $comunidade['iduser']){?>
			<div class="changephoto" style="height: 100%; border-radius: 0%;">
			<label for="uploade">
			      <span style="left: 10px; top: 5px;" uk-tooltip="Mudar foto de capa" uk-icon="icon: camera" aria-hidden="true"></span>
			      <input type="file" id="uploade" style="display:none" type="file" name="FilesPic" multiple data-url="/sourcemoder/<?php echo $comunidade['id'];?>">
			    </label>
			    <div class="progresss" style="display: none; height: 10px; top: 30px; width: 50%; margin: 0px auto; left: 0;">
			    	<div class="subprogresss"></div>
			    </div>
			</div>
			<?php } ?>
			<?php if($comunidade['avatar'] <> ""){?>
			<div style="background-image: url(/img/comunidade/avatar/<?php echo $comunidade['avatar'];?>); width: 100%; height: 200px; background-size: cover; box-shadow: 3px 2px 4px rgba(0,0,0,.50);" alt=""></div>
			<?php  } else{ ?>
			<div style="background-image: url(/img/comunidade/avatar/default.png); width: 100%; height: 200px; background-size: cover; box-shadow: 3px 2px 4px rgba(0,0,0,.50);" alt=""></div>
			<?php } ?>
			<hr>
			<h2 style="left: -5px; font-size: 1.45em;"><?php echo $comunidade['nome'];?></h2>
		</div>
	</div>


	<div class="center">
		<div class="padding" style="padding: 10px;">
			<div class="cover">
			<?php if($user['id'] == $comunidade['iduser']){?>
			<div class="changecover">
			<label for="uploadh">
			      <span uk-tooltip="Mudar foto de capa" uk-icon="icon: camera" aria-hidden="true"></span>
			      <input type="file" id="uploadh" style="display:none" type="file" name="FilesCov" multiple data-url="/coverchangep/<?php echo $comunidade['id'];?>">
			    </label>
			    <div class="progresss" style="display: none; height: 10px; top: 30px; width: 50%; margin: 0px auto; left: 0;">
			    	<div class="subprogresss"></div>
			    </div>
			</div>
			<?php } ?>	
			</div>
			<hr>
			<p style="font-size: 1.2em;">Descrição : <?php echo $comunidade['sobre'];?></p>
			<hr>
		</div>
	</div>
</div>

	<style type="text/css">
		<?php
	if($comunidade['cover'] <> ""){?>
		.center .cover{
			background-image: url('/img/comunidade/cover/<?php echo $comunidade['cover'];?>') !important;
		}
	<?php } ?>
	</style>

<script type="text/javascript">
	function Reset(){
        $('.progresss .subprogresss').css('width', '0%');
    }

    $(function () {
        $('#uploadh').fileupload({
            dataType: 'json',
            done: function (e, data) {
                window.setTimeout('Reset()', 2000);            
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('.progresss .subprogresss').css('width', progress + '%');
                location.reload();
            }
        });

    });
</script>

<script type="text/javascript">
function Resetd(){
         $('.progress .subprogress').css('width', '0%');
     }

     $(function () {
         $('#uploade').fileupload({
             dataType: 'json',
             done: function (e, data) {
                 window.setTimeout('Resetd()', 2000);            
            },
            progressall: function (e, data) {
                 var progress = parseInt(data.loaded / data.total * 100, 10);
                $('.progress .subprogress').css('width', progress + '%');
                 location.reload();
             }
         });

     });
</script>

<script src="/assets/js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="/assets/js/jquery.iframe-transport.js" type="text/javascript"></script>
<script src="/assets/js/jquery.fileupload.js" type="text/javascript"></script>


<?php } else{ include '../404/index.php';}?>