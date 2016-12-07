<?php
session_start();
if(! isset($_SESSION[idee]))
{
	header("location:/index.html");
}
?>
<!DOCTYPE html>
<html>

<head>

    <title>Wavelength Dashboard</title>
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
    <style>


       .fixed_headers {
  width: 950px;
  table-layout: fixed;
  border-collapse: collapse;
  margin-left: 200px;
  font-family: "exo", sans-serif;

}
.fixed_headers th {
  color:#4cff00;
}
.fixed_headers th,
.fixed_headers td {
  padding: 5px;
  text-align: left;
}
.fixed_headers td:nth-child(1),
.fixed_headers th:nth-child(1) {
  width: 200px;
}
.fixed_headers td:nth-child(2),
.fixed_headers th:nth-child(2) {
  width: 200px;
}
.fixed_headers td:nth-child(3),
.fixed_headers th:nth-child(3) {
  width: 350px;
}
.fixed_headers td:nth-child(4),
.fixed_headers th:nth-child(4) {
  width: 100px;
}
.fixed_headers td:nth-child(5),
.fixed_headers th:nth-child(5) {
  width: 100px;
}
.fixed_headers thead {
  background-color: #1b1b1b;
  color: #fdfdfd;
}
.fixed_headers thead tr {
  display: block;
  position: relative;
}
.fixed_headers tbody {
  display: block;
  overflow: auto;
  width: 100%;
  height: 400px;
}
.fixed_headers tbody tr:nth-child(even) {
  background-color: #413f3f;
}
.old_ie_wrapper {
  height: 300px;
  width: 950px;
  overflow-x: hidden;
  overflow-y: auto;
}
.old_ie_wrapper tbody {
  height: auto;
}
@media(max-width: 412px)
{
       .fixed_headers {
  width: 350px;
  table-layout: fixed;
  border-collapse: collapse;
  margin-left: 15px;
  margin-right: 10px;
  font-family: "exo", sans-serif;

}
.fixed_headers th {
  color:#4cff00;
}
.fixed_headers th,
.fixed_headers td {
  padding: 5px;
  text-align: left;
}
.fixed_headers td:nth-child(1),
.fixed_headers th:nth-child(1) {
  width: 50px;
}
.fixed_headers td:nth-child(2),
.fixed_headers th:nth-child(2) {
  width: 80px;
}
.fixed_headers td:nth-child(3),
.fixed_headers th:nth-child(3) {
  width: 100px;
}
.fixed_headers td:nth-child(4),
.fixed_headers th:nth-child(4) {
  width: 50px;
}
.fixed_headers td:nth-child(5),
.fixed_headers th:nth-child(5) {
  width: 50px;
}
.fixed_headers thead {
  background-color: #1b1b1b;
  color: #fdfdfd;
}
.fixed_headers thead tr {
  display: block;
  position: relative;
}
.fixed_headers tbody {
  display: block;
  overflow: auto;
  width: 100%;
  height: 400px;
}
.fixed_headers tbody tr:nth-child(even) {
  background-color: #413f3f;
}
.old_ie_wrapper {
  height: 400px;
  width: 350px;
  overflow-x: hidden;
  overflow-y: auto;
}
.old_ie_wrapper tbody {
  height: auto;
}

}

    </style>
</head>
<body class="loading">

    <div id="wrapper">
        <div id="bg"></div>
        <div id="overlay"></div>
        <div id="main">


            <header id="header">

                <h1>WAVELENGTH</h1>
                <h4>Match yours with ours</h4>

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
                            <li><a href="http://www.facebook.com" class="icon fa-key" target="_blank"><span class="label">Dribbble</span></a></li>
                            <li><a href="dashboard.php" class="icon fa-list-ol"><span class="label">Github</span></a></li>
                            <li><a href="rules.php" class="icon fa-info"><span class="label">Email</span></a></li>
                            <li><a href="contact.php" class="icon fa-phone"><span class="label">Email</span></a></li>
                            <li><a href="logout.php" class="icon fa-power-off"><span class="label">Email</span></a></li>

                        </ul>
                    </nav>
                </div>
                <h3>  <font size="3px" color="#4cff00">DASHBOARD</font></h3>
 

                <table class="fixed_headers">
                    <thead>
                        <tr>
                            <th>RANK</th>
                            <th>NAME</th>
                            <th>INSTITUTION</th>
                            <th>SCORE</th>
                            <th>LEVEL</th>

                        </tr>
                    </thead>
                    <tbody>
                            
                                
                                <?php
								include_once("conn.php");
                                $leader=mysql_query("SELECT * FROM gwalior ORDER BY sweden desc,tumblr") or die("DB SQL error!..");
                                $numrows=mysql_num_rows($leader);
                                $rank=1;
                                if($numrows!=0)
                                {
									while($row=mysql_fetch_array($leader))
									{
										echo "<tr><td>$rank</td><td>$row[uganda]</td><td>$row[indore]</td><td>$row[sweden]</td><td>$row[lufthansa]</td></tr>";
										$rank++;
									}
                                }
                                else
									echo "No Gamers found!..";
                                ?>			
                            </tbody>
                </table>

                
    </div>
    

            </header>
 
        </div>

    </div>






</body>
</html>