<?php 
include("functions.php");
$cn=$_GET["cn"];
$stud=$_GET["stud"];
$arr=["copy"=>$cn,"user"=>$stud,"date"=>date("Y-m-d")];
insert("transactions",$arr);
header('Location: books.php');
?>