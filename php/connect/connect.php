<?php
$host = "localhost";
$user = "hee031812";
$pw = "elvmfpdj12!!";
$db = "hee031812";

$connect = new mysqli($host, $user, $pw, $db);
$connect->set_charset("utf-8");

// if(mysqli_connect_errno()){
//     echo "DATABASE Connect False";
// } else {
//     echo "DATABASE Connect True";
// }
?>