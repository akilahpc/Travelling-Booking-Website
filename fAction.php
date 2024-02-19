<?php

$a=$_POST['name'];
$b=$_POST['nic'];
$c=$_POST['email'];
$d=$_POST['departure-date'];
$e=$_POST['passengers'];

$con=mysqli_connect("localhost","root","","booking");

$res=mysqli_query($con,"insert into book values('$a','$b','$c','$d','$e')");

if($res){
	echo "Booking succes";
}
?>