<?php
if(isset($_GET['id']) ){
    $stranger = $_GET['id'];
    $result_strangerc = "SELECT * FROM user WHERE id = '$stranger' LIMIT 1";
    $resultado_strangerc = mysqli_query($conn, $result_strangerc);
    $stranger = mysqli_fetch_assoc($resultado_strangerc);
}