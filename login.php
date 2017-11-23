<!DOCTYPE html>
<html lang="en">

<head>
  <title>STUDENT'S ID</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="d.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body {
    background-image: url("back.jpg");
}
h1{
font-size: 3em;
}
  
</style>


</head>
<body>

<div class="container">
  
  <div class="row">
    <div class="col-sm-4">
    </div>
	
    <div class="col-sm-4">
    <br><br>
    <h4 style="color: white;"><center> ASSIGNMENT SUBMISSION PORTAL</center> </h4>
    <br><br>
    
    </div>
     <div class="col-sm-2">
      
  <ul class="nav nav-stacked">
    <br> <br>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color:white;"> MORE</a>
      <ul class="dropdown-menu">
        <li><a href="password.php">CHANGE PASSWORD</a></li>
        <li><a href="logout.php">LOG OUT!!!</a></li>
        

    </div>
    <br><br><br>

    <div class="col-sm-4">

    </div>
<?php
require 'core.inc.php';
$w=$_SESSION['user_id'];
echo "<br><br><br>";
$query="SELECT * from `users` WHERE `ID`='$w'";
if($myquery=@mysql_query($query))
{
    $Row = mysql_fetch_array($myquery,MYSQL_ASSOC);
	    $i=0;
		foreach($Row as $name => $value)
		{

		 if($i>=5)
		 {
	      $n=strrev($name);
          $q=strstr($n, '_', true);
          $cut_size=strlen($q)+1;
          $rest=substr($name,0,-$cut_size);
		  $parts=end(explode('_',$name));
		  $rest = str_replace('_', ' ', $rest);
		  echo"<div class='row'>
       	  <div class='col-sm-12' style='font-family:courier;'>
          <div class='panel panel-default' style='text-align:center;' >
          <div class='panel-heading'>";
          echo "ASSIGNMENT NO 	".$parts." OF ";
          echo $rest." is<br> ";
          echo "<b>".$value."</b>";
          echo "<br><br>";
        
        echo"
           </div>
           </div>
	       </div>
           </div>	
		   
	
		   <div class='row'>
		   
		   <div class='col-sm-2'>
		   </div>
		   <div class='col-sm-1'>
		   
		  <form action='mid.php' method='POST'>
                <input type='submit' name='$name' value='SUBMIT' class='btn btn-success'>
                </form>
				
		   </div>
		   <div class='col-sm-3'>
		   </div>
		   <div class='col-sm-2'>
		   
		      </div>
		      <div class='col-sm-2'>
		   
		   
		
		       <form action='mid2.php' method='POST'>
	           <input type='submit' name='$name' value='VIEW' class='btn btn-success'>
	           </form>
			   </div>
			   <div class='col-sm-2'>
		   <br><br><br>
		   </div><br>
		  </div>";
		  echo "<hr>";
		 }
		$i++;

		}

}
else
{
	echo mysql_error();
}
	
?>