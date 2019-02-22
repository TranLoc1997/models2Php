<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>
  <?php 
  class Shape
  {
   public $name;

   public function Shape($name)
   {
     $this->name = $name;

   }
   public function dientich(){
     return " dien tich";
   }
 }
 interface Colorable  {
  public function howToColor() ;    
}
class Square extends shape implements Colorable
{   private $width;
  public function Square($name, $width)
  {
    parent::shape($name);
    $this ->width = $width;

  }
  public function getwidth(){
    $this ->width;
  }
  public function setwidth($width)
  {
    return $this ->width=$width;
  }
  public function calculateArea(){
    return $this->width * $this->width;
  }
  public function howToColor(){

    echo "Color all four sides.";
    return ;
  }
  function toString(){

    echo"<br>" .$this ->name. "<br> Diện tích :"." ".$this ->calculateArea()."<br>"  ;
  }
}
class  extends Shape implements Colorable {
  private $radius;
  private $persent;
  function Circle($name,$radius)
  {
    parent::Shape($name);
    $this ->radius=$radius;
    

  }
  public function getradius()
  {
    return $this ->radius;
  }
  public function getname()
  {
    return $this ->name;
  }
  public function getpersent(){
    $this ->persent;
  }
  public function setname($name)
  {
    return $this ->name=$name;
  }
  public function setradio($radiuss){
    $this ->radius=$radiuss;
  }
  public function setpersent($persent){
    $this ->persent=$persent;
  }

  public function dientich(){
    return(pow($this->radius,2)*pi());
  }

  public function howToColor(){

    echo "Color all four sides.";
    return ;
  }
  function toString(){

    echo"<br>" .$this ->name. "<br> Diện tích :"." ".$this ->calculateArea()."<br>"  ;
  }

}


$mang[0] =new Square("vuong",10);
$mang[1] =new Circle("tron",8);

foreach ($mang as $shape) {

 echo "dientich: ".$shape->dientich().'<br/>';
 if ($shape instanceof Colorable) {
   echo $shape->howToColor()."<br/>";

 }
 echo "<br/>";
}

?>

</body>
</html>
