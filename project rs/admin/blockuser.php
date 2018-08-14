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
<link rel="stylesheet" href="signuppage.css">

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

</head>
<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active cursive"><a href="#" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">Home<span class="sr-only">(current)</span></a></li>
        <li class="cursive"><a href="showuser.php" style="color: orange; font-family: 'Lobster', cursive; font-size: 22px;">Show User</a></li>
        <li class="cursive"><a id="port" href="blockuser.php" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">Block User</a></li>
         <li class="cursive"><a id="port" href="complain.php" style="color: orange;font-family: 'Lobster', cursive; font-size: 22px;">complain</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
         <li class="cursive"><a href="logout.php" style="color: orange; font-family: 'Lobster', cursive; font-size: 22px;">log out</a></li>
      </ul>
    </div>
    <form action="block.php" method="post" enctype="multipart/form-data">
           <span style="color:green;font-size:30px;margin-left:200px;margin-top:100px;"><strong>ENTER THE NAME TO BLOCK</strong></span> <input class="gap" type="text" name="bname" value="" placeholder="BLOCK PROFILE" required><br>
           <br>
           <span style="color:yellow; font-size: 30px;"> Block User </span><input type="radio" name="us" value="ad" class="buradio" /><span style="color:yellow; font-size: 30px;"> Unblock User </span><input type="radio" name="us" value="thr"  class="buradio"/>
           <input type="submit" name="submit" value="submit" class="submit" style="border:2px solid orange;" >
       </form>
</body>