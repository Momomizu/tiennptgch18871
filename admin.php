<!DOCTYPE html>
<html>
<head>
	<title>Treasure You</title>
	<link rel="stylesheet" href="css/style1.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php

$db = parse_url(getenv("DATABASE_URL"));
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));
	
	$sql = "SELECT  id, name, price FROM Product";
	$stmt = $pdo->prepare($sql);
	
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$resultSet = $stmt->fetchAll();
	
?> 
		<table border="1" cellspacing="0">
				<tr>
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Price</th>
				</tr>
		<?php
			$sql = "Select * from Product";
		$pros = query($sql);
		for($i=0; $i<count($pros); $i++)
		{
			?>
				<tr>
					<td><?=$pros[$i][0]?></td>
					<td><?=$pros[$i][1]?></td>
					<td><?=$pros[$i][2]?></td>
					<td><a href="">Edit</a>
						<a href="">Delete</a>
					</td>
				</tr>
			<?php
		}
		?>
		<a href="./addproduct.php">Add New Product</a>
		<a href="./delete.php">Delete</a>
		</div>
</body>
</html>