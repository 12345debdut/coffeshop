<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
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
        <li class="active cursive"><a href="#" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">Home<span class="sr-only">(current)</span></a></li>
        <li class="cursive"><a href="" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">Contact us</a></li>
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
	<div class="container">
         <section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="contact_contant sections">
                                    <div class="col-sm-6">

                                        <div class="main_contact_info">
                                            <div class="head_title">
                                                <h3>CONTACT INFO</h3>
                                                <div class="separator"></div>
                                            </div>
                                            <div class="row">
                                                <div class="contact_info_content">
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-home"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>VISIT US</h3>
                                                                <p>12,M.B Road,Belgharia,Kolkata-700049</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-envelope-o"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>MAIL US</h3>
                                                                <p>coffeeshop123@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-mobile"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>CALL US</h3>
                                                                <p>(+91)8583915287</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-clock-o"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>WORK HOUR</h3>
                                                                <p>Mon - Sat: 08 Am - 10 Pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <div class="head_title">
                                            <h3>COMPLAIN BOX</h3>
                                            <div class="separator"></div>
                                        </div>
                                        <div class="single_contant_left">
                                            <form action="contact_query.php" id="formid" method="post" enctype="multipart/form-data">
                                                <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="fname" placeholder="First Name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="lname" placeholder="Last Name" required="">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                                                </div>

                                                <div class="">
                                                    <input type="submit" value="Submit" class="btn btn-primary" name="submit">
                                                </div>
                                                <!--</div>--> 
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
             </div>
            </section>  <!-- End of contact section -->



	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
