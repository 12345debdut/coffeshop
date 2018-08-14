<?php
include("connect.php");
    $a1=$_POST["fname"];
    $a2=$_POST["lname"];
    $a3=$_POST["emailid"];
    $a4=$_POST["phonenumber"];
    $a5=$_POST["newpassword"];
    $target_path = "upload/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
{
   if ((($_FILES["uploadedfile"]["type"] == "file/doc")
|| ($_FILES["uploadedfile"]["type"] == "file/docx")
|| ($_FILES["uploadedfile"]["type"] == "image/jpg")      
|| ($_FILES["uploadedfile"]["type"] == "file/pdf"))
&& ($_FILES["uploadedfile"]["size"] < 200000000))
  {            
     echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
                          " has been uploaded";
 } 
  
}
 $a=$a1;
 $b=$a4;
 $c= mt_getrandmax();
 $d= substr($a,0,3);
 $d1= substr($b,7,3);
 $security=$d.$c.$d1;
$sql=mysql_query("insert into `signup`(`FNAME`,`LNAME`,`EMAIL`,`PHONE`,`PASS`,`securitykey`,`content`)values('$a1','$a2','$a3','$a4','$a5','$security','$target_path')");
if($sql)
    {
        echo "<script>alert('Registration successfully done')</script>";
        echo "<script>alert('your security key is:  $security  must be remember for future use')</script>";
        echo "<script>window.location.href='../loginpage.htm'</script>";
    }


?>
