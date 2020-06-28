<?php

function Connection(){
$connect=mysqli_connect("localhost","root","","order");

	return $connect;

}


?>
