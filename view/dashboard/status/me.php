<?php if(isset($template)){?>

<div class="links">
<p>Atalhos</p>	
<a href="/create_page">Nova comunidade</a>
<br>
<a href="/profile/<?php echo $user['id'];?>">Meu perfil</a>
<br>
<a href="/toprank">Top rank</a>
<br>
<a href="/loja">Loja</a>
</div>

<div class="status">
<a href="/profile/<?php echo $user['id'];?>">
<img class="avatar" src="/img/user/<?php echo $user['avatar'];?>"/>
<p class="user"><?php echo $user['usuario'];?></p>
</a>
</div>


<?Php } else{ include '../404/index.php';}?>