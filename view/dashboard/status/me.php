<?php if(isset($template)){?>

<div class="links">
<center>
<a href="/create_page">Nova comunidade</a>
<br>
<a href="/profile/<?php echo $user['id'];?>">Meu perfil</a>
<br>
<a href="/toprank">Top rank</a>
<br>
<a>
</center>
</div>

<div class="status">
<a href="/profile/<?php echo $user['id'];?>">
<img class="avatar" src="/img/user/<?php echo $user['avatar'];?>"/>
<p class="user"><?php echo $user['usuario'];?></p>
</a>
<hr style="position: absolute; top: 40px">
<a uk-tooltip="Sair dessa conta" href="/logout" uk-tooltip="Sair da conta" class="logout">Sair</a>
</div>


<?Php } else{ include '../404/index.php';}?>