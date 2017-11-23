<?php
require 'mysql_connect.inc.php';
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
function getfield($field)
{       $w=$_SESSION['user_id'];
	$query="SELECT * from `users` WHERE `ID`='$w'";
	if($query_run=mysql_query($query))
	{   
		if($query_data=mysql_result($query_run,0,$field))
		{
			return $query_data;
		}
	}
	else
    {   
		echo mysql_error();
	}
	
}
function LOGGED_IN()
{
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
	{
		if(getfield(PERSON)==1)return 1;
		if(getfield(PERSON)==0)return 2;
	}
	else
	{
		return 0;
	}
}
?>
