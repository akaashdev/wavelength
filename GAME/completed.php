<!DOCTYPE HTML>
<html>

	<head>
        
		<title>Wavelength Completed</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script language="javascript">
function toggleCP(){
	var cp = document.getElementById("cp");
	cp.style.height = window.innerHeight - "px";
	if(cp.style.right == "0px"){
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

                <header id="header">

                    <h1>WAVELENGTH</h1>
                    <h4>match yours with ours</h4>


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
                                <li><a href="http://www.facebook.com/wavelength2k15" class="icon fa-key" target="_blank"><span class="label">Dribbble</span></a></li>
                                <li><a href="dashboard.php" class="icon fa-list-ol"><span class="label">Github</span></a></li>
                                <li><a href="rules.php" class="icon fa-info"><span class="label">Email</span></a></li>
                                <li><a href="contact.php" class="icon fa-phone"><span class="label">Email</span></a></li>
                                <li><a href="logout.php" class="icon fa-power-off"><span class="label">Email</span></a></li>

                            </ul>

					
                    </div>
                        <h3>
                            <font size="3px" color="#4cff00">
                               CONGRATULATION
                                

                            </font><br>

                        </h3>

                     <p>   
<div id="center">
                          And there ends the trial run. <br>Be here on 1st of september at 6.00 pm IST <br>to venture into the new, fresh levels of the main run. <br>Until then, BYE!!
</div>
                        </p>

                        </nav>

                    </div>
                </header>

            
          

        </div>
		</div>


	</body>
</html>