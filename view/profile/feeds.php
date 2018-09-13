<?php if(isset($template)){?>
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
        $.post("/newp", {title: titlePost, texto: textoPost},
        function(data){
         $(".novas").after(data);
         }
         , "html");
         document.getElementById('title').value='';
         document.getElementById('texto').value='';
         return false;
    });
</script>
<?php
$stran = $stranger['id'];
$post = "SELECT * FROM postagem WHERE id and iduser = '$stran' ORDER BY id DESC";
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
$status = $resultado_peopledes['status'];
$statusatual = null;

if($status >= $dataAtual){
            $statusatual = "1";
}
else{
            $statusatual = "0";
}
?>

<div class="post">  
<p style="color: #151515 !important; top: 10px; position: relative; left: 2px;word-wrap: break-word;"><a href="/profile/<?php echo $resultado_peopledes['id'];?>""><?php echo $resultado_peopledes['usuario'];?></a> - publicou</p>
<h1 style="color: #151515 !important; top: -15px; position: relative; left: 2px; font-size: 28px;word-wrap: break-word; width: 95%;"><?php echo $postas['title'];?></h1>
<span style="color: #151515 !important; top: -25px; position: relative; left: 2px; font-size: 18px; word-wrap: break-word;"><?php echo $postas['texto'];?></span>
<div class="postaaa" style="left: -100px; position: absolute;">
<div class="avatar" style="top: -100px; width: 60px !important; height: 60px !important; position: absolute; background: transparent !important; box-shadow: 1px 1px 1px transparent !important;">
<div class="online" style="top: 0px; height: 15px; z-index: 1000; right: -10px; width: 15px; background: #151515;"><div class="verificar" uk-tooltip="<?php if($statusatual == "1"){ echo 'Usuario online';}else{ echo 'Usuario Offline';} ?>" id="verificando<?php echo $resultado_peopledes['id']; echo $postas['id'];?>"></div></div>
<a href='/profile/<?php echo $resultado_peopledes['id'];?>'><img uk-tooltip="<?php echo $resultado_peopledes['usuario'];?>" src="/img/user/<?php echo $resultado_peopledes['avatar'];?>"/></a>
</div>
</div>
</div>

   <style type="text/css">
        <?php if($statusatual == "1"){?>
            #verificando<?php echo $resultado_peopledes['id']; echo $postas['id'];?>{
                background: #8dbd4e;
                height: 100%;
                width: 100%;
            }
        <?php } ?>
        <?php if($statusatual == "0"){?>
            #verificando<?php echo $resultado_peopledes['id']; echo $postas['id'];?>{
                background: #ce2525;
                height: 100%;
                width: 100%;
            }
        <?php } ?>
        </style>

<?Php } } ?>


</div>
<?Php } else{ include '../404/index.php';}?>