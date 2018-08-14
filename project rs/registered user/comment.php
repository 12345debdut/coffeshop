<?php
include("connect.php");
    $a1=$_POST["name"];
    $a2=$_POST["email"];
    $a3=$_POST["comments"];
$sql=mysql_query("insert into `blog`(`name`,`email`,`comment`)values('$a1','$a2','$a3')");
if($sql)
    {
        echo "<script>alert('comment is now uploaded in your inbox section seet the inbox section')</script>";
        echo "<script>window.location.href='registered user.php'</script>";
    }


?>