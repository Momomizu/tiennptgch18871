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
	?>
		<?php 
		require_once("./left.php");
		?>		
		<div class="product">
		<?php 
		if(isset($_GET['pid']))
		{
			$pid = $_GET['pid'];
			$sql = "Select * from product where ProductId='" . $pid . "'";
			$pro = query($sql);
		?>
			<div class="product">
				<div class="name"><?=$pro[0][1]?></div>
				<div class="image">
					<a href="">
						<img src="<?=$pro[0][2]?>" alt="" width="300px" height="400px">
					</a>
				</div>
				<div class="price"><?=$pro[0][3]?></div>
			</div>
		<?php
		} 
		else
		{
			echo "pid not found!";
		}
		?>
		</div>
</body>
</html>