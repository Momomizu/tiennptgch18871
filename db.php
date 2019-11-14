<?php 
$hostname = 'localhost';
$username='root';
$password='';
$dbname='storeman';
$port=3306;
function query($sql)
{
	global $hostname;
	global $username;
	global $password;
	global $dbname;
	global $port;
	$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	if($conn->connect_error)
	{
		echo "Connection fail<br>";
		//dung chuong trinh
		die($conn->connect_error);
	}
	
	$result = $conn->query($sql);
	if(!$result)
	{
		echo "SQL execution fail <br>";
		die($conn->error);
	}
	//lay tat ca cac ban ghi tu ket qua
	$rows = mysqli_fetch_all($result);
	return $rows;
}
function execsql($sql)
{
	global $hostname;
	global $username;
	global $password;
	global $dbname;
	global $port;
	$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	if($conn->connect_error)
	{
		echo "Connection fail<br>";
		die($conn->connect_error);
	}
	
	$result = $conn->query($sql);
	return $result;
}
?>