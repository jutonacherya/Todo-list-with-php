<?php

 $list=$_POST['lis'];


include "config.php";
mysqli_query ($con,"INSERT INTO `todo`(`list`) VALUES ('$list')");
header("location :index.php");
?>