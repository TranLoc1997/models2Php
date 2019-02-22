
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<head>
    <title>Future Value Calculator</title>
    <style type="text/css">
    #content{
        width: 450px;
        margin: 0 auto;
        padding: 0px 20px 20px;
        background: white;
        border: 2px solid navy;
    }

    h1{
        color: navy;
    }

    label{
        width: 10em;
        padding-right: 1em;
        float: left;
    }

    #data input{
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }

    #buttons input{
        float: left;
        margin-bottom: .5em;
    }
    br{
        clear: left;
    }
    .error{
        color: red;
    }

</style>
</head>
<body>
    <?php
    if (isset($_POST)){
    
    $investment=$_POST['investment'];
    $rate=$_POST['rate'];
    $years=$_POST['years'];
    echo "Investment Amount:".'$' .$investment . "<br/>";
    echo " Yearly Interest Rate:" .$rate .'%'."<br/>";
    echo "Number of Years:". $years ."<br/>";

    for ($i=1; $i<=$years; $i++)
    {
       $investment=$investment + ($investment * $rate * 0.01);
       echo "Future Value:". '$' .$investment;
   }
}
?>
</body>
</html>