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
echo "Show all rows from Postgres Database";

//Refer to database
$db = parse_url(getenv("DATABASE_URL"));

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));
//your sql query
$sql = "SELECT productid, productname, price FROM ProductList";

$stmt = $pdo -> prepare($sql);

//execute the query on the server and return the result set
$stmt -> setFetchMode (PFO::FETCH_ASSOC);
$stmt -> execute();
$resultSet = $stmt -> fetchAll();

//display the data
?>
<ul>
	<?php
		foreach ($resultSet as $row) {
			echo "<li>" . $row["productid"] . '--' . $row["productname"] . '--' . $row["price"] . "</li>";
		}
	?>
</ul>
		<a href="./addproduct.php">Add New Product</a>
		</div>
</body>
</html>