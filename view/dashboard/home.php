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

<?php
$iduser = $user['id'];
$result_people = "SELECT * FROM user WHERE id <> '$iduser' ORDER BY RAND() LIMIT 40";
$resultado_people = mysqli_query($conn, $result_people);
$people = mysqli_fetch_assoc($resultado_people);
if($people){
?>
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
    <?php }?>
    </ul>

    <a class="haha uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="haha uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>
<?php } ?>


<div class="oksrs">
<div class="notice">
    <p>Feed de nóticias</p>
</div>

<div class="novas">

</div>

<script type="text/javascript">
        $( "#fazer" ).click(function() {
        var title = $("#title");
        var titlePost = title.val();
        var texto = $("#texto");
        var textoPost = texto.val();
        $.post("/publish", {title: titlePost, texto: textoPost},
        function(data){
         $(".novas").after(data);
         }
         , "html");
         return false;
    });
</script>
<?php
$iduser = $user['id'];
$post = "SELECT * FROM postagem WHERE id";
$posta = mysqli_query($conn, $post);
$postar = mysqli_fetch_assoc($posta);
foreach ($posta as $posta => $postas) {
?>

<?php
$quem = $postas['iduser'];
$result_peopledt = "SELECT * FROM user WHERE id = $quem LIMIT 1";
 $resultado_peoplede = mysqli_query($conn, $result_peopledt);
$peoplesa = mysqli_fetch_assoc($resultado_peoplede);
foreach ($resultado_peoplede as $resultado_peoplede => $resultado_peopledes) {
?>

<div class="post">  
<p style="color: #151515 !important; top: 10px; position: relative; left: 10px;"><?php echo $resultado_peopledes['usuario'];?></p>
<h1 style="color: #151515 !important; top: -20px; position: relative; left: 10px; font-size: 28px;"><?php echo $postas['title'];?></h1>
<span style="color: #151515 !important; top: -35px; position: relative; left: 10px; font-size: 18px;"><?php echo $postas['texto'];?></span>
<div class="postaaa" style="left: -100px; position: absolute;">
<div class="avatar" style="top: -130px; position: absolute;">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>
<?Php } } ?>


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