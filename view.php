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
		<h1><center>ORDER FORM</center> </h1>
	<form name ="myForm" method="GET">	
	<table border="1px solid">
		<tr>
			<th>ORDER NAME</th>
			<th>ORDER DATE</th>
			<th>ORDER PRICE</th>
				
			</td>
			</tr>
			
				<?php
					
					include "connection.php";
					$sql="SELECT o_name,Ord_date,price FROM orders join iterms WHERE orders.O_ID=O_ID";
					$st=$con->query($sql);
					while($row=$st->fetch(PDO::FETCH_ASSOC)){
					   	echo "<tr><td>";
   						echo(htmlentities($row['O_ID']));
    					echo("</td><td>");
    					echo (htmlentities($row['o_name']));
    					echo("</td><td>");
    					echo (htmlentities($row['Ord_date']));
    					echo("</td><td>");
    					echo (htmlentities($row['price']));
						echo("</td></tr>\n");
						
						header("location:view.php");


					}


			?>

		
			
		

		</table>

	</form>
</div>

		
</div>
<div style="background-color:gray;text-align:center;padding:10px;margin-top: 30%; margin-bottom: 0px;">© copyright</div>

		</div>
		
	

</body>
</html>