<?php
session_start();
if(!isset($_SESSION[idee]))
{
    header("location:/index.html");
}
?>
<!DOCTYPE HTML>
<html>

	<head>
        
		<title>Wavelength Instruction</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
        <script language="javascript">
    function toggleCP() {
        var cp = document.getElementById("cp");
        cp.style.height = window.innerHeight - "px";
        if (cp.style.right == "0px") {
            cp.style.right = "-260px";
        } else {
            cp.style.right = "0px";
        }
    }
        </script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />




		</noscript>
	</head>
	<body class="loading">
     
        <div id="wrapper">
            <div id="bg"></div>
            <div id="overlay"></div>
            <div id="main">


                <!-- Header -->
                <header id="header">

                    <h1>WAVELENGTH</h1>
                    <h4> Match yours with ours</h4><br>
                    <div id="cpBtn" onclick="toggleCP()">

                    </div>
                    <div id="cp">
                        <nav>


                            <div class="contact-order">
                                <?php
									include_once("name.php");
                                ?>

                            </div>



                            <ul>
                                <li><a href="/datain/login.php" class="icon fa-gamepad"><span class="label">Facebook</span></a></li>
                                <li><a href="https://www.facebook.com/pages/Wavelength/546641892104962?fref=ts" class="icon fa-key" target="_blank"><span class="label">Dribbble</span></a></li>
                                <li><a href="dashboard.php" class="icon fa-list-ol"><span class="label">Github</span></a></li>
                                <li><a href="rules.php" class="icon fa-info"><span class="label">Email</span></a></li>
                                <li><a href="contact.php" class="icon fa-phone"><span class="label">Email</span></a></li>
                                <li><a href="logout.php" class="icon fa-power-off"><span class="label">Email</span></a></li>

                            </ul>
                        </nav> 
                    </div>
                    
                    <h3><font size="3px" color="#4cff00">INSTRUCTIONS</font><br></h3>
                    <p>
                       <b> 1.</b> The hunt begins on 1st of September, at 6 p.m IST.<br>
                       <b> 2.</b> Play fair. Play just.<br>
                       <b> 3.</b> High speed Internet and Search engines are your true ammunition.<br>
                       <b> 4.</b> Facebook houses the clues.<br>
                       <b> 5.</b> Case sensitivity isn't our thing.Also special characters and space. <br>
                       <b> 6.</b> Sharing is encouraged. But not when it comes to answers.<br>
<b>7.</b> The point allocation is as follows: 20 points for each level <br>cracked from 6 p.m to 1.59 a.m;15 points from 2 a.m to 9.59 a.m; <br>10 points from 10 a.m to 5.59 p.m and 5 points thereafter.<br>
                        <b>8. </b>Top three will be awarded with a certificate and prize money.<br>
                        <b>9.</b> Contact us, The ADMINS for any queries.<br>
                      <b>  10.</b> ADMINS' decision is final.<br>
                       <b> 11.</b> Finally, We wish you all the best.
                    </p>
                    



            </header>

          
           
       </div>
		</div>
	</body>
</html>