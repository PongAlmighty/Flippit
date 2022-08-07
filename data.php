<?php
$strVar = $_GET['strVar'];
$foo = "No Var Rcved";
$str1 = "123456789012345";
$str2 = "Howdy";
$str3 = "NEW SUB";
  if ($strVar=="1"){
          $foo = $str1;
  } elseif 
    ($strVar=="2"){
          $foo = $str2;
  } elseif 
    ($strVar=="3"){
          $foo = $str3;
  }

print $foo
?>