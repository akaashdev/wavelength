<?php 
session_start();
session_destroy();
header("location:/datain/login.php");
?>