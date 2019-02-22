<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post">
        Số tiền: <input type="text" name="tienVao"/><br>
        Đổi từ: <input list="browsers" name="dauVao">
        <datalist id="browsers">
    		<option value="VND">
    		<option value="USD">
    		<option value="YEN">
  		</datalist>
  		Sang: <input list="browsers" name="dauRa"><br>
        <datalist id="browsers">
    		<option value="VND">
    		<option value="USD">
    		<option value="YEN">
  		</datalist>
        <input type = "submit" id = "submit" value = "calculate"/>
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	$input = $_POST["dauVao"];
    	$output= $_POST["dauRa"];
    	$moneyIn = $_POST["tienVao"];   	
    	$UsdVndRate= 23000;
    	$UsdYenRate= 110;
    	$YenVndRate= 211;
    	if ($input == 'VND' && $output == 'USD') {
    		$moneyOut= $moneyIn / $UsdVndRate;
    		echo $moneyOut;	
    	}
    	else if ($input == "USD" && $output == 'VND') {
    		$moneyOut= $moneyIn * $UsdVndRate;
    		echo $moneyOut;	
    	}
    	else if ($input == "USD" && $output == "YEN") {
    		$moneyOut= $moneyIn * $UsdYenRate;
    		echo $moneyOut;	
    	}
    	else if ($input == "YEN" && $output == "USD") {
    		$moneyOut= $moneyIn / $UsdYenRate;
    		echo $moneyOut;	
    	}
    	else if ($input == "VND" && $output == "YEN") {
    		$moneyOut= $moneyIn / $YenVndRate;
    		echo $moneyOut;	
    	}
    	else if ($input == "YEN" && $output == "VND") {
    		$moneyOut= $moneyIn * $YenVndRate;
    		echo $moneyOut;	
    	}
    
}
    ?>
</body>
</html>