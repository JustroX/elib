<?php
include("functions.php");
$name=$_POST["name"];
$code=$_POST["code"];
$batch=$_POST["batch"];
$arr=["name"=>$name,"batch"=>$batch];
insert("user",$arr);
?>