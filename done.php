<?php 
require 'core.inc.php';
header("refresh: 2 url=index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGGING OUT!!</title>
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
			color:white;
			position: absolute;
    		width: 100px;
    		height: 50px;
		    top: 50%;
		    left: 50%;
		    margin-left: -50px; /* margin is -0.5 * dimension */
		    margin-top: -25px; 
		}
			#progressbar{
			  height: 26px;
			  position: absolute;
			  left: 50%;
			  top: 50%;
			  width: 200px;
			  background: rgba(159, 159, 159, 0.5);
			  border-radius: 10px;
			  margin: -20px 0 0 -100px;
			  padding: 2px;
			}
			#loading{
			  transition: all 500ms ease;
			  height: 20px;
			  width: calc(100% - 10px);
			  border-radius: 8px;
			  background: #474747;
			  position: absolute;
			  margin: 3px;
			  display: inline-block;
			  animation: load 2.5s ease infinite;
			}
			#load{
			  font-family: Arial;
			  font-family: 'Roboto Condensed', sans-serif;
			  font-weight: bold;
			  text-align: center;
			  margin-top: -30px;
			  color: 
			}
			@keyframes load{
			  0%{
			    width: 2%;
			  }
			  10%{
			    width: 10%;
			  }
			}
	</style>
</head>
<body>
<div id="progressbar">
  <span id="loading"></span>
  <div id="load">Assigning Questions!!</div>
</div>
</body>
</html>