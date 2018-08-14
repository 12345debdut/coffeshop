<?php
include("conn.php");
session_start();
?>
<?php
$a=$_POST['uid'];
$b=$_POST['pwd'];
$ut=$_POST['us'];
if($ut=='thr')
{
$sql=mysql_query("select * FROM `signup` where `EMAIL`='$a' and `PASS`='$b'" );
$result=mysql_num_rows($sql);
if($result)
{
      while($r=mysql_fetch_array($sql))
	  {
          $c=$r['BLOCK'];
          if($c==0)
          {
	echo"<script>alert login successfully done</script>";
	$_SESSION["uid"]=$a;
	$_SESSION["FNAME"]=$r['FNAME'];
	$_SESSION["LNAME"]=$r['LNAME'];
	//echo $_SESSION["Tid"]."<br>";
	//echo $_SESSION["Tname"];
	echo "<script> window.location.href='registered user/registered user.php'</script>";
          }
          else
          {
              echo "<script> window.location.href='admin/signuppage.html'</script>";
          }
      }
   
 }
}
elseif($ut=='ad')
{
$sql=mysql_query("select * FROM `admin` where `EMAILID`='$a' and `PASS`='$b'" );
$result=mysql_num_rows($sql);
if($result)
{
      while($r=mysql_fetch_array($sql))
	  {
	echo"<script>alert login successfully done</script>";
	//$_SESSION["uid"]=$a;
	//$_SESSION["FNAME"]=$r['FNAME'];
	//$_SESSION["LNAME"]=$r['LNAME'];
	}
	
	//echo $_SESSION["Tid"]."<br>";
	//echo $_SESSION["Tname"];
	echo "<script> window.location.href='admin/admin.php'</script>";
	
   
 }
 
 
    }
 
  else
 {
	echo "login Failed"; 
echo "<script> window.location.href='loginpage.htm'</script>";
	 
 }
 
 ?>

 