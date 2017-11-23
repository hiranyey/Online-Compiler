<?php
require_once 'core.inc.php';
if(LOGGED_IN()==1)	
  {
	  header('Location:teacher_login.php');
      	  
  }else if(LOGGED_IN()==2)
       {
	    header('Location:login.php');  
       }
  else
  {   
	  include 'login.inc.php';
  }
?>

