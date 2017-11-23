<?php
require_once 'core.inc.php';
$q=$_SESSION['sub'];
$query="SELECT * FROM `language` WHERE `ASSIGNMENT` LIKE '$q'"; 
$query_run=mysql_query($query);
$row = mysql_fetch_row($query_run);
echo "<div class='TITLE'><center><h1>Language:-".strtoupper($row[1])."</h1></center></div>";
if(isset($_POST['goback']))
  {
	  header('Location:login.php');
  }
if(isset($_POST['code']))
{
$languageID=$row[1];
$_SESSION['lang']=$languageID;
include 'compile.php';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SUBMIT</title>
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
	<center>
		<form action="<?php echo $current_file; ?>" method="post">
		<h2 >Enter Your code here:-</h2> <br>
		<textarea name="code" rows=10 cols=100 onkeydown=insertTab(this,event) id="code" required></textarea><br>
		<h2 >ENTER YOUR INPUT/(S):-</h2> <br>
		<textarea name="input" rows=5 cols=100 onkeydown=insertTab(this,event) id="code" required></textarea><br><br>
		<input type="submit" value="RUN!!!" class='btn btn-primary'><br>
	</center>
</body>
</html>
