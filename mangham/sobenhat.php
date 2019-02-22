<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div>
		<form method="post">
			<input type="texl" name="nuber" placeholder="VD:12,13,14,15"> 
			<input id="submit" type="submit" name="submit" value="Nhap">
		</form>
	</div>
	<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nuber = $_POST["nuber"];
	}
	$array1 = explode(",",$nuber);
	trim($nuber,"      ");
	$min = $array1[0];
	$index = 0;
	$lenght = count($array1);
	for ($i = 0 ; $i < $lenght ; $i++){
		if ($array1[$i] < $min) {
			$min = $array1[$i];
			$index = $i;
		}
	}

	echo "mảng có min là: ".$min." index: ".$index;
	?>
</body>
</html>

