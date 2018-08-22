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
         document.getElementById('title').value='';
         document.getElementById('texto').value='';
         return false;
    });
</script>
<?php
$iduser = $user['id'];
$post = "SELECT * FROM postagem WHERE id ORDER BY ID DESC";
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
<p style="color: #151515 !important; top: 10px; position: relative; left: 10px;word-wrap: break-word;"><?php echo $resultado_peopledes['usuario'];?> - publicou</p>
<h1 style="color: #151515 !important; top: -20px; position: relative; left: 10px; font-size: 28px;word-wrap: break-word; width: 95%;"><?php echo $postas['title'];?></h1>
<span style="color: #151515 !important; top: -35px; position: relative; left: 10px; font-size: 18px; word-wrap: break-word;"><?php echo $postas['texto'];?></span>
<div class="postaaa" style="left: -100px; position: absolute;">
<div class="avatar" style="top: -130px; position: absolute;">
<img uk-tooltip="<?php echo $resultado_peopledes['usuario'];?>" src="/img/user/<?php echo $resultado_peopledes['avatar'];?>"/>
</div>
</div>
</div>
<?Php } } ?>


</div>