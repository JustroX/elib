<?php 
include("functions.php");
$cn=$_GET["cn"];
$stud=$_GET["stud"];
$ref=$_GET["ref"];
$acc=$_GET["acc"];
$arr=["copy"=>$acc,"user"=>$stud,"ref_no"=>$ref,"date"=>date("Y-m-d")];
$arr1=["available"=>0,"date_borrowed"=>date("Y-m-d")];
insert("transactions",$arr);
update("copy",$arr1,["access_number"=>$acc]);
header("Location:books.php");
?>