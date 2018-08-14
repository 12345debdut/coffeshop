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
    <h2 class="title" style="font-size:50px;color:orange;margin-left:1000px;">
    <?php $uid=$_SESSION["uid"]; 
        $tid=$_SESSION["FNAME"];
		$tname=$_SESSION["LNAME"];
        $name=$tid.' '.$tname;
        $_SESSION["name"]=$name;
		 if($uid){  echo "Hi $tid $tname"; } else{ header("location:registered user.php");}
      ?> </h2>
</div>


<div id="home">
<!-- Slider Starts -->
<div class="banner">
          <img src="images/back.jpg" alt="banner" class="img-responsive">
          <div class="caption">
            <div class="caption-wrapper">
              <div class="caption-info">              
              <i class="fa fa-coffee fa-5x animated bounceInDown"></i>
              <h1 class="animated bounceInUp">Best place for delicious pizza and coffee</h1>
              <p class="animated bounceInLeft">coffee shop is a emmotion where you can find those emmotions </p>
             <a href="#menu" class="explore animated bounceInDown"><i class="fa fa-angle-down  fa-3x"></i></a>
              </div>
            </div>
          </div>
</div>
<!-- #Slider Ends -->
</div>









<!-- Cirlce Starts -->
<div id="menu"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Creative photographers of London</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-camera-retro"></i> Introduction </h4>
    <p>Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs, lead by passionate and uber progressive team that lives and breathes design. Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs.</p>


    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
    

  </div>
  <div class="col-sm-6 wowload fadeInRight">
    
     <h4><i class="fa fa-bars"></i> Menu</h4>

      <!-- menus -->
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <i class="fa fa-coffee"></i> Tea & Coffee
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <i class="fa fa-fire"></i> Firewood Pizza and Spaghetti
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <i class="fa fa-beer"></i> Beers & Cocktails
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         <i class="fa fa-spoon"></i> Fine Dinner
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         <i class="fa fa-birthday-cake"></i> Bakery
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Tea/Coffee</div><span class="pull-right">$ 10.00</span></div>
      </div>
    </div>
  </div>


</div>
      <!-- menus -->



  </div>
  </div>

  
</div>
<div id="partners" class="container spacer ">
	<h2 class="text-center  wowload fadeInUp">Some of our happy customers</h2>
  <div class="clearfix">    
    <div class="col-sm-6 col-sm-offset-3">


    <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
    <div class="carousel-inner">  
      <div class="item active animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/1.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p style="color: brown;"> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>      
      <span>Angel Smith - <b>eshop Canada</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/2.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p style="color: brown;">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
      <span>John Partic - <b>Crazy Pixel</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="images/team/3.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p style="color: brown;">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
      <span>Harris David - <b>Jet London</b></span>
      </div>
      </div>
  </div>

   <!-- Indicators -->
   	<ol class="carousel-indicators">
    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
  	</ol>
  	<!-- Indicators -->
  </div>



    </div>
  </div>


<!-- team -->
<h3 class="text-center  wowload fadeInUp">Our Chefs</h3>
<p class="text-center  wowload fadeInLeft">Our chefs that is making everything possible</p>
<div class="row grid team  wowload fadeInUpBig">	
	<div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="images/team/8.jpg" alt="img01" class="img-responsive" />
        <figcaption>
            <p><b>Barbara Husto</b><br>Senior Chef</p>            
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="images/team/10.jpg" alt="img01"/>
        <figcaption>            
            <p><b>Barbara Husto</b><br>Chef</p>            
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="images/team/12.jpg" alt="img01"/>
        <figcaption>
            <p><b>Barbara Husto</b><br>Asst Chef</p>          
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="images/team/17.jpg" alt="img01"/>
        <figcaption>
            <p><b>Barbara Husto</b><br>Asst Chef</p>
        </figcaption>
    </figure>
    </div>

 
</div>
<!-- team -->

</div>









<!-- About Starts -->
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-smile-o  fa-5x"></i><h4>24152 Clients</h4>
	</div>
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-thumbs-up  fa-5x"></i><h4>25 Variety</h4>
	</div>
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-history  fa-5x"></i><h4>15 yrs old</h4>
	</div>
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-map-marker fa-5x"></i><h4>2 Locations</h4>
	</div>
</div>
</div>
</div>
</div>
<!-- About Ends -->








<div id="contact" class="spacer">
<!--Contact Starts-->
<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp" style="color: orange; text-shadow: 2px 2px yellow;font-size: 60px;">Reservation</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
       <form action="booking.php" method="post">      
        <input type="text" placeholder="Name"  required style="font-size: 30px;color: yellowgreen;" name="name" value="<?php echo $name ;?>" readonly="yes">
        <input type="text" placeholder="Phone Number" required style="font-size: 30px;color: yellowgreen;" name="phone">
        <input type="text" required placeholder="Email Id"style="font-size: 30px;color: yellowgreen;" name="email">
        <input type="date" name="date" required>
        <textarea rows="5" placeholder="Message"style="font-size: 30px;color: yellowgreen;" name="massage"></textarea>
        <input type="submit" name="submit" value="submit" class="btn btn-primary" class="fa fa-paper-plane">
        <p style="font-size:30px;color:orange;"><strong>This booking is valid for 3 hrsafter submission</strong></p>
          </form>
      </div>
  </div>



</div>

</div>
<!--Contact Ends-->



<!-- Footer Starts -->

<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script> 


<!-- custom script -->
<script src="assets/script.js"></script>
<script src="warning.js"></script>
</body>
</html>