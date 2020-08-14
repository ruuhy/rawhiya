<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<style type="text/css">

		.head{
			background-color:gray;
			text-align: center;
			border: 1px solid;

		}
		.navigation{
			background-color:#e5e5e5;
			border: 1px solid;
			padding:25px;
			margin-top:10px;
			float: right;
			
			


		}
		a{
			float: left;
			display: block;
			color: green;
			text-decoration: none;
			padding-left: 20px;
			
		}

		.colleft{
			float:left;
  width:20%;
  text-align:center;
  background-color: gray;
  margin-top:10px;
		}
		.colcenter{
			 float:left;
  width:50%;
  padding:0 20px;
  border: 1px solid;
  margin-left: 2%;


		}
		.colright{
			background-color:gray;
  float:right;
  width:20%;
  padding:15px;
  margin-top:10px;
  text-align:center;
  margin-left: 2%;
  
		}
		.colleft a{
			background-color:#e5e5e5;
  padding:8px;
  margin-top:7px;
  display:block;
  width:90%;
  color:black;
  margin-left: 5px;
		}
		
		
		
	</style>
	<?php

session_start();
include("connection.php");

if (isset($_POST["submit"])) {

	$user=($_POST["name"]);
	$pass=($_POST["psw"]);
	

	$sql = "SELECT * from users WHERE email=':user' AND password=':pass'";
	$stment=$con->prepare($sql);
 	$stment->execute(array(':user'=>$user,':pass'=>$pass));

 	 $row=$stment->fetch(PDO::FETCH_ASSOC);
 	 if(!empty($row['user'])){
 	 	header("location.order.php");

 	 }
      


    }




?>
</head>
<body>
	<div class="container">
		<div class="header">
		<div class="head">
			<h1>VEHICLE ORDER SYSTEM</h1>
		</div>
		</div>
	<div class="navigation">
		<a href="index.php"class="btn btn-success">HOME</a>
		<a href="contact.php" class="btn btn-success">CONTACT</a>
		<a href="about.php" class="btn btn-success">ABOUT</a>
	</div>
	<div class="content">
		<div class="colleft" style="overflow:auto">
			<h2>Type of vehicle </h2>
			<a href="car.php">Cars</a>
			<a href="">Motocycle</a>
			<a href="">Track</a>
			<a href="">Lorry</a>
			<a href="bysicle.php">Bycicle</a>
		
		</div>
			<div class="colcenter">
			<img src="image/download.jpeg">
			<img src="image/images.jpeg">
		</div>
		<div class="colright" >
			<h2>login</h2>
			<form method="post" action="order.php" >
			<label>User name</label>
			<input type="text" name="name"><br><br>
			<label>Password</label>
			<input type="password" name="psw"><br><br>
			<tr> 
	 	<td></td>
	 	<td> 
	 	<input type="submit"  value="login"> 
	 </form>
	 	<form method="post" action="register.php">
 	 		<input type="submit"  value="new register"> 
 	 	</form>
 	 	 	</td> 
 	 	</tr> 
		</div>
		<?php
		
		 ?>
</div>
<div style="background-color:gray;text-align:center;padding:10px;margin-top: 35%; margin-bottom: 0px;">© copyright</div>

		</div>
		
	

</body>
</html>