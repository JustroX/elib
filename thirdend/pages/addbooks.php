<?php
include("functions.php");
$cn=$_POST["cn"];
$ti=$_POST["ti"];
$au=$_POST["au"];
$ca=$_POST["sel1"];
$co=$_POST["co"];	
$an=$_POST["an"];
$arr=["call_number"=>$cn,"title"=>$ti,"author"=>$au,"category"=>$ca];
insert("book",$arr);	
for ($i=0; $i < $co; $i++) { 
	$arr1=["access_number"=>$an+$i,"available"=>1,"parent"=>$ti];
	insert("copy",$arr1);
}
header('Location: books.php');
?>