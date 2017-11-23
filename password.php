<?php 
require_once 'core.inc.php';
if(isset($_POST['old'])&&isset($_POST['new1'])&&isset($_POST['new']))
{
	
	$s=md5($_POST['old']);
	$new=md5($_POST['new']);
	$new1=md5($_POST['new1']);
	if(!empty($s)&&!empty($new)&&!empty($new1))
	{   $i=getfield('PASSWORD');
        if($s!=$i)
		{
			echo"
			  <script>  
                          alert('YOU TYPED WRONG PASSWORD');
               </script>";
		}
		else if($s==$new)
		{
		 echo"
			  <script>  
                          alert('YOU ENTERED THE SAME PASSWORD');
              </script>";
		}
		else if($new=$new1)
		{   
			$query="UPDATE `users` SET `PASSWORD` ='$new'  WHERE `PASSWORD` = '$i'";
			if(mysql_query($query))
			{
				 echo"
			  <script>  
                          alert('DONE');
               </script>";
				header("refresh:1 url=index.php");
			}
			else 
			{
				echo mysql_error();
			}
		}
	}
	else
	{
		echo"
			  <script>  
                          alert('ALL ENTRIES MUST BE ENTERED');
               </script>";
	}
		
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PASSWORD</title>
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
<br><br>
<div class="container">
	<div class="jumbotron">
		<div class="TITLE">
			<h3 style="color: black"> Here you can change  your password..!!</h3>
			   <form action="<?php echo $current_file; ?>" method="post">
			   ENTER OLD PASSWORD :
			  <input  class="form-control" type="password" name="old" placeholder="Enter your old password" required>
			  <br>ENTER NEW PASSWORD : 
			  <input class="form-control" type="password" name="new" placeholder="Enter your new password...." required>
			  <br>RE-ENTER NEW PASSWORD : 
			  <input class="form-control" type="password" name="new1" placeholder=" Re-Enter your new password...."required >
			  <br><input type="submit" name="submit" value="CHANGE PASSWORD" class="btn btn-success">
			  </form>
</div>
</div>
</div>
</body>
</html>
