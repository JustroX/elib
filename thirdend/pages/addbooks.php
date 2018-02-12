<?php
include("functions.php");
$cn=$_POST["cn"];
$ti=$_POST["ti"];
$au=$_POST["au"];
$ca=$_POST["ca"];	
$arr1=["call_number"=>$cn,"title"=>$ti,"author"=>$au,"category"=>$ca];
insert("book",$arr1);
header('Location: books.php');
?>