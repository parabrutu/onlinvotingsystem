<?php

$connect=mysqli_connect("localhost:3306","root","","voting") or die("connection failed");

if($connect){
	echo "Connected!";
}
else{
	echo "Not Connected!";
}

?>