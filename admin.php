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
	require_once("./db.php");
	require_once("./header.php");
	require_once("./left.php")
	?>
		<div class="second"></div>	
		<div class="product">
			<table border="1" cellspacing="0">
				<tr>
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Image</th>
					<th>Price</th>
					<th>Category ID</th>
					<th>Action</th>
				</tr>
		<?php 
		$sql = "Select * from product";
		$pros = query($sql);
		for($i=0; $i<count($pros); $i++)
		{
			?>
				<tr>
					<td><?=$pros[$i][0]?></td>
					<td><?=$pros[$i][1]?></td>
					<td><?=$pros[$i][2]?></td>
					<td><?=$pros[$i][3]?></td>
					<td><?=$pros[$i][4]?></td>
					<td><a href="">Edit</a>
						<a href="">Delete</a>
					</td>
				</tr>
			<?php
		}
		?>
			</table>
		<a href="./addproduct.php">Add New Product</a>
		</div>
</body>
</html>