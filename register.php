<!DOCTYPE html>
<html>
<head>
	<title></title>
 
<?php 
session_start();
include 'connection.php';


if(isset($_POST['submit'])){

$name=$_POST['name'];
$addr=$_POST['address'];
$tel=$_POST['telephone'];
$email=$_POST['email'];
$pass=$_POST['password'];


$sql="INSERT INTO users(u_name,address,phone,email,password)
 VALUES (:name,:add,:phone,:email,:pass)"; 

 $stmt=$con->prepare($sql);

 $stmt->execute(array(':name'=>$name,':add'=>$addr,':phone'=>$tel,':email'=>$email,':pass'=>$pass));



}


 
 


 
 ?>
	
	<link rel="stylesheet" type="text/css" href="lab2/style.css">
	<style type="text/css">

	.head{
			background-color:gray;
			text-align: center;
			border: 1px solid;

		}
	body{
			width:40%;
			margin:auto;
			border: 1px solid;
			border-bottom:1px solid;
			margin-top: 20px;
			
		}
		input[type=text]{
		border:none;
		border-bottom:2px;
		}
		form{
			background: #b4b4b4;
		}
	</style>

</head>
<body>
	<div class="container">
	<div class="head">
			<h1>VEHICLE ORDER SYSTEM</h1>
		</div>
	<form name ="myForm" method="POST" onsubmit="return validateForm()">
	<table>
			<label><center><u>REGISTER FORM</u></center></label>
		<tr>
			<td>Full name:</td><br>
			<td><input name="name" type="text" placeholder="Full name"/><td>
		</tr>
			<tr>
			<td>Street Address:</td>
			<td><input name="address" type="text" placeholder="Address"/><td>
        </tr>
	
		<tr>
			<td>Phone:</td>
			<td><input name="telephone" type="number" placeholder="Phone" /></td>
		</tr>
		<tr>
            <td>Email:</td>
			<td><input name="email" type="text"  placeholder="Email"/><td>
		</tr>
		
		<tr>
            <td>Password:</td> 
			<td colspan"3"><input name="password"type="password"   placeholder="Password"/></td>
			
		</tr>	

			<tr> 
	 	<td></td> 
	 	<td> 
	 		
 	 	 	 <form method="post" action="index.php">
	 	<input type="submit" name="submit" value="Send"> </form>
 	 	 <input type="reset" value="Clear">
 	 	 	</td> 
 	 	</tr> 

		</table>

	</form>

</body>
<div style="background-color:gray;text-align:center;padding:10px;margin-top: 30%; margin-bottom: 0px;">© copyright</div>
</div>
</html>