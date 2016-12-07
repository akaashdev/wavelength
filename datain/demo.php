<?php
include_once("conn.php");
$name=$_POST['name'];
$institution=$_POST['institution'];
$email=$_POST['email'];
$password=$_POST['password'];
$contactno=$_POST['contactno'];
$name=addslashes($name);
$institution=addslashes($nstitutuion);
$email=addslashes($email);
if(!empty($_SERVER['HTTP_CLIENT_IP']))
	$ip=$_SERVER['HTTP_CLIENT_IP'];
elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
else
	$ip=$_SERVER['REMOTE_ADDR'];
if($contactno>6000000000)
{
	if((preg_match("^(?!.*\.{2,}.*$\s)[a-zA-Z]+$/",$name))||(preg_match("^(?!.*\.{2,}.*$\s)[a-zA-Z]+$/",$institution))||(preg_match("^(?!.*\.{2,}.*$\s)[a-zA-Z]+$/",$email))||(preg_match("^(?!.*\.{2,}.*$\s)[a-zA-Z]+$/",$contactno)))
	{
		if($name!='0'||$institution!='0'||$email!='0'||$contactno!='0')
		{
			$sql= "SELECT egypt,cairo FROM gwalior WHERE egypt='$email' or cairo='$contactno'";
			$res=mysql_query($sql) or die("Email check error!");
			if(mysql_num_rows($res)!=0)
			{
				echo '<script type="text/javascript">'; 
				echo 'alert("Contact number or email id already registered!");';
				echo 'window.location = "signup.html";';
				echo '</script>';
			}
			else
			{
				$str=mysql_real_escape_string($institution);
				$order = "INSERT INTO gwalior(uganda,indore,egypt,patna,cairo,internet)VALUES('$name','$str','$email','$password','$contactno','$ip')";
				$result = mysql_query($order) or die(mysql_error());	
				if($result)
				{
					header("location:confirmation.html");
					echo "THIS!";
				}
				else
				{
					echo("<br>TRY AGAIN");
				}
			}
		}
		else
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Enter valid details!");';
			echo 'window.location = "signup.html";';
			echo '</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">'; 
	    echo 'alert("Enter valid details!");';
	    echo 'window.location = "signup.html";';
	    echo '</script>';
	}
}
else
{
	echo '<script type="text/javascript">'; 
	echo 'alert("Enter a valid contact number!");';
	echo 'window.location = "signup.html";';
	echo '</script>';
}
?>
