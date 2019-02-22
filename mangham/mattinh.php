<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
<?php
function calc($x,$y)
{
    if (($y == 0) || ($x == 0 && $y == 0)) {
        throw new Exception("Lỗi");
    }
    else {
        $cong = $x + $y;
        $tru = $x - $y;
        $nhan = $x * $y;
        $chia = $x / $y;
    }
    echo $x." + ".$y." = ".$cong."<br>";
    echo $x." - ".$y." = ".$tru."<br>";
    echo $x." * ".$y." = ".$nhan."<br>";
    echo $x." / ".$y." = ".$chia."<br>";
}
try {
    calc(5,5);
    echo "Message: Hợp lệ <br>";

} catch (Exception $e) {
    echo 'Message: ' .$e->getMessage();

}
try {
    calc(0,1);
    echo "Message: Hợp lệ <br>";

} catch (Exception $e) {
    echo 'Message: ' .$e->getMessage();

}
try {
    calc(0,0);
    echo "Hợp lệ";

} catch (Exception $e) {
    echo 'Message: ' .$e->getMessage();

}
?>

</body>
</html>