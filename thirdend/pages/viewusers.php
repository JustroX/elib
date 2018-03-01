<?php
include("functions.php");
$user=select("user","*");
$book=select("book","*");
$trans=select("transactions","*");
$copy=select("copy","*");
for($i=0;$i<count($trans);$i++){
	$timeDiff = abs(strtotime(date("Y/m/d")) - strtotime($trans[$i]['date']));
	$Days = $timeDiff/86400;
	if ($trans[$i]['date_returned']=="") {
		if ($Days<3) {
			update("transactions",["amount"=>0],["id"=>$trans[$i]['id']]);
		}
		else {
			update("transactions",["amount"=>($Days-2)*5],["id"=>$trans[$i]['id']]);
		}
	}
}
?>