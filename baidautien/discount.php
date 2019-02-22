<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	if (isset($_POST)){

		$description=$_POST['description'];
		$price=$_POST['price'];
		$discount_percent=$_POST['discount_percent'];
		echo "Mô tả sản phẩm:".$description . "<br/>";
		echo " Giá:" .$price .'$'."<br/>";
		echo "Phần trăm chiết khấu:". $discount_percent .'%'."<br/>";
		$DiscountAmount= $price * $discount_percent * 0.1;
		echo "Lượng chiết khấu:". $DiscountAmount ."<br/>";
		$DiscountPrice=$price - $DiscountAmount;
		echo "Giá chiết khấu:". $DiscountPrice ."<br/>";


	}
	?>

</body>
</html>