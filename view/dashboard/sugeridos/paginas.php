<?php if(isset($template)){?>
<?php
$result_comunidade = "SELECT * FROM comunidade WHERE id  ORDER BY RAND() LIMIT 40";
$resultado_comunidade = mysqli_query($conn, $result_comunidade);
$comunidade = mysqli_fetch_assoc($resultado_comunidade);
if($comunidade){
?>
<div class="uk-position-relative uk-visible-toggle uk-light" uk-slider id="sugeridos">
<span>Comunidades sugeridos</span>
    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
        <?php
        $result_comunidade = "SELECT * FROM comunidade WHERE id  ORDER BY RAND() LIMIT 40";
        $resultado_comunidade = mysqli_query($conn, $result_comunidade);
        $comunidade = mysqli_fetch_assoc($resultado_comunidade);
        foreach ($resultado_comunidade as $resultado_comunidade => $resultado_comunidades) {
        ?>
        <a class="ok" href="/comunidade/<?php echo $resultado_comunidades['id'];?>">
            <li uk-tooltip="<?php echo $resultado_comunidades['nome'];?>">
            <img src="/img/comunidade/avatar/<?php echo $resultado_comunidades['avatar'];?>" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li></a>
    <?php }?>
    </ul>

    <a class="haha uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="haha uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>
<?php } ?>
<?Php } else{ include '../404/index.php';}?>