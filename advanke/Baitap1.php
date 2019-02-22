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
 interface Resizeable {
  public function resize() ;    
}
class Circle extends Shape implements Resizeable {
  private $radius;
  private $persent;
  function Circle($radius,$name,$persent)
  {
    $this ->radius=$radius;
    parent::Shape($name);
    $this->persent =$persent;
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
    return(pow($this->radius,2)*3.14);
  }

  public function resize(){
    return $this->dientich()*$this ->persent;
  }
  function toString(){

    echo "Ban Kính"." ".$this ->radius." "."ten ".$this ->name. "<br> Diện tích".$this ->dientich()."<br>"."phan tram".$this->resize()  ;

  }

}


class Rectangle extends Shape implements Resizeable
{
  private $width;
  private $height;
  private $persent;  
  public function Rectangle($name, $width, $height,$persent)
  {
    parent::shape($name);
    $this->width = $width;
    $this->height = $height;
    $this->persent =$persent;
  }
  public function getwidth(){
    $this ->width;
  }
  public function setwidth($width)
  {
    return $this ->width=$width;
  }
  public function getheight(){
    $this ->height;
  }
  public function setheight($height)
  {
    return $this ->height=$height;
  }
  public function setpersent($persent){
    $this ->persent=$persent;
  }
  public function getpersent(){
    $this ->persent;
  }

  public function calculateArea(){
    return $this->height * $this->width;
  }
  public function resize(){
    return $this->calculateArea()*$this ->persent;
  }
  function toString(){

    echo"<br>" .$this ->name. "<br> Diện tích :"." ".$this ->calculateArea()."<br>"."phan tram :"." ".$this->resize()  ;

  }


}


class Square extends shape implements Resizeable
{
    public function Square($name, $width,$persent)
    {
        parent::shape($name);
        $this ->width = $width;
        $this->persent =$persent;
    }
    public function calculateArea(){
    return $this->width * $this->width;
  }
  public function resize(){
    return $this->calculateArea()*$this ->persent;
  }
  function toString(){

    echo"<br>" .$this ->name. "<br> Diện tích :"." ".$this ->calculateArea()."<br>"."phan tram :"." ".$this->resize()  ;

  }
}


$Circle =new Circle(4,"xanh",rand(1,100));

$Circle ->toString();
$Rectangle =new Rectangle ("ChuNhat",20,30,rand(1,100));
$Rectangle->toString();
$Square =new Square("hinhvuong",4,rand(1,100));
$Square->toString();

  ?>

</body>
</html>