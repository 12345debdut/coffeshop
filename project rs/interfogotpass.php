    <?php
    session_start();
    $a=$_REQUEST["uid"];
    $b=$_REQUEST["pwd"];
    $_SESSION["pwd"]=$b;
    //echo "<h2 style='color:white'>".$_SESSION['pwd']."</h2>";
    //echo $a;
    //echo $b;
   $sql = "SELECT * FROM `signup` WHERE `securitykey`='$b'AND `EMAIL`='$a'";
   // echo "<h2 style='color:white'>".$sql."</h2>";
    if($sql)
    {
        echo "<script>window.location.href='passwordreset.php'</script>";
    }
?>