<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Coffee and Pizza</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

</head>0
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active cursive"><a href="#" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">Home<span class="sr-only">(current)</span></a></li>
        <li class="cursive"><a href="showuser.php" style="color: orange; font-family: 'Lobster', cursive; font-size: 22px;">Show User</a></li>
        <li class="cursive"><a href="#" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">Approval</a></li>
        <li class="cursive"><a id="port" href="catalogue.html" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">Block User</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
         <li class="cursive"><a href="logout.php" style="color: orange; font-family: 'Lobster', cursive; font-size: 22px;">log out</a></li>
      </ul>
    </div>



<style type="text/css">
<!--
body,td,th {
	color: #0033CC;
}
body {
	background-color: #FFFFFF;
}
.style2 {color: #FFFFFF}
--></style>
<?php
include("conn.php");

$sql=mysql_query("SELECT *  FROM `signup`");
$result=mysql_num_rows($sql);
if($result)
{
echo"<table width='395' align='center' border='2' bordercolor='#993333' cellpadding='2'>
<tr><th>Name</th>
	<th>Email</th>
	<th>Phn.No.</th>
	<th>Image</th></tr>";
		while($r=mysql_fetch_array($sql))
		{
			echo "<tr>";
			echo "<td>".$r['FNAME']." ".$r['LNAME']."</td>";
			echo "<td>".$r['EMAIL']."</td>";
	        echo "<td>".$r['PHONE']."</td>"; 
            $s=$r['content'];
			echo "<td> <img src=$s height='200' width='300'>"."</td>";
			echo "</tr>";
		}
		echo "</table>";	
}
?>