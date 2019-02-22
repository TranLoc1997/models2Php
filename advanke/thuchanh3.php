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
   public function compareTo($objOne, $objTwo);
 }
 class ComparableCircle extends Circle implements Comparable
 {
   public function __construct($name, $radius)
   {
     parent::__construct($name, $radius);
   }

   public function compareTo($circleOne, $circleTwo)
   {
     $circleOneRadius = $circleOne->getRadius();
     $circleTwoRadius = $circleTwo->getRadius();

     if ($circleOneRadius > $circleTwoRadius) {
       return 1;
     }  else if($circleOneRadius < $circleTwoRadius) {
       return -1;
     } else {
       return 0;
     }
   }
 }
 $circles[0] = new ComparableCircle('circleOne', 8);
 $circles[1] = new ComparableCircle('circleTwo', 2);
 $circles[2] = new ComparableCircle('circleThree', 4);

 echo ('Pre-sorted: <br>');
 foreach ($circles as $circle) {
   echo ('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
 }

 sort($circles);

 echo ('After-sorted: <br>');
 foreach ($circles as $circle) {
   echo ('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
 }

 ?>
</body>
</html>