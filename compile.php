<?php
require_once 'core.inc.php';    
	$code=$_POST["code"];
	$input='["'.$_POST["input"].'"]';
	$lang=0;
	if($_SESSION['lang']=="c")
		$lang=1;
	else if($_SESSION['lang']=="cpp")
		$lang=2;
	else if($_SESSION['lang']=="java")
		$lang=3;
	else
		$lang=5;
	if($input=="")
	{
		$input="['1']";
	}
$post=[
	'source'=>$code,
	'lang'=> 1,
	'testcases'=>$input,
	'api_key'=>"hackerrank|1571962-2213|c9bd1d8a2c8d21cc4244fb4d8b37080d0167ed5a",
	];
$ch= curl_init("http://api.hackerrank.com/checker/submission.json");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
$json = json_decode($server_output, true); 
if($json['result']['compilemessage']==""){
	$target_dir = 'uploads/'.$_SESSION['sub'].'/';
	$q=$_SESSION['sub'];
	$name=getfield('USERNAME');
	$filename_code1=$target_dir.$name.".txt";
	$file_code=fopen($filename_code1,"w+");
	$id="NAME:- ".getfield('NAME')."\n";
	$id1="GR NO:-".$name."\n";
	$id2="\n\nSOURCE CODE:-\n";
	$id3="INPUT:-\n";
	$id4="\nOUTPUT:-\n";
	fwrite($file_code,$id);
	fwrite($file_code,$id1);
	fwrite($file_code,$id3);
	fwrite($file_code,$_POST["input"]);
	fwrite($file_code,$id2);
	fwrite($file_code, $code);
	fwrite($file_code, $id4);
	fwrite($file_code, implode("",$json['result']['stdout']));
	fclose($file_code);
	$i=getfield('ID');
	$q=$_SESSION['sub'];
	$query="UPDATE `assignments` SET `$q` ='1'  WHERE `ID` = '$i'";
	echo "<div class='container' style='background:white;'>OUTPUT:_".implode("",$json['result']['stdout'])."</div>";
	if(!mysql_query($query))echo mysql_error();
	else
		header("refresh:4 url=index.php");
}else
{
	echo "ERROR:-";
	print_r($json['result']['compilemessage']);
}
?>