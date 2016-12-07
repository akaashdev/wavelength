<?php
	include_once("conn.php");
	session_start();
	$sql="SELECT uganda,sweden FROM gwalior WHERE idee='$_SESSION[idee]' ";
	$result= mysql_query($sql) or die(mysql_error());
	while($info=mysql_fetch_assoc($result, MYSQL_ASSOC))
	{
		echo"Welcome, ".$info['uganda']."!";
        echo "<br>"."<em>Your score: </em>".$info['sweden'];
	}
?>