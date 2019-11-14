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
<div class="main">
	<img src="images/2.gif" class="item1">
	<img src="images/3.gif" class="item1">
	<img src="images/4.gif" class="item1">
	<br>
	<img src="images/5.gif" class="item2">
	<img src="images/6.gif" class="item2">
	<br>

<div class="product-group-title">
		<?php 
		$sql = "Select * from product";
		$pros = query($sql);
		for($i=0; $i<count($pros); $i++)
		{
			?>

			<div class="product">
				<div class="image">
					<a href="./productdetail.php?pid=<?=$pros[$i][0]?>">
						<img src="<?=$pros[$i][2]?>" alt="" width= "300px" height="500px" >
					</a>
				</div>
			</div>
			<?php
		}
		?>
		</div>
</body>
</html>