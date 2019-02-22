<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if (isset($_POST)){
	$so1=$_POST['so1'];
    $so1=$_POST['so2'];
    $tinh=$_POST['tinh'];
	
		if (is_numeric($so1) && is_numeric($so2) ) {
			switch ($tinh) {
				case '+':
				echo  $so1 + $so2;
				break;
				
				case '-':
				echo  $so1 - $so2;
				break;

				case '*':
				echo  $so1 * $so2;
				break;

				case '/':
				echo  $so1 / $so2;
				break;


			}


		}
	}


	?>

</body>
</html>