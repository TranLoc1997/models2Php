<!DOCTYPE HTML>
<html>
<style type="text/css">
.login {
  height:300px; width:250px;
  margin:0;
  padding:10px;
  border:1px #CCC solid;
}
.login input {
  padding:5px; margin:5px
}
</style>  
<body>

  <form method = "post">
    <div class="login">
     <h2>mang1</h2>
     <input type="text" name="mang1" size="30"  placeholder="nhap mang 1" />
     <input type="texl" name="mang2" size="30" placeholder="nhap mang 2" />
     <input type="submit" value="Sign in"/>
     
     </div>
   </div>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $mangoan = $_POST["mang1"]; 
 $mangtow = $_POST["mang2"];
 $array1 = explode(",",$mangoan);
 $array2 = explode(",",$mangtow);
 $array3=array_merge($array1,$array2);
 echo "<pre>";
 print_r($array3);
 echo "</pre>";

}
?>
</body>
</html>