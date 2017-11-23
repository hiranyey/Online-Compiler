<?php
require_once 'core.inc.php';
$FLAG=0;
if(isset($_POST['s_name'])&&isset($_POST['asgno'])&&isset($_POST['q1'])&&isset($_POST['q2'])&&isset($_POST['q3'])&&isset($_POST['q4'])&&isset($_POST['q5']))
  {
	if(!empty($_POST['s_name'])&&!empty($_POST['asgno'])&&!empty($_POST['q1'])&&!empty($_POST['q2'])&&!empty($_POST['q3'])&&!empty($_POST['q4'])&&!empty($_POST['q5']))
    {
		$name=rtrim($_POST['s_name']);
		$no=$_POST['asgno'];
		$q1=$_POST['q1'];
		$q2=$_POST['q2'];
		$q3=$_POST['q3'];
		$q4=$_POST['q4'];
		$q5=$_POST['q5'];
		$language=$_POST['language'];
		$array=array($q1,$q2,$q3,$q4,$q5);
		$n=$name.'_'.$no;
		$n = str_replace(' ', '_', $n);
		$query="ALTER TABLE `users` ADD `$n` VARCHAR(500) NOT NULL";
		$query2="ALTER TABLE `assignments` ADD `$n` INT NOT NULL";
		$target_dir = 'uploads/'.$n.'/';
		
        $tar=$target_dir;
        $query3="INSERT INTO `language` (`ASSIGNMENT`, `language`) VALUES ('$n','$language')";
       if(!$query_r=mysql_query($query3))
		{
			echo mysql_error();
		}
		if(!$query_r=mysql_query($query2))
		{
			echo mysql_error();
		}
        if (!file_exists($tar)) 
        {
        mkdir($tar, 0777, true);
        }
		if($query_run=mysql_query($query))
		{
			for($i=0;$i<5;$i=$i+1)
			{   $nu=$i+1;
		        $w=$array[$i];
				$query_f="UPDATE `users` SET `$n` ='$w'  WHERE `ID` = '$nu'";
				if(mysql_query($query_f))
				{
					$FLAG=1;
				}
				
			}
			if($FLAG==1){
			
			header('Location:done.php');
			
			}
		}
		else 
		{
			echo mysql_error();
		}
	}
	else 
	{
		echo "ENTER ALL THE FIELDS";
	}
   }
	
?>
<div class="TITLE">
<center><h2>ENTER THE QUESTIONS...!!!</h2> 
<form action="<?php echo $current_file; ?>" method="POST" role="form">
ENTER SUBJECT NAME:-
<input style="height:40px; width:680px" type="text" name="s_name" required><br><br>
ENTER ASSIGNMENT NO:-
<input style="height:40px; width:680px" type="number" name="asgno" required><br><br>
QUESTIONS 1:
<input style="height:80px; width:760px" type="text" name="q1" required><br><br>
QUESTIONS 2:
<input style="height:80px; width:760px" type="text" name="q2" required><br><br>
QUESTIONS 3:
<input style="height:80px; width:760px" type="text" name="q3" required><br><br>
QUESTIONS 4;
<input style="height:80px; width:760px" type="text" name="q4" required><br><br>
QUESTIONS 5:
<input style="height:80px; width:760px" type="text" name="q5" required><br><br>
Select Language for assignment :
<select name="language" id="language">
   <option value="c">C</option>							
   <option value="cpp">C++</option>		
   <option value="java">Java</option>							
   <option value="python3.2">Python</option>
</select>
<br><br>
<input type="submit" class="btn btn-primary" value="SUBMIT ALL QUESTIONS TO STUDENTS">
</form>
</center>
</div>
