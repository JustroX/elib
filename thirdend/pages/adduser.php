<?php
include("functions.php");
$name=$_POST["name"];
$code=$_POST["code"];
$batch=$_POST["batch"];
$arr=["id_code"=>$code,"name"=>$name,"batch"=>$batch];
insert("user",$arr);
header('Location: users.php');
?>