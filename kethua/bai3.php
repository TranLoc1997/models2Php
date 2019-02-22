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

		public function Point()
		{
			$this->x = 0;
			$this->y = 0;
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
			$this->x; 
			$this->y;
			return $this;
		}
		public function setXY($x,$y)
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
		
		public function MoveablePoint()
		{
			parent::Point($x, $y);
			$this->xSpeed = 0;
			$this->ySpeed = 0;
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
		public function setSpeed($x,$y, $xSpeed,  $ySpeed)
		{	
			$this->x = $x; 
			$this->y = $y;
			$this->xSpeed = $xSpeed;
			$this->ySpeed = $ySpeed;
		}
		public function getSpeed()
		{
			$this->x; 
			$this->y;
			$this->xSpeed; 
			$this->ySpeed;
			return $this;
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
	$run = new Point();
	$run ->setX(5);
	$run ->setY(6);

	echo $run ->getX()." ".$run ->getY();
	$run2 = new MoveablePoint();
	echo "<br>";

	$run2->setSpeed(20, 30, 60, 70);
    
    echo $run2->toString();
    echo "<pre>";
    print_r($run2->move()) ;//20+50,40+70
    echo "</pre>";

    ?>

</body>
</html>