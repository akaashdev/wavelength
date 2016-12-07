<?php

include_once("conn.php");
 session_start();
    $id=$_SESSION['idee'];
    $query=mysql_query("SELECT lufthansa FROM gwalior WHERE idee='$id'") or die("Username fetch error!..");
    while($row=mysql_fetch_assoc($query))
        echo $row['lufthansa'];
?>