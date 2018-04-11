<?php
include("functions.php");
$cn=$_POST["cn"];
$ti=$_POST["ti"];
$au=$_POST["au"];
$arr=["call_number"=>$cn,"title"=>$ti,"author"=>$au];
$arr1=["or"=>[["title"=>$ti],["call_number"=>$cn]]];
update("book",$arr,$arr1);
header('Location: books.php');
?>