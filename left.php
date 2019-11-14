<div class="left">
	<ul>
		<?php 
		$sql = "Select * from category";
		$cats = query($sql);
	
		for($i=0; $i<count($cats); $i++)
		{
		?>
		<a href="./productbycat.php?CatId=<?=$cats[$i][0]?>"><?=$cats[$i][1]?></a><br>
		<?php
		}
		?>
	</ul>
	
</div>
