<div class="postaaa">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
<div class="postar">
<div class="tipos">
<div class="tipo">
    <h1>Aa</h1>
    <p>Texto</p>
</div>
<div class="tipo">
    <h1><img src="/assets/img/icons/camera.png"/></h1>
    <p>Foto</p>
</div>
</div>

<div class="texto">
<p><?php echo $user['usuario'];?></p>
<div class="width">
<form>
<input id="title" type="text" name="title" placeholder="Título">
<textarea id="texto" class="pensando" placeholder="O seu texto aqui"></textarea>

<button class="fazer" id="fazer">Publicar</button>
</form>

</div>

</div>

</div>