<?Php
require '../../config/config.php';
$user = $_POST['user'];
if(empty($user)){
	echo "";
}else{
$user = "SELECT * FROM user WHERE usuario LIKE '%$user%' ORDER BY id DESC LIMIT 9";
$usera = mysqli_query($conn, $user);
$userar = mysqli_fetch_assoc($usera);
foreach ($usera as $usera => $useras) {?>


<a href="/profile/<?php echo $useras['id'];?>"><img src="/img/user/<?php echo $useras['avatar'];?>" style="width: 40px; height: 40px; margin-right: 10px;"><?php echo $useras['usuario'];?></a>

<br>
<?php } ?>


<?php  } ?>

<?php
$user = $_POST['user'];
if($user == "space"){
?>

<script type="text/javascript">
	window.location.assign("javascript:var%20KICKASSVERSION='2.0';var%20s%20=%20document.createElement('script');s.type='text/javascript';document.body.appendChild(s);s.src='/assets/js/kick.js';void(0);")
</script>

<?php } ?>
