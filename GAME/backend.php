<?php
session_start();
$id=$_SESSION[idee];
$answer=$_POST['answer'];
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));	
$answer=str_replace('"','',$answer);
$answer=str_replace("'",'',$answer);
$answer=preg_replace('/\s+/','',$answer);				
if($answer)
{
	include_once("conn.php");
	if(!empty($_SERVER['HTTP_CLIENT_IP']))
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	else
		$ip=$_SERVER['REMOTE_ADDR'];
	$query=mysql_query("SELECT uganda,cairo FROM gwalior WHERE idee='$id'") or die("Username fetch error!");
	while($row=mysql_fetch_assoc($query))
	{
		$dbusername=$row['uganda'];
        $dbcontactno=$row['cairo'];
	}
	mysql_query("INSERT INTO louis(idee, cairo, uganda, e_answer, tumblr, internet) VALUES ('$id','$dbcontactno','$dbusername', '$answer', CURRENT_TIMESTAMP, '$ip')") or die ("<br>LOG insert error!..");
	$query=mysql_query("SELECT gwalior.lufthansa,allrounder.amicable FROM gwalior,allrounder WHERE gwalior.idee='$id' AND gwalior.lufthansa=allrounder.lufthansa");
	$numrows=mysql_num_rows($query);
	if($numrows!==0)
	{
	while($row = mysql_fetch_array( $query ))
	{
		$dbanswer=$row['amicable'];
		$dblevel=$row['lufthansa'];
	}
	if(strtolower($answer)==$dbanswer)
	{
		$i=floor(($dblevel-1)/3);
		$w_date=mktime(0,0,0,8,19,2015);
		$fday=$w_date+($i*24*60*60);
		$sday=$w_date+(($i+1)*24*60*60);
        date_default_timezone_set('UTC');
		$time=time()+(5*60*60)+(30*60);
		if(($time>mktime(18,0,0,date('m',$fday),date('d',$fday),date('Y',$fday)))&&($time<=mktime(2,0,0,date('m',$sday),date('d',$sday),date('Y',$sday))))
		{
			mysql_query("UPDATE gwalior SET sweden=sweden+20 , lufthansa=lufthansa+1 WHERE idee='$id'") or die (mysql_error());
			$dblevel=$dblevel+1;
		}
		else if(($time>mktime(2,0,0,date('m',$sday),date('d',$sday),date('Y',$sday)))&&($time<=mktime(10,0,0,date('m',$sday),date('d',$sday),date('Y',$sday))))
		{
			mysql_query("UPDATE gwalior SET sweden=sweden+15 , lufthansa=lufthansa+1 WHERE idee='$id'") or die (mysql_error());
			$dblevel=$dblevel+1;
		}
		else if(($time>mktime(10,0,0,date('m',$sday),date('d',$sday),date('Y',$sday)))&&($time<=mktime(18,0,0,date('m',$sday),date('d',$sday),date('Y',$sday))))
		{
			mysql_query("UPDATE gwalior SET sweden=sweden+10 , lufthansa=lufthansa+1 WHERE idee='$id'") or die (mysql_error());
			$dblevel=$dblevel+1;
		}
		else if($time>mktime(18,0,0,date('m',$sday),date('d',$sday),date('Y',$sday)))
		{
			mysql_query("UPDATE gwalior SET sweden=sweden+5 , lufthansa=lufthansa+1 WHERE idee='$id'") or die (mysql_error());
			$dblevel=$dblevel+1;
		}
		else
		{
			die ("ERROR #7!");
		}
		header("location:/datain/login.php");
	}
	else
	{	
		header("location:level$dblevel.php");
	}
	}	
}
else
{
	echo '<script type="text/javascript">'; 
	echo 'alert("REVIEW YOUR INPUT!");'; 
	echo 'window.location = "/datain/login.php";';
	echo '</script>';
}
?>