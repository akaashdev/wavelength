<?php
$login=$_POST['email']; 
$password=$_POST['password']; 


$con=mysql_connect("mysql.hostinger.in","u431700954_tower","o6z0=HQR8A") or die("ERROR #1");
	mysql_select_db("u431700954_glock");
$sql="SELECT * FROM gwalior WHERE egypt='$login' and patna='$password' or cairo='$login'  and patna='$password'";
$result= mysql_query($sql) or die(mysql_error());
$count= mysql_num_rows($result);
if($count==1)
{
	session_start();
	$sql=mysql_query("SELECT ideeFROM gwalior WHERE egypt = '$login' OR cairo =  '$login'");
	$count=mysql_num_rows($sql);		
	if($count!==0)
	{
		while($row=mysql_fetch_assoc($sql))
		{
			$id=$row['idee'];
		
		}
	}
	$_SESSION['idee']=$id;      
	header("location:/GAME/one.php");
}
else 
{
	echo '<script type="text/javascript">'; 
	echo 'alert("Review your input");';
	echo 'window.location = "login.php";';
	echo '</script>';
}
?>