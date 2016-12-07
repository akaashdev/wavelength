<?php
session_start();
if(!isset($_SESSION[idee])){
header("location:/index.html");
}
?>
<!DOCTYPE HTML>
<html>

	<head>
        <style>
           div {
    width: 170px;
    height: 170px;
    background: white;
    -webkit-transition: width 2s, height 4s; /* For Safari 3.1 to 6.0 */
    transition: width 2s, height 4s;
	border-radius: 50%;
	
}

div:hover {
    width: 300px;
    height: 300px;
}
body{
background: black;
}
.img-circle {
    border-radius: 30%;
	height: 170px0px;
	width: 170px;
}
a {
  color:inherit;
  text-decoration: none;
 }
p{
color: #4cff00;

}
.left{float:left;}
        </style>
		<title>Wavelength Contact</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
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
								<li><a href="/datain/login.php " class="icon fa-gamepad"><span class="label">Facebook</span></a></li>
                                <li><a href="http://www.facebook.com" class="icon fa-key"   target="_blank"><span class="label">Dribbble</span></a></li>
                                <li><a href="dashboard.php" class="icon fa-list-ol"><span class="label">Github</span></a></li>
                                <li><a href="rules.php" class="icon fa-info"><span class="label">Email</span></a></li>
                                <li><a href="#" class="icon fa-phone"><span class="label">Email</span></a></li>
                                <li><a href="logout.php" class="icon fa-power-off"><span class="label">Email</span></a></li>

                        </ul>
</nav>
</div>
                     <center>


<div class="left" style="margin-left:300px"><img src="man.png" class="img-circle" ><br><u>ADMIN I</u><br>NAME:Akaash Dev S.C<br>
CONTACT: 9840493603<br>
FACEBOOK:<a href="https://www.facebook.com/scakaashdev" target="_blank">Click Here </a><br>
</div>
<!--<h3><b><u>ADMIN II</b></u></h3>-->
<div class="left" style="margin-left:100px"><img src="man.png" class="img-circle" ><br><u>ADMIN II</u><br>NAME: Aravind.P<br>
CONTACT: 9962773118<br>
FACEBOOK:<a href="https://www.facebook.com/allen.aravind" target="_blank">Click Here </a><br>
</div>
<!--<h3><b><u>ADMIN III</b></u></h3>-->

<div class="left"style="margin-left:100px" ><img src="woman.png" class="img-circle" ><br><u>ADMIN III</u><br>NAME: Priya.V<br>
CONTACT: 9840815369<br>
FACEBOOK:<a href="https://www.facebook.com/priya.vaidyanathan.773" target="_blank">Click Here </a><br>
</div>


</center>

                    
                    
            </div>
            </header>
        
		</div>
	</body>
</html>