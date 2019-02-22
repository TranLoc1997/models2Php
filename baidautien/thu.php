<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <style>
    input[type=text] {
        width: 300px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        padding: 12px 10px 12px 10px;
}
#submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
}
</style>
</head>
<body>
    <br/>
    <h3>Từ Điển Anh - Việt</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
      <input type = "submit" id = "submit" value = "Tìm"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$searchword = $_POST["search"];
$flag = 0;
$dictionary = array(
0                   => 'Không',
1                   => 'Một',
2                   => 'Hai',
3                   => 'Ba',
4                   => 'Bốn',
5                   => 'Năm',
6                   => 'Sáu',
7                   => 'Bảy',
8                   => 'Tám',
9                   => 'Chín',
10                  => 'Mười',
11                  => 'Mười một',
12                  => 'Mười hai',
13                  => 'Mười ba',
14                  => 'Mười bốn',
15                  => 'Mười năm',
16                  => 'Mười sáu',
17                  => 'Mười bảy',
18                  => 'Mười tám',
19                  => 'Mười chín',
20                  => 'Hai mươi',
30                  => 'Ba mươi',
40                  => 'Bốn mươi',
50                  => 'Năm mươi',
60                  => 'Sáu mươi',
70                  => 'Bảy mươi',
80                  => 'Tám mươi',
90                  => 'Chín mươi',
100                 => 'trăm',
1000                => 'ngàn',
1000000             => 'triệu',
1000000000          => 'tỷ',
1000000000000       => 'nghìn tỷ',
1000000000000000    => 'ngàn triệu triệu',
1000000000000000000 => 'tỷ tỷ'
);
foreach($dictionary as $word => $description) {
if($word == $searchword){
echo "So: " . $word . ". <br/>Nghĩa là: " . $description;
echo "<br/>";
}
}
switch ($searchword) {
        case $word<30:
                echo "So: " . $word . ". <br/>'ba' là: " . $description.$word;
                break;
        
        
}
}
?>
</body>
</html>