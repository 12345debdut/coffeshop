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

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active cursive"><a href="admin.php" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">Home</a></li>
        <li class="cursive"><a href="showuser.php" style="color: orange; font-family: 'Lobster', cursive; font-size: 22px;">Show User</a></li>
        <li class="cursive"><a id="port" href="blockuser.php" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">Block User</a></li>
          <li class="cursive"><a id="port" href="complain.php" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">complain</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
         <li class="cursive"><a href="logout.php" style="color: orange; font-family: 'Lobster', cursive; font-size: 22px;">log out</a></li>
      </ul>
    </div>
<!-- #Header Starts -->
<div>
    <strong style="font-size:50px;color:orange;margin-left:1000px;">HI ADMIN</strong>
</div>

    <div>
       <div style="background-color:white;opacity:0.8;margin-top:100px">
        <?php
        include("connect.php");
            $sql=mysql_query("SELECT *  FROM `contact`");
            $result=mysql_num_rows($sql);
            if($result)
            {
            echo "<table width='1500' height='200' align='center' border='1'>
            <tr><th>NAME</th>
            <th>SUBJECT</th>
            <th >MESSAGE</th></tr>";
        while($r=mysql_fetch_array($sql))
        {
            $tid=$r['fname'];
            $tname=$r['lname'];
            echo "<tr>";
            echo "<td>".$tid." ".$tname."</td>";
            echo "<td>".$r['subject']."</td>";
            echo "<td>".$r['massage']."</td>";
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

