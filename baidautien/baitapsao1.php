<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

	for ($i = 1; $i < 10; $i++)
	{	
		
		for ($j = 9; $j >= $i; $j--)
		{

			echo $j;
		}
		echo '<br/>';
	}

	?>
	<?php 

	for ($i = 1; $i <=10; $i++)
	{	
		
		for ($j = 1; $j < $i; $j++)
		{

			echo $j;
		}
		echo '<br/>';
	}

	?>
	<br>
	<?php 

	for ($i = 1; $i <=3; $i++)
	{	
		
		for ($j = 1; $j < 10; $j++)
		{

			echo $j;
		}
		echo '<br/>';
	}

	?>
	

</body>
</html>