<div class="left-menu">
	<ul>
	<li class="amigos" uk-tooltip="title: Seus amigos; pos: left"></li>
	</ul>
</div>

<div class="header-a">
	<img class="avatar" src="/assets/img/user/<?php echo $user['avatar'];?>"/>
	<p><?php echo $user['usuario'];?> <span uk-tooltip="title: Configuração" class="settings" uk-icon="icon: settings"></span></p>
</div>
