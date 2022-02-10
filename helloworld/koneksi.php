<?php
$db_host     = 'localhost';
$db_user     = 'root';
$db_password = '';
$db_name     = 'perpus';

$con = @mysqli_connect($db_host,$db_user,$db_password) or die (mysqli_error());
mysqli_select_db($con,$db_name) or die (mysqli_error());
?>