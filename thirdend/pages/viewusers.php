<?php
include("functions.php");
$user=select("user","*");
$book=select("book","*");
$trans=select("transactions","*");
for($i=0;$i<count($trans);$i++){
	if ($trans[$i]['date today']!=date("Y-m-d")) {
		update("transactions",["days"=>$trans[$i]['days']+1,"date today"=>date("Y-m-d")]);
		if ($trans[$i]['days']>3) {
			$x=$trans[$i]['days']-2;
			update("transactions",["amount"=>$x*5]);
		}
	}
}
?>