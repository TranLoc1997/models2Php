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
  <?php
  
  if (isset($_POST["So"])) {

    $So = $_POST["So"] ;
    if (is_numeric($So)) {
      switch ( $So)
      {
        case 0 :
        $Chu = "không";
        break;
        case 1:
        $Chu = "Một";
        break;
        case 2:
        $Chu = "Hai";
        break;
        case 3:
        $Chu = "Ba";
        break;
        case 4 :
        $Chu = "Bốn";
        break;
        case 5 :
        $Chu = "năm";
        break;
        case 6 :
        $Chu = "sau";
        break;
        case 7 :
        $Chu = "bay";
        break;
        case 8 :
        $Chu = "tam";
        break;
        case 9 :
        $Chu = "chin";
        break;
        case 10 :
        $Chu = "chin";
        break;
        
      }
      
        
        
      }
    }
  
  ?>
  <br/>
  <h3>Nhap Số</h3>
  <form action="" method="post">
    <input type="text" value="<?php echo $_POST["So"];?>" name="So" placeholder="Nhập Số cần tìm"/>
    <input type = "submit" id = "submit" name="submit" value = "Tìm"/>
    <input type="text" value="<?php echo $Chu;?>" name="Chu" placeholder=""/>
    
  </form>
  
</body>
</html>