<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <?php
    class Point
    {
        private $x;
        private $y;
        public function __construct($x = 0.0, $y = 0.0)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function getX()
        {
            return $this->x;
        }
        public function setX($x)
        {
            $this->x = $x;
        }
        public function getY()
        {
            return $this->y;
        }
        public function setY($y)
        {
            $this->y = $y;
        }
        public function getXY()
        {
            return array("x" => $this->x, "y" => $this->y);
        }
        public function setXY($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function toString()
        {
            return "($this->x,$this->y)";
        }
    }
    class MoveablePoint extends Point
    {
        private $xSpeed;
        private $ySpeed;
        public function __construct($x = 0.0, $y = 0.0, $xSpeed = 0.0, $ySpeed = 0.0)
        {
            parent::__construct($x, $y);
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed;
        }
        function getxSpeed()
        {
            return $this->xSpeed;
        }
        public function setxSpeed($xSpeed)
        {
            $this->xSpeed = $xSpeed;
        }
        function getySpeed()
        {
            return $this->ySpeed;
        }
        public function setySpeed($ySpeed)
        {
            $this->ySpeed = $ySpeed;
        }
        public function setSpeed($x, $y, $xSpeed, $ySpeed)
        {
            $this->x = $x;
            $this->y = $y;
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed;
        }
        public function getSpeed()
        {
            return array("X" => $this->x, "Y" => $this->y, "Xspeed" => $this->xSpeed, "Yspeed" => $this->ySpeed);
        }
        public function toString()
        {
            return "xy=" . "($this->x,$this->y)" . "</br>" . "speed=" . "($this->xSpeed,$this->ySpeed)";
        }
        public function move()
        {
            $this->x += $this->xSpeed;
            $this->y += $this->ySpeed;
            return $this;
        }
    }
    $run = new Point(10, 20);
    foreach ($run->getXY() as $value => $key) {
        echo $value . "=" . $key . "</br>";
    }
    $run2 = new MoveablePoint();
    $run2->setSpeed(20, 30, 50, 70);
    $run2->move();//20+50,40+70
    foreach ($run2->getSpeed() as $value => $key) {
        echo $value . "=" . $key . "</br>";
    }
    echo $run2->toString();
    ?>

</body>
</html>