<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="blog.css">
	<title>Minimum Bootstrap HTML Skeleton</title>
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">

	<!--  -->

	<style>

	</style>

</head>

<body style="background-image:url('images/parralalex.jpg');">
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active cursive"><a href="#" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">Home<span class="sr-only">(current)</span></a></li>
        <li class="cursive"><a href="contactus.php" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">Contact us</a></li>
          <li class="cursive"><a id="port" href="../catalogue.html" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;" class="alert1">Portfolio</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="cursive" class="nav-item dropdown"><a style="color: orange; font-family:'Lobster', cursive;font-size: 22px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding:40px;">
          <a class="dropdown-item" href="inbox.php" style="text-decoration:none;margin-top:0px;font-size:20px;color:orange;">Inbox</a>
          <br><span style="margin-left:0px;">---------------------</span><br>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="blog.php" style="text-decoration:none;font-size:20px;color:orange;">comment section</a>
        </div>
        </li>
         <li class="cursive"><a href="logout.php" style="color: orange; font-family: 'Lobster', cursive; font-size: 22px;">log out</a></li>
      </ul>
    </div>
    <div>
       <div style="background-color:white;opacity:0.8;margin-top:100px">
        <?php
        include("connect.php");
            $uid=$_SESSION["uid"]; 
            $tid=$_SESSION["FNAME"];
            $tname=$_SESSION["LNAME"];
            $sql=mysql_query("SELECT *  FROM `blog` where `email`='$uid'");
            $result=mysql_num_rows($sql);
            if($result)
            {
            echo "<table width='1500' height='200' align='center' border='1'>
            <tr><th>NAME</th>
            <th>COMMENT</th>
            <th >TIME</th></tr>";
        while($r=mysql_fetch_array($sql))
        {
            echo "<tr>";
            echo "<td>".$tid." ".$tname."</td>";
            echo "<td>".$r['comment']."</td>";
            echo "<td>".$r['datetime']."</td>";
              echo "</tr>";
        }
        echo "</table>";
            }
        ?>
        </div>
    </div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
