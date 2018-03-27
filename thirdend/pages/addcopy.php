<?php
include("functions.php");
$ti=$_GET["ti"];
$ean=$_GET["ean"];
$enc=$_GET["enc"];
for ($i=0; $i < $enc; $i++) { 
	$arr1=["access_number"=>$ean+$i,"available"=>1,"parent"=>$ti];
	insert("copy",$arr1);
}
header('Location: books.php');
?>