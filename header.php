<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Register & Login</title>
	
<style>

body {
      margin:0;
      padding:0;
      background-image: url("pic.jpg");
      background-size: cover;
      font-family:sans-serif;
}

nav {
  position: -webkit-sticky;  
  position: sticky;
  top:0;
  padding: 0.3rem 3rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color:  #AC8E60 ;
}
ul {
  display: flex;
  align-items: center;
  list-style: none;
  gap: 4rem;
  font-size: 16px;
  font-family:verdana; 
}
a {
  text-decoration: none;
  color:#fff;
}

</style>

</head>
<body>

	<nav>
      <img src="logo1.png" alt="logo" />
      <ul>
          <li><a href="Home.php">H O M E</a></li>
          <li><a href="about.php">A B O U T</a></li>
          <li><a href="booking1.php">B O O K I N G</a></li>
		  
  	<?php 
	if (isset($_SESSION["username"])){        // user log wela nm inne
		echo '<li style="float: right;"><a href="includes/logout.inc.php"><button style="font-size: 17px; font-family: verdana; padding: 5px 20px; border-radius: 8px; color: #fff; background-color: #6F5B3E;">L O G O U T</button></a></li>'; // nav bar eke logout button display

		echo '<li style="float: right;"><a href="travelling.php">'.$_SESSION["username"].' ! </a></li>'; // nav bar eke username display
		
	} else{
		echo '<li style="float: right;"><a href="login.php"><button style="font-size: 17px; font-family: verdana; padding: 5px 20px; border-radius: 8px; color: #fff; background-color: #6F5B3E;">L O G I N</button></a></li>';     // user log wela nemei nm inne

	}	

    ?> </li>
</ul>
</nav>

	<div class="container" style="margin:20px;">

