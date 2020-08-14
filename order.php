<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
	input[type=text]{
		border:none;
		border-bottom:2px;
		}
		form{
			background: #e5e5e5;

		}

		.head{
			background-color:gray;
			text-align: center;
			border: 1px solid;

		}
		.navigation{
			background-color:#e5e5e5;
			border: 1px solid;
			padding:25px;
			margin-top:1%;
			margin-left: 22%;
			float: center;
			width: 50%;
			
			


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
  margin-top:1%;
  margin-left: 2%;
  background: #e5e5e5;

		}
		
  
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
include 'connection.php';


if(isset($_POST['submit'])){

$name=$_POST['vehicle'];
$dt=$_POST['date'];


$sql="INSERT INTO orders(O_name, Ord_date) VALUES (:oname,:dt)"; 

$stmt=$con->prepare($sql);

 $stmt->execute(array(':oname'=>$name,':dt'=>$dt));

 

 }
 


 
 ?>
</head>
<body>
	<div class="container">
		<div class="head">
			<h1>VEHICLE ORDER SYSTEM</h1>
		</div>
	<div class="navigation">
		<a href="index.php">HOME</a>
		<a href="contact.php">CONTACT</a>
		<a href="about.php">ABOUT US</a>
		<a href="logout.php">LOG OUT</a>

	</div>
	<div class="content">
		<div class="colleft" style="overflow:auto">
			
		</div>
		
		<div  class="colcenter">
		<h1><center></center> </h1>
	<form name ="myForm" method="POST">	
	<table>
			
		<tr>
			
		</tr>
			<tr>
			<td>Type of Vehicle:</td>
			<td>
				<input type="text" name="vehicle">
			<td>
        </tr>
	
		<tr>
			<td>Date:</td>
			<td><input type="date" name="date" placeholder="Vehicle type" /></td>
		</tr>
		
		
			<tr> 
	 	<td></td> 
	 	<td>

 	 	<form method="post" action="view.php"> 
	 	<input type="submit" name="submit" value="Send">
	 	</form> 
 	 	 <input type="reset" value="Clear"> 
 	 	 	 
 	 	 	</td> 
 	 	</tr> 

		</table>

	</form>
</div>

		
</div>
<div style="background-color:gray;text-align:center;padding:10px;margin-top: 30%; margin-bottom: 0px;">© copyright</div>

		</div>
		
	

</body>
</html>