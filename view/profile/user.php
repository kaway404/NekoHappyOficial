<?php if(isset($template)){?>
<div class="align">
<div class="flex">
<div class="feed">

</div>
</div>
</div>

<div class="status">
<a href="/profile/<?php echo $user['id'];?>">
<img class="avatar" src="/img/user/<?php echo $user['avatar'];?>"/>
<p class="user"><?php echo $user['usuario'];?></p>
</a>
<hr style="position: absolute; top: 40px">
<a href="/logout" uk-tooltip="Sair da conta" class="logout">Sair</a>

</div>

<?php } ?>