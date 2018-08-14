<?php
include("connect.php");
    $a1=$_POST["fname"];
    $a2=$_POST["lname"];
    $a3=$_POST["email"];
    $a4=$_POST["subject"];
    $a5=$_POST["message"];
$sql=mysql_query("insert into `contact`(`fname`,`lname`,`email`,`subject`,`massage`)values('$a1','$a2','$a3','$a4','$a5')");
//echo "$sql";
if($sql)
    {
        echo "<script>alert('complain has been noted')</script>";
        echo "<script>window.location.href='registered user.php'</script>";
    }
else{
    echo "<script>alert('error occured')</script>";
}


?>