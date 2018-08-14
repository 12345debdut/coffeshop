<?php
include("connect.php");
$cnam=$_POST["cname"];

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

if($target_path)
{
    $sql=mysql_query("UPDATE `fileup` SET `syllabus`='$target_path'  ");

    $sql = mysql_query("INSERT INTO `imgupload`.`fileup` (`CName`,`content` ) VALUES ( '$cnam','$target_path'); ");

}

if($sql)
{
echo"</br>";
echo "<script>alert('Updating Successful')</script>";
echo "<script> window.location.href='display.php'</script>";			
}
else {
echo"error";
}
?>			
