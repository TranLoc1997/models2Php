<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	class Circle {
		public $radius;
		private $color;
		function __construct($radius,$color)
		{
			$this ->radius=$radius;
			$this ->color=$color;
		}
		public function getradius()
		{
			return $this ->radius;
		}
		public function getcolor()
		{
			return $this ->color;
		}
		public function setradio($radiuss){
			$this ->radius=$radiuss;
		}
		public function setcoler($coles){
			$this ->color=$coles;
		}
		public function dientich(){
			return(pow($this->radius,2)*3.14);
		}
		function toString(){

			echo "Ban Kính"." ".$this ->radius." "."có màu ".$this ->color. "<br> Diện tích".$this ->dientich()."<br>"  ;

		}

	}
	$test =new Circle(4,"xanh");
	$test ->toString();
	/**
	 * 
	 */
	class Cylinder  extends Circle
	{
		private $chieucao;
		function __construct($radius,$color,$chieucao)
		{
			parent::__construct($radius,$color);
			$this->chieucao=$chieucao;
		}
		public function getchieucao()
		{
			return $this ->chieucao;
		}
		public function setchieucao($height){
			$this->chieucao=$height 	;
		}
		function thetich(){
			return (($this->chieucao)*3.14*pow($this->radius,2));
		}
		function toString(){

			echo "Ban Kính"." ".$this ->radius." "."có màu ".$this ->color. "<br> Thể tích".$this->thetich()."<br>"  ;

		}
	}
	$test1 =new Cylinder(4,"vang",20);
	$test1 ->toString();




	?>

	</body>
	</html>