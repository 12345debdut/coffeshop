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
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="registered user.css">

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active cursive"><a href="registered%20user.php" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">Home<span class="sr-only">(current)</span></a></li>
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
    <div style="height: 750px;" class="center">
    <article class="col-2">
        <h3 class="p1" style="color: green;">Review Section</h3>
        <form id="contact-form" action="comment.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <label><span class="text-form" style="color: green;">Your Name:</span>
              <input name="name" type="text"/>
            </label><br><br>
            <label><span class="text-form" style="color: green;">Your Email:</span>
              <input name="email" type="text"/>
            </label><br><br>
            <div class="wrapper">
                <div class="text-form" style="color: green;"><strong>Your Message:</strong></div>
             <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;color:green;">
                </textarea>
                <div class="clear"></div>
                <input type="submit" name="submit" value="submit" class="submit" style="border:2px solid orange;background-color: transparent; font-size: 25px;font-family: cursive; margin-left: 280px; margin-top:50px; color:green;">
              </div>
          </fieldset>
        </form>
      </article>
    </div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
