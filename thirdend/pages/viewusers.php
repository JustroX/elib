<?php
include("functions.php");
$sci=0;
$gen=0;
$ref=0;
$user=select("user","*");
$book=select("book","*");
$trans=select("transactions","*");
$copy=select("copy","*");
for ($a=0; $a < count($trans); $a++) { 
	for ($b=0; $b < count($copy); $b++) { 
		if ($trans[$a]['copy']==$copy[$b]['access_number']) {
				for ($c=0; $c < count($book); $c++) { 
					if ($copy[$b]['parent']==$book[$c]['title']) {
						if ($book[$c]['category']=="Science") {
							$sci=$sci+1;
						}
						if ($book[$c]['category']=="General") {
							$gen=$gen+1;
						}
						if ($book[$c]['category']=="Reference") {
							$ref=$ref+1;
						}

					}
				}			
					}
	}
}
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