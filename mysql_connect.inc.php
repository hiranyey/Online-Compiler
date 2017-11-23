<?php 
$host='localhost';
$user='root';
$pass='';
$db='students';
if(@mysql_connect($host,$user,$pass)&&@mysql_select_db($db))
  {
	; 
  }
  else 
  {
	  die("COULD NOT CONNECT TO DB");
  }
	
?>