<?php
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
echo "ENTERED!";
if(isset($_SESSION[idee]))
{
	$wday=mktime(18,0,0,8,19,2015);
	$cur=time()+(5*60*60)+(30*60);
	$day=($cur-$wday)/(24*60*60);
        include_once("conn.php");
	$sql=mysql_query("SELECT lufthansa FROM gwalior WHERE idee='$_SESSION[idee]'");
    	$result=mysql_fetch_array($sql);
	$dblevel=$result[lufthansa];
	echo "<BR>".$dblevel;
	if((floor(($dblevel-1)/3))<ceil($day))
		header("location:/GAME/level$dblevel.php");
	else
		header("location:/GAME/completed.php");
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">


    <title>Wavelength Registration</title>

    <style>
        @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
        @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
        body {
            background: #000;
            background-image: url("bg.jpg");
            background-repeat: no-repeat;
            background-position: center;
        }
        .wrapper {
            width: 420px;
            margin: 0 auto;
        }

        h1 {
            font-family: 'Exo', sans-serif;
            text-align: center;
            padding: 30px 0px 0px 0px;
            color: #FFF;
            text-transform: uppercase;
            text-shadow: #000 0px 1px 5px;
            margin: 0px;
        }

        h2 {
            font-family: 'Exo', sans-serif;
            text-align: center;
            padding: 10px 0px 20px 0px;
            color: #FFF;
            text-transform: uppercase;
            margin: 0px;
        }

        h4 {
            font-family: 'Exo', sans-serif;
            text-align: center;
            padding: 30px 0px 0px 0px;
            color: #FFF;
            text-transform: lowercase;
            text-shadow: #000 0px 1px 5px;
            margin: -35px 0px 20px 0px;
        }

        p {
            font-family: 'Exo', sans-serif;
            text-align: center;
            color: #FFF;
            text-shadow: #000 0px 1px 5px;
        }

        .form {
            width: 100%;
        }

        input[type="text"], input[type="email"], input[type="institution"], input[type="number"] {
            font-family: 'Exo', sans-serif;
            width: 98%;
            padding: 15px 0px 15px 8px;
            border-radius: 5px;
            box-shadow: inset 4px 6px 10px -4px #000, 0 1px 1px -1px #4cff00;
            background: #000;
            outline: none;
            border: none;
            border: 1px solid black;
            margin-bottom: 10px;
            color: #fff;
            opacity: 0.9;
            text-shadow: #000 0px 1px 5px;
        }


        input[type=password] {
            width: 98%;
            padding: 15px 0px 15px 8px;
            border-radius: 5px;
            box-shadow: inset 4px 6px 10px -4px rgba(0, 0, 0, 0.3), 0 1px 1px -1px #4cff00;
            background: #000;
            outline: none;
            border: none;
            border: 1px solid black;
            margin-bottom: 10px;
            color: #FFF;
            opacity: 0.9;
            text-shadow: #000 0px 1px 5px;
            font-family: 'Exo', sans-serif;
        }

        input[type="submit"] {
            font-family: 'Exo', sans-serif;
            width: 100%;
            background: #000;
            padding: 3px;
            border-radius: 1px;
            outline: 1px solid #FFF;
            border: 1px solid #4cff00;
            font-family: 'As seen on TV';
            font-size: 16px;
            color: #4cff00;
            text-transform: uppercase;
            text-shadow: #000 0px 1px 5px;
            border: 1px solid #000;
            opacity: 0.6;
        }
        input[type="button"] {
            font-family: 'Exo', sans-serif;
            width: 100%;
            background: #000;
            padding: 3px;
            border-radius: 1px;
            outline: 1px solid #FFF;
            border: 1px solid #4cff00;
            font-family: 'As seen on TV';
            margin-top: 10px;
            font-size: 16px;
            color: #4cff00;
            text-transform: uppercase;
            text-shadow: #000 0px 1px 5px;
            border: 1px solid #000;
            opacity: 0.6;
        }
        input:focus {
            box-shadow: inset 4px 6px 10px -4px #000, 0 1px 1px -1px #000;
            background: #000;
            -webkit-transition: 1s ease;
            -moz-transition: 1s ease;
            -o-transition: 1s ease;
            -ms-transition: 1s ease;
            transition: 1s ease;
        }

        input[type="submit"]:hover {
            opacity: 1;
        }
        input[type="button"]:hover {
            opacity: 1;
        }

        .email-help, .password-help {
            font-family: 'Exo', sans-serif;
            display: none;
            color: #4cff00;
            padding: 0px;
            margin: 0px 0px 15px 0px;
        }

        .optimize {
            position: fixed;
            right: 3%;
            top: 0px;
        }
        #dialogoverlay {
            display: none;
            opacity: .8;
            position: fixed;
            top: 0px;
            left: 0px;
            background: #000;
            width: 200%;
            z-index: 10;
        }

        #dialogbox {
            display: none;
            position: fixed;
            background: #4cff00;
            border-radius: 3px;
            width: 550px;
            z-index: 10;
        }

            #dialogbox > div {
                background: #FFF;
                margin: 2px;
            }

                #dialogbox > div > #dialogboxhead {
                    background: #403c3c;
                    font-size: 19px;
                    padding: 10px;
                    color: #4cff00;
                }

                #dialogbox > div > #dialogboxbody {
                    background: #141313;
                    padding: 20px;
                    color: #fff;
                }

                #dialogbox > div > #dialogboxfoot {
                    background: #403c3c;
                    padding: 10px;
                    text-align: right;
                }
        
    </style>
    <script>
    function CustomAlert() {
        this.render = function (dialog) {
            var winW = window.innerWidth;
            var winH = window.innerHeight;
            var dialogoverlay = document.getElementById('dialogoverlay');
            var dialogbox = document.getElementById('dialogbox');
            dialogoverlay.style.display = "block";
            dialogoverlay.style.height = winH + "px";
            dialogbox.style.left = (winW / 2) - (550 * .5) + "px";
            dialogbox.style.top = "100px";
            dialogbox.style.display = "block";
            document.getElementById('dialogboxhead').innerHTML = "From Admin";
            document.getElementById('dialogboxbody').innerHTML = dialog;
            document.getElementById('dialogboxfoot').innerHTML = '<button onclick="window.location.reload()">OK</button>';
        }
    }


    var Alert = new CustomAlert();
    </script>
</head>

<body>

    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <div class="wrapper">

        <h1>WAVELENGTH</h1>

        <h4>match yours with ours</h4>
        <h2>DATA <font color="#4cff00"> IN</font> </h2>
        <div id="dialogoverlay"></div>
        <div id="dialogbox">
            <div>
                <div id="dialogboxhead"></div>
                <div id="dialogboxbody"></div>
                <div id="dialogboxfoot"></div>

            </div>
        </div>
        <script>
    function check() {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        if (email == "" || password == "") {
            Alert.render('Check your Contact Number and Password');
            return false;
        }
        else {
            return true;

        }
    }
        </script>

        <form action="log_in.php" method="post" class="form" onsubmit="return check()">
                
            <input type="text" class="email" placeholder="Email-ID/Contact-Number" name="email" id="email">
            <div>
                <p class="email-help">Please enter your email address or contact number.</p>
            </div>
            <input type="password" class="password" placeholder="Password" name="password" id="password">
            <div>
                <p class="password-help">Please enter your password.</p>
            </div>
            
            <input type="submit" class="submit" value="LOGIN"><br>
            <input type="button" class="submit" value="SIGNUP" onclick="location.href='signup.html'">

        </form>
</div>
    <p class="optimize">

    </p>

    <script src='http://assets.codepen.io/assets/libs/fullpage/jquery-ab8e840c3dad7ccf2deadb8c40d53bdb.js'></script>

    <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage('resize', "*");
    }
    </script>

    <script src="http://assets.codepen.io/assets/common/stopExecutionOnTimeout-28158334dc770ccf9e26198819d22b9a.js"></script>

    <script>
$('.email').focus(function () {
    $('.email-help').slideDown(500);
}).blur(function () {
    $('.email-help').slideUp(500);
});
$('.password').focus(function () {
    $('.password-help').slideDown(500);
}).blur(function () {
    $('.password-help').slideUp(500);
});
    </script>
</body>

</html>