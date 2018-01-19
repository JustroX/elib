<?php 
include("conn.php");

/*************************************
	GENERIC FUNCTIONS
**************************************/

/*
	query(str)
		run generic query
		str is the sql
*/
function query($str)
{
	mysqli_query($con,$str);
	echo mysqli_error($con);
}
/*
	rquery(str)
		run generic query
		str is the sql
		returns a mysqli result
*/
function rquery($str)
{
	$res = mysqli_query($con,$str);
	echo mysqli_error($con);
	return $res;
}
/*
	insert(table,arr)
		insert key values in the table
		i.e. INSERT INTO <table> (`key1`,`key2`,...) VALUES ('arr[key1]','arr[key2]',...)
		e.g insert('user',['fullname'=>'justine'])
*/
function insert($table,$arr)
{
	$keys = [];
	$vals = [];
	foreach ($arr as $key => $value)
	{
		array_push($keys, "`$key`");
		array_push($vals, json_encode($value));
	}
	$str  = "INSERT INTO `$table` (".implode(",", $keys).") VALUES (".implode(",", $vals).")";
	query($str);
}


?>