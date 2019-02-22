<?php 
class Point2D {

    private $x;
    private $y;

    function Point2D()
    {
        $this ->x=0;
        $this ->y=0;
    }
    
//tao Set va get cho x va y

    public function getX() {
        return $this ->x;
    }

    public function getY() {
        return $this->y;
    }

    public function setX( $x) {
        $this->x = $x;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function getXY() {
        $arrayXY = array($this->x, $this ->y);
        return $arrayXY;
    }

    public function setXY($_X,$_Y) {
        $this->x = $_X;
        $this->y = $_Y;
    }

    public function toString(){

        echo "X Y"  ;

    }

}
$tes= new Point2D();
$tes ->toString();
echo "<br>";
echo $tes ->getX()." ".$tes ->getY();
echo "<br>";
$tes ->setX(5);
$tes ->setY(7);
echo $tes ->getX()." ".$tes ->getY();
echo "<br>";
$tes ->setXY(6,7);

print_r($tes ->getXY()) ;
/**
 * 
 */
class Point3D extends Point2D
{
    private $z;

    function Point3D()
    {   parent::Point2D();

        
        $this->z=0;
    }
    public function getZ() {
        return $this->z;
    }

    public function setZ( $z) {
        $this->z = $z;
    }
    public function getXYZ() {
        $arrayXYZ = parent::getXY();
        array_push($arrayXYZ, $this ->z);
        // $arrayXYZ = array(parent::getXY(),$this ->z);
        return $arrayXYZ;
    }

    public function setXYZ($_x,$_y, $_Z) {
        
        parent::setXY($_x,$_y);
        $this->z = $_Z;
    }
    public function toString(){

        echo "X Y Z"  ;

    }


}
$test= new Point3D();
$test ->toString();
echo "<br>";
echo $test ->getX()." ".$test ->getY()." ".$test ->getZ();
echo "<br>";
$test ->setX(5);
$test ->setY(6);
$test ->setZ(7);
echo $test ->getX()." ".$test ->getY()." ".$test ->getZ();
echo "<br>";
$test ->setXYZ(7,7,9);
print_r($test ->getXYZ()) ;

?>