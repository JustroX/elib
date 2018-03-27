<?php
include("functions.php");
$sci=0;
$cs=0;
$pp=0;
$r=0;
$ss=0;
$lang=0;
$t=0;
$ar=0;
$lit=0;
$hg=0;
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
						if ($book[$c]['category']=="Computer Science, Information and General Works") {
							$cs=$cs+1;
						}
						if ($book[$c]['category']=="Philosophy and Psychology") {
							$pp=$pp+1;
						}
						if ($book[$c]['category']=="Religion") {
							$r=$r+1;
						}
						if ($book[$c]['category']=="Social Science") {
							$ss=$ss+1;
						}
						if ($book[$c]['category']=="Language") {
							$lang=$lang+1;
						}
						if ($book[$c]['category']=="Technology") {
							$t=$t+1;
						}
						if ($book[$c]['category']=="Arts and Recreation") {
							$ar=$ar+1;
						}
						if ($book[$c]['category']=="Literature") {
							$lit=$lit+1;
						}
						if ($book[$c]['category']=="History and Geography") {
							$hg=$hg+1;
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