<!DOCTYPE html>
<html>
<head>
	<title>Treasure Yourself</title>
</head>
<body>
<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'storeman';
	$port = 3306;

	$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	if($conn->connect_error)
	{
		echo "Connection fail <br>";
		die($conn->connect_error);
	}
	$sql = "select * from category";
	$result = $conn->query($sql);
	if(!$result)
	{
		echo "SQL execution fail <br>";
		die($conn->error);
	}
	$rows = mysqli_fetch_all($result);
?>
	<ul>
		<?php
		for($i = 0; $i<count($rows); $i++)
		{
		?>
		<li><?=$rows[$i][1]?></li>
		<?php
		}
		?>
	</ul>

	<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'storeman';
	$port = 3306;

	$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	if($conn->connect_error)
	{
		echo "Connection fail <br>";
		die($conn->connect_error);
	}
	$sql = "select * from product";
	$result = $conn->query($sql);
	if(!$result)
	{
		echo "SQL execution fail <br>";
		die($conn->error);
	}
	$rows = mysqli_fetch_all($result);
?>
	<ul>
		<?php
		for($i = 0; $i<count($rows); $i++)
		{
		?>
		<li><?=$rows[$i][1]?></li>
		<?php
		}
		?>
	</ul>
</body>
</html>