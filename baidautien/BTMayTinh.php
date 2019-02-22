<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
    <form method="post">
         <div class="login">
            <h2>Calculator</h2>
            <input type="text" name="number1" size="25"  placeholder="First operand" />
            <input type="text" name="pheptinh" size="25" placeholder="Operator">
            <input type="text" name="number2" size="25" placeholder="Second operand" />
            <input type="submit" value="Calculator"/>
         </div>
      </form>
      <?php
              if ($_SERVER["REQUEST_METHOD"] === "POST") {
                  $sothunhat = $_POST["number1"];
                  $operator = $_POST["pheptinh"];
                  $sothuhai = $_POST["number2"];
                switch ($operator) {
                    case '+':
                        echo "Kết quả: ".($sothunhat + $sothuhai);
                        break;
                    case '-':
                        echo "Kết quả: ".($sothunhat - $sothuhai);
                        break;
                    case '*':
                        echo "Kết quả: ".($sothunhat * $sothuhai);
                        break;
                    case '/':
                        if ($sothuhai != 0) {
                        echo "Kết quả: ".($sothunhat / $sothuhai);
                        }
                        else echo "Mẫu phải khác 0";
                        break;
                    
                }
              }
      ?>

</body>
</html>