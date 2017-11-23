<div class=TITLE><center><h1>Assignment submitted</h1></center></div>
<?php
require 'core.inc.php';
$query="SELECT * from `users`";
if($myquery=@mysql_query($query))
{   
    $Row = mysql_fetch_array($myquery,MYSQL_ASSOC);
	$i=0;   
	echo "<hr>";
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
		  
		echo'  <div class="container"><div class="panel panel-default" >
		<div class="panel-heading">';
		  echo "<b>ASSIGNMENT NO 	".$parts." OF ";
                   echo $rest.":-<br></b> ";
          
                        echo"</div></div></div>";
		  $query2='SELECT * from `assignments`';
		  if(mysql_query($query2))
		  {
			  for($i=1;$i<6;$i++)
			  {
				  $query3="SELECT `$name` from `assignments` WHERE `ID`='$i'";
				  if($q_ans=mysql_query($query3))
				  {
					  $q=mysql_result($q_ans,0,$name);
					  if($q==0)
					  {   
						  $query4="SELECT * from `users` WHERE `ID`='$i'";
						  
						 
						 
							if($q4_ans=mysql_query($query4))
							{
						 $row = mysql_fetch_row($q4_ans);
						 echo'<div class="row">
						<div class="col-sm-2">
						</div>
						<div class="col-sm-8">
						<div class="panel panel-default" >
						<div class="panel-heading">';
						 echo $row[1]."  HAS NOT SUBMTTED ASSIGNMENT<br><br>";
						  
						  
						 echo' </div>
						  </div>
						  </div>
						  <div class="col-sm-2">
						  </div>
						  </div>';						  
						  
						  }
						  
						  else
						  {
							  echo mysql_error();
						  }  
					  }
					  else if($q==1)
					  {
					     $query4="SELECT * from `users` WHERE `ID`='$i'";
						 if($q4_ans=mysql_query($query4))
						  {
						  $row = mysql_fetch_row($q4_ans);
						  echo'<div class="row">
						<div class="col-sm-2">
						</div>
						<div class="col-sm-8">
						<div class="panel panel-default">
						<div class="panel-heading">';
						  echo $row[1]."  HAS SUBMITTED ASSIGMENT<br>";  
						  echo' </div>
						  </div>
						  </div>
						  <div class="col-sm-2">';
						    $file='uploads/'.$name."/".$row[2].".txt";
						 echo' <div class="row">
						<div class="col-sm-5">
						</div>
						';
						 echo "<form action='$file' method='POST'>
	                                          <input type='submit' name='$name' value='VIEW' class='btn btn-primary'>
	                                              </form>";
						echo' 
						</div>';
									echo'  </div>
						  </div>';					
						
						  }
						  else
						  {
							  echo mysql_error();
						  }
					  }
				  }
				  else
				  {
					  echo mysql_error();
				  }
			  }
		  }
	      else
		  {
			mysql_error();  
		  }
		 }
    $i++;
}
echo "<hr>";
}
else 
{
	mysql_error();
}
?>

	<!DOCTYPE html>
<html lang="en">

<head>
  <title>SUBMITTED ASSIGNMENTS</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="d.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">

<style>
body {
    background-image: url("back.jpg");
}
hr{
	border-width: 5px;
}
.TITLE
		{
			font-family: 'Roboto Condensed', sans-serif;
			color:white;
			
		}
</style>


</head>
<body>

		 
	  
	  

	  
</body>
</html>