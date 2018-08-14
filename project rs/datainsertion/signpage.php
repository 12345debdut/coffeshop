<?php
include("connect.php");
    $a1=$_POST["fname"];
    $a2=$_POST["lname"];
    $a3=$_POST["emailid"];
    $a4=$_POST["phonenumber"];
    $a5=$_POST["newpassword"];

 $a=$a1;
 $b=$a4;
 $c= mt_getrandmax();
 $d= substr($a,0,3);
 $d1= substr($b,7,3);
 $security=$d.$c.$d1;
$sql=mysql_query("insert into `signup`(`FNAME`,`LNAME`,`EMAIL`,`PHONE`,`PASS`,`securitykey`)values('$a1','$a2','$a3','$a4','$a5','$security')");
if($sql)
    {
        echo "<script>alert('Registration successfully done')</script>";
        echo "<script>alert('your security key is:  $security  must be remember for future use')</script>";
        echo "<script>window.location.href='../loginpage.htm'</script>";
    }


?>
