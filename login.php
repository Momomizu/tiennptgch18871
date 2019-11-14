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
		<table>
			<form action="" method="Post">
				<tr>
					<td colspan="2">Login</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Login"></td>
					<td><input type="reset" value="Reset"></td>
				</tr>
			</form>
		</table>
		<?php 
		if(isset($_POST['email']) && isset($_POST['pass']))
		{
			$em = $_POST['email'];
			$pw = $_POST['pass'];
			$sql = "Select * from account where Username='" . $em 
				. "' and Password='" . $pw . "'";
			$acc = query($sql);
			if(count($acc)>0)
			{
				?>
				// header("Location:./admin.php");
				<script type="text/JavaScript">
				window.location.replace("./admin.php");
				</script>
<?php
			}
			else
			{
				echo('<span style="color:red;">Email or Password is not correct</span>');
			}
		}
	
		?>
		</div>
		<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>