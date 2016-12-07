<?php
$login=$_POST['email']; 
$password=$_POST['password']; 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));

$login= addslashes($login);
$password = addslashes($password);
/*$login= mysql_real_escape_string($login);
$password = mysql_real_escape_string($password);*/
include_once("conn.php");
$sql="SELECT * FROM gwalior WHERE egypt='$login' and patna='$password' or cairo='$login'  and patna='$password'";
$result= mysql_query($sql) or die(mysql_error());
$count= mysql_num_rows($result);
if($count==1)
{
	session_start();
	$sql=mysql_query("SELECT idee,lufthansa FROM gwalior WHERE egypt = '$login' OR cairo =  '$login'");
	$count=mysql_num_rows($sql);		
	if($count!==0)
	{
		while($row=mysql_fetch_assoc($sql))
		{
			$id=$row['idee'];
			$level=$row['lufthansa'];
		}
	}
	$_SESSION['idee']=$id;      
	header("location:/GAME/level$level.php");
}
else 
{
	echo '<script type="text/javascript">'; 
	echo 'alert("Review your input");';
	echo 'window.location = "login.php";';
	echo '</script>';
}
?>