<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title> đổi tiền tệ</title>
    
</head>
<body>
    <table methot="post">
        <tr>
            <th>Amount</th>
            <th>From Currency</th>
            <th>To Currency</th>
            
        </tr>
        <tr>
            <td align="center"><input type="text" name ="so1" id="Tien"/></td>
            <td align="center">
                <select id="FromCurrency">
                    <option value="23000">VND</option>
                    <option value="1">USD</option>
                </select>
            </td>
            <td align="center">
                <select id="ToCurrency">
                    <option value="1">USD</option>
                    <option value="23000">VND</option>
                </select>
            </td>
            <td><button onclick="Convert();">Convert</button></td>
            
        </tr>
    </table>

    <h4 id="Result" style="color:red"></h4>
    <script>
        function Convert(){
            if (isset($_POST)){
            $so1=$_POST['so1'];
            $so1=$_POST['so2'];
            $tinh=$_POST['tinh'];
            var amount = parseInt(document.getElementById("Tien").value);
            var x1 = document.getElementById("ToCurrency").value/document.getElementById("FromCurrency").value;
            var result = amount*x1;
            document.getElementById("Result").innerHTML = "Result: " + result;
        }
    </script>
</body>
</html>

