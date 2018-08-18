<?php if(isset($template)){?>
<div class="align">
<div class="flex">
<div class="feed">

<div class="postaaa">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
<div class="postar">

</div>

<div class="notice">
	<p>Seja bem vindo(a) ao NekoHappy</p>
</div>

<!-- <div class="saudacao">
<?php
$hora = date("H");
if($hora >= 0 and $hora <6){
?>
<div style="background-image: url(/assets/img/saudacao/noite.png); background-size: cover; border-radius: 10px; height: 287px; width: 100%;">
    <center><h1 style="color: #fff;padding: 100px; text-shadow: 1px 1px 1px rgba(0,0,0,.60);">Boa madrugada</h1></center>
</div>
<?php } elseif ($hora >= 6 and $hora < 12) {
 ?>
 <div style="background-image: url(/assets/img/saudacao/dia.png); background-size: cover; border-radius: 10px; height: 287px; width: 100%;">
    <center><h1 style="color: #fff;padding: 100px; text-shadow: 1px 1px 1px rgba(0,0,0,.60);">Bom dia</h1></center>
</div>

<?php } elseif ($hora>= 12 and $hora < 18) {?>
<div style="background-image: url(/assets/img/saudacao/dia.png); background-size: cover; border-radius: 10px; height: 287px; width: 100%;">
    <center><h1 style="color: #fff;padding: 100px; text-shadow: 1px 1px 1px rgba(0,0,0,.60);">Boa tarde</h1></center>
</div>

<?php } else {?>
<div style="background-image: url(/assets/img/saudacao/noite.png); background-size: cover; border-radius: 10px; height: 287px; width: 100%;">
    <center><h1 style="color: #fff;padding: 100px; text-shadow: 1px 1px 1px rgba(0,0,0,.60);">Boa noite</h1></center>
</div>
<?php } ?>
</div> -->

<div class="uk-position-relative uk-visible-toggle uk-light" uk-slider id="sugeridos">
<span>Amigos sugeridos</span>
    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
    	<?php
    	$iduser = $user['id'];
    	$result_people = "SELECT * FROM user WHERE id <> '$iduser' ORDER BY RAND() LIMIT 40";
	    $resultado_people = mysqli_query($conn, $result_people);
	    $people = mysqli_fetch_assoc($resultado_people);
    	foreach ($resultado_people as $resultado_people => $resultado_peoples) {
    	?>
        <a class="ok" href="/profile/<?php echo $resultado_peoples['id'];?>">
        	<li uk-tooltip="<?php echo $resultado_peoples['usuario'];?>">
            <img src="/img/user/<?php echo $resultado_peoples['avatar'];?>" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li></a>
    <?php } ?>
    </ul>

    <a class="haha uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="haha uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<div class="post">
<div class="postaaa" style="left: -100px; position: relative;">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
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

</div>
</div>
<?Php } else{ include '../404/index.php';}?>