<?php
    
session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="loginpage.css">

	<title>Minimum Bootstrap HTML Skeleton</title>

	<!--  -->

	<style>

	</style>

</head>

<body>

<div class="may">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand cursive" href="#">COFFE SHOP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active cursive"><a href="coffee.html" style="color: orange">Home<span class="sr-only">(current)</span></a></li>
        <li class="cursive"><a href="" style="color: orange" class="alert1">Services</a></li>
        <li class="cursive"><a href="contact.php" style="color: orange">Contact us</a></li>
        <li class="cursive"><a href="" style="color: orange" class="alert1">Portfolio</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="cursive"><a href="datainsertion/signuppage.html" style="color: orange">Sign up</a></li>
        <ul class="nav navbar-nav navbar-right">
        <li class="cursive"><a href="loginpage.htm" style="color: orange">log in</a></li>
        </ul>
      </ul>
    </div>
    </div>
    </div>
    <div class="center">
       <form action="" method="post">
           <span class="red1"><strong> ENTER YOUR NEW PASSWORD</strong></span> <input class="gap" type="password" name="uid" value="" required><br>
           <br>
           <span class="red1"><strong>CONFIRM YOUR PASSWORD</strong></span><input type="password" name="pwd" value="" class="gap1" required style="margin-left: 30px;"><br><br><br><br>
           <p>
            <input type="submit" name="submit" value="submit" class="submit" style="border:2px solid orange;background-color: transparent; font-size: 25px;font-family: cursive; margin-left: 280px;">
       </form>
    </div>
    <?php
    include("conn.php");
    $n=$_REQUEST['uid'];
    $b=$_SESSION['pwd'];
    echo "<h2 style='color:white'>".$n."</h2>";
echo "<h2 style='color:white'>".$b."</h2>";
    if($n)
{
	$sql=mysql_query("UPDATE `signup` SET `PASS` = '$n' WHERE `signup`.`securitykey` ='$b'"); 
        if($sql){
    echo "<script>window.location.href='loginpage.htm'</script>";
        }
}
    ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="warning.js">
	</script>

</body>

</html>


