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
		if(isset($_GET['CatId']))
		{
			$catid = $_GET['CatId'];
			$sql = "Select * from product where CatId=" . $catid;
			$pros = query($sql);
			for($i=0; $i<count($pros); $i++)
			{
		?>
				<div class="product">
					<div class="name"><?=$pros[$i][1]?></div>
					<div class="image">
						<a href="./productdetail.php?pid=<?=$pros[$i][0]?>">
							<img src="<?=$pros[$i][2]?>" alt="" width="300px" height="400px">
						</a>
					</div>
					<div class="price"><?=$pros[$i][3]?></div>
				</div>
		<?php
			}
			
		} 
		else
		{
			echo "CatId not found!";
		}		
		?>
		</div>
</body>
</html>