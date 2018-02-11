<?php
include("functions.php");
$cn=$_POST["cn"];
$code=$_POST["code"];
$batch=$_POST["batch"];
$arr=["id_code"=>$code,"name"=>$name,"batch"=>$batch];
insert("user",$arr);
header('Location: users.php');
?>