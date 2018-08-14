<?php
session_start();

unset($_SESSION['uid']);
//unset($_SESSION['pw']);

session_destroy();
echo "<script>window.location.href='../loginpage.htm'</script>";
?>