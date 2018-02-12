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
	global $con;
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
	global $con;
	$res = mysqli_query($con,$str);
	echo mysqli_error($con);
	return $res;
}
/*
	parse_condtions(arr)
		parse condition array
		returns string
		i.e `key1`='value1' and `key2`=>'value2'
		e.g. 
		(1)	$sql = "SELECT * FROM `table` WHERE ".parse_conditions(['key1'=>'val1','key2'=>'val2']);
			echo $sql;
		
			-----output-----
			SELECT * FROM `table` WHERE `key1`='val1' and `key2`=val2
			----------------
		
		(2) $sql = "SELECT * FROM `table` WHERE ".parse_conditions(or(['key1'=>'val1'],['key2'=>'val2']));
			echo $sql;
		
			-----output-----
			SELECT * FROM `table` WHERE `key1`='val1' or `key2`=val2
			----------------
		
*/
function parse_conditions($arr)
{
	$conditions = [];
	foreach ($arr as $key => $value)
	{
		if($key=="or")
			array_push($conditions,parse_conditions_or($value) );
		else
			array_push($conditions, "`$key`=".json_encode($value));
	}
	return implode(" AND ", $conditions);
}
/*
	WARNING: THIS IS A PRIVATE FUNCTION! DO NOT USE UNLESS NECESSARY
	parse_conditions_or(arr)
		returns a string 
		e.g. 
			parse_conditions_or(["or"=>[['key1'=>'val1'],['key2'=>'val2']])
			return value:
				"`key1`='val1' or `key2`='val2'"
*/
function parse_conditions_or($arr)
{
	if(isset($var->or))
	{
		return "( " . parse_conditions($var->or[0]) . " OR " . parse_conditions($var->or[1]) . ") ";
	}
	else
		die("Invalid argument $arr in function: <b>parse_conditions_or</b>");
}
/*
	insert(table,arr,conditions)
		insert key values in the table
		i.e. INSERT INTO <table> (`key1`,`key2`,...) VALUES ('arr[key1]','arr[key2]',...) 
		e.g insert('user',['fullname'=>'justine'])
*/
function insert($table,$arr,$where=[])
{

	$keys = [];
	$vals = [];
	foreach ($arr as $key => $value)
	{
		array_push($keys, "`$key`");
		array_push($vals, json_encode($value));
	}
	$str  = "INSERT INTO `$table` (".implode(",", $keys).") VALUES (".implode(",", $vals).")";
	if($where)
	{
		$str .= " WHERE " . parse_condtions($where);
	}
	query($str);
}
/*
	select(table,row,cond)
		select key values in the table
		i.e. INSERT INTO <table> (`key1`,`key2`,...) VALUES ('arr[key1]','arr[key2]',...) 
		e.g insert('user',['fullname'=>'justine'])

*/
function select($table,$row,$where=[])
{
	$rows = [];
	if($row!="*")
	{
		foreach ($row as $key => $value) 
		{
			array_push($rows, "`$value`");
		}
		$str = "SELECT ".implode(" , ", ($rows))." FROM `$table`";
	}
	else
		$str = "SELECT * FROM `$table`";
		
	if($where)
	{
		$str .= " WHERE " . parse_condtions($where);		
	}
	$res = rquery($str);
	return arrify($res);
}
/*
	update(table,values,where)
		update table values
		e.g. update(`user`,['id'=>1,'name'=>'yey'])
*/

function update($table,$arr,$where=[])
{

	$keys = [];
	$vals = [];
	foreach ($arr as $key => $value)
	{
		array_push($keys, "`$key`");
		array_push($vals, json_encode($value));
	}
	$str  = "UPDATE `$table` SET ";
	
	for ($i=0; $i < sizeof($keys); $i++) 
	{ 
		$tstr = "";
	 	$tstr = "`".$keys[$i]."`=".json_encode($vals[$i])." ".(($i==sizeof($keys)-1)?"":",")." ";
	 	$str .= $str;
	} 

	if($where)
	{
		$str .= " WHERE " . parse_condtions($where);
	}
	query($str);
}

/*
	arrify(res)
		converts mysqli result into an array
		e.g. 	arrify(mysqli_query("SELECT `size` FROM `user`"))
				result: [['size'=>12],'size'=>10,'size'=>11]
*/
function arrify($res)
{
	$arr = [];
	while($val = mysqli_fetch_assoc($res))
	{
		array_push($arr, $val);
	}
	return $arr;
}


?>
