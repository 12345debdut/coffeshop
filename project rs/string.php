<?php
 $a= "debdut";
 $b="8583915287";
 $c= mt_getrandmax();
 $d= substr($a,0,3);
 echo $d;
  $d1= substr($b,7,3);
  echo $d1;
  $security=$d.$c.$d1;
  echo($security);
?>