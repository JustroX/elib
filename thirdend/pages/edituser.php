<?php
include("functions.php");
$name=$_POST["name"];
$code=$_POST["code"];
$batch=$_POST["batch"];
$arr=["id_code"=>$code,"name"=>$name,"batch"=>$batch];
$arr1=["or"=>[["name"=>$name],["id_code"=>$code]]];
update("user",$arr,$arr1);
header('Location: users.php');
?>