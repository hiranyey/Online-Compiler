<?php
require_once 'core.inc.php';
if(isset($_POST['username'])&&isset($_POST['password']))
   {
	   $user=$_POST['username'];
	   $pass1=$_POST['password'];
	   $pass=md5($pass1);
	   if(!empty($user)&&!empty($pass))
	   {
	         
		  $query="SELECT * from `users` WHERE `USERNAME`='$user' AND `PASSWORD`='$pass'";
		  if($query_run=mysql_query($query))
		  {
			  $number=mysql_num_rows($query_run);
			  if($number==0)
			  {
			  echo'
			  			<script>  
                        alert("WRONG PASSWORD AND USERNAME");
                        </script>';
			  }
			  else
			  {
				  $id=mysql_result($query_run,0,'ID');
				  $name=mysql_result($query_run,0,'NAME');
				 
				  $_SESSION['user_id']=$id;
				  header('Location:index.php');
			  }
		  }
		  else 
		  {
			 echo"
			  <script>  
                          alert('mysql_error()');
                          </script>";
		  }
	   }
	   else 
	   {
		   echo"
			  <script>  
                          alert('ENTRIES SHOULD NOT BE EMPTY');
                          </script>";
	   }
	   
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="shortcut icon" href="d.ico" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
	<style>
		body 
		{
   		background-image: url("back.jpg");
		}
		.TITLE
		{
			font-family: 'Roboto Condensed', sans-serif;
		}
		.normal
		{
			font-family: 'Roboto Condensed', sans-serif;
		}
	</style>
</head>
<body>
	<center>
		<img src="VIT.jpg" width="200" height="200">
		<br>
		<br>
		<div class="container">
			<div class="jumbotron">
				<div class="TITLE">
					<h1>VIT Asportal
						<br> 
						Better Version
					</h1>
				</div>
				<form action="<?php echo $current_file; ?>" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1" class="normal">USERNAME</label>
				    <input type="number" class="form-control" name="username" placeholder="Enter Username" required>
				    <small class="form-text text-muted">We'll never share your username with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1" class="normal">Password</label>
				    <input type="password" class="form-control" name="password" placeholder="Password" required>
				  </div>
				  <div class="form-check">
				    <label class="form-check-label">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
			 	</form>
	 		</div>
		</div>
	</center>
	
</body>
</html>
