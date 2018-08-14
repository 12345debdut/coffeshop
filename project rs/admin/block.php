<?php
    include("connect.php");
    $a=$_POST['bname'];
    $ut=$_POST['us'];
    if($ut=='ad'){
        $sql=mysql_query("UPDATE `signup` SET `BLOCK`='1' where `FNAME`='$a'");
        echo "<script> window.location.href='admin.php'</script>";
    }
    elseif($ut=='thr')
    {
        $sql=mysql_query("UPDATE `signup` SET `BLOCK`='0' where `FNAME`='$a'");
        echo "<script> window.location.href='admin.php'</script>";
    }
?>