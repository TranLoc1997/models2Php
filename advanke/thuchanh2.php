<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Page Title</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" media="screen" href="main.css">
 <script src="main.js"></script>
</head>
<body>
  <?php
  class Circle
  {
   public $radius;
   public $name;
   public function __construct($name, $radius)
   {
     $this->radius = $radius;
     $this->name = $name;
   }
   public function getName() {
     return $this->name;
   }
   public function setName($name) {
     $this->name = $name;
   }
   public function getRadius() {
     return $this->radius;
   }
   public function setRadius($radius)
   {
     $this->radius = $radius;
   }
 }
 interface Comparable
 {
   public function compareTo($objTwo);
 }
 class ComparableCircle extends Circle implements Comparable
 {
   public function __construct($name, $radius)
   {
     parent::__construct($name, $radius);
   }
   public function compareTo($circleTwo)
   {
     $circleTwoRadius = $circleTwo->getRadius();
     if ($this->getRadius() > $circleTwoRadius) {
       return 1;
     }  else if($this->getRadius() < $circleTwoRadius) {
       return -1;
     } else {
       return 0;
     }
   }
 }
 $circleOne = new ComparableCircle('circleOne', 8);
 $circleTwo = new ComparableCircle('circleTwo', 10);
 $circleThree = new ComparableCircle('circleThree', 4);
 $test = $circleOne->compareTo($circleTwo);
 echo ('Comparable: <br>');
 echo $test;
 ?>
</body>
</html>