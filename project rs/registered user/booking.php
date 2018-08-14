<?php
session_start();
?>
<?php
include("connect.php");
    $a1=$_POST['name'];
    $a2=$_POST['phone'];
    $a3=$_POST['email'];
    $a4=$_POST['date'];
    $a5=$_POST['massage'];

 $a=$a1;
 $b=$a4;
 $c= mt_getrandmax();
 $d= substr($a,0,3);
 $d1= substr($b,7,3);
 $security=$d.$c.$d1;
$_SESSION["name"]=$a1;

$sql=mysql_query("insert into `booking`(`name`,`phone`,`email`,`date`,`massage`,`booking number`)values('$a1','$a2','$a3','$a4','$a5','$security')");
if($sql)
    {
        echo "<script>alert('Table booking successfully done')</script>";
        echo "<script>alert('your booking id is:  $security  must be submitted in counter of the coffee shop')</script>";
        echo "<script>window.location.href='slipgenerate.php'</script>";
    }


?>
