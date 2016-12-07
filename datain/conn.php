<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
	$con=mysql_connect("localhost","root","0000") or die("ERROR #1");
	$db=mysql_select_db("u431700954_glock");
?>