<?php
    	$result_back = "SELECT * FROM background WHERE id and ativo = 1 ORDER BY RAND() LIMIT 1";
	    $result_backed = mysqli_query($conn, $result_back);
	    $background = mysqli_fetch_assoc($result_backed);
    	foreach ($result_backed as $result_backed => $result_backeds) {
  ?>
  <style type="text/css">
  	.main .back{
	background-image: url(/assets/img/background/<?php echo $result_backeds['url'];?>) !important;
}
  </style>
  <?php } ?>