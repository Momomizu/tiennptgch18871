<!DOCTYPE html>
<html>
<head>
	<title>Treasure You</title>
	<link rel="stylesheet" href="css/style1.css">
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
	</div>
		<div class="left"></div>	
		<div class="product">
			<form action="" method="Post">
				Product ID:
				<input type="text" name="Id"> <br>
				Product Name:
				<input type="text" name="Name"> <br>
				Image:
				<input type="text" name="Image"> <br>
				Price:
				<input type="text" name="Price"> <br>
				Category:
				<select name="CatId">
				<?php 
				$sql = "Select * From category";
				$cats = query($sql);
				for($i=0; $i<count($cats); $i++)
				{
					?>
					<option value="<?=$cats[$i][0]?>"><?=$cats[$i][1]?></option>
					<?php
				}
				?>
				</select><br>
				<input type="submit" value="Add">
				<input type="reset" value="Reset">
			</form>
			<?php 
			if(isset($_POST['Id']) && isset($_POST['Name']) && isset($_POST['Image']) && isset($_POST['Price']) && isset($_POST['CatId']))
			{
				$id = $_POST['Id'];
				$name = $_POST['Name'];
				$img = $_POST['Image'];
				$pr = $_POST['Price'];
				$cid = $_POST['CatId'];

				$sql = "Insert Into product values ('" . $id . "', '"
					. $name . "', '" . $img . "', " . $pr . ", " 
					. $cid . ")";
				
				$rs = execsql($sql);
				if($rs != null)
					echo "Product has save successfully!";
				else
					echo "Try again";
			}

			?>
			<a href="./admin.php">Back to Product Admin</a>
		</div>
</body>
</html>