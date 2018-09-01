<?php
if(isset($template)){
echo '<div class="toprank">';
echo '<h1 style="font-size: 1.6em;">Top rank</h1>';
$usertop = "SELECT * FROM user WHERE id ORDER BY lvl DESC";
$usertopt = mysqli_query($conn, $usertop);
$usertopts = mysqli_fetch_assoc($usertopt);
foreach ($usertopt as $usertopt => $usertopts) {
?>

<li class="cool"><p><?php echo '<img src="/img/user/'.$usertopts['avatar'].'"/>' .  '<span>' . $usertopts['usuario'] . ' - ' . 'Level '  . $usertopts['lvl'] . '</span>';?></p></li>


<?php } ?>
</div>

<?php  } else{ include '../404/index.php';}?>