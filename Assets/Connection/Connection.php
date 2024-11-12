<?php
$server="localhost";
$user="root";
$pw="";
$db="db_aqua_fishes";
$conn=mysqli_connect($server,$user,$pw,$db);
if(!$conn)
{
	echo "Error";
}
?>