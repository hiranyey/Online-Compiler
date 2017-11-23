<?php
require_once 'core.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher HomePage</title>
	<link rel="shortcut icon" href="d.ico" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
	<style>
		body 
		{
   		background-image: url("back.jpg");
		}
		.TITLE
		{
			font-family: 'Roboto Condensed', sans-serif;
			color:black;
			
		}
		.normal
		{
			font-family: 'Roboto Condensed', sans-serif;
		}
	</style>
</head>
<body>
	<br>
	<div class="container">
		<nav class="navbar navbar-dark bg-white">
			<div class="nav navbar-nav">
					<h1 class="TITLE"> TEACHER'S PORTAL </h1>
			</div>
			<div class="nav navbar-nav navbar-right">
				<a href="password.php">CHANGE PASSWORD</a>
				<a href="logout.php">LOG OUT!!!</a>
			</div>
		</nav>
	</div>
	<br>
	<div class="container">
		<div class="jumbotron">
			<center>     
			 	<h3>WELCOME..!!!<?php echo " ".getfield("name");?></h3>
			</center>
			 	<br>
			 	<br>
			    <button type="button" class="btn btn-primary" id="assignment">ASSIGN ASSIGNMENTS TO STUDENTS</button>
				<br>
				<br>
				<a href="seeassignment.php"class="btn btn-primary" >VIEW SUBMITTED ASSIGNMENTS OF STUDENTS</a>
			<div id="FILL"></div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		    <script> 
		    $(document).ready(
		    	function() {
   				 $("#assignment").click(function(){
        			$("#FILL").load("assignments.php"); 
    			});
			});
		    </script>  
</body>
</html>