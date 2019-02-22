<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
    /**
      *
      */
    class QuadraticEquation{
        private $a;
        private $b;
        private $c;
        
        public function getA() {
            return $this->a;
        }
        public function getB() {
            return $this->b;
        }
        public function getC() {
            return $this->c;
        }
        public function setA($new_a){
            $this->a =$new_a;
        }
        public function setB($new_b){
            $this->b =$new_b;
        }
        public function setC($new_c){
            $this->c =$new_c;    
        }
        public function getDiscriminant(){
            return (2*$this->b) - (4*$this->a*$this->c);
        }
        public function getroot1(){
            return $r1=(-$this->b + pow($this->getDiscriminant(), 0.5))/(2*$this->a);
        }
        public function getroot2(){
            return $r1=(-$this->b - pow($this->getDiscriminant(), 0.5))/(2*$this->a);
        }
        public function checkResult(){
            if ($this->getDiscriminant()>= 0) {
                echo $this->getroot1()."<br>".$this->getroot2();
            }
        }
    }

    $newMath = new QuadraticEquation();
    $newMath->getA();
    $newMath->getB();
    $newMath->getC();
    $newMath->setA(1.0);
    $newMath->setB(3);
    $newMath->setC(1);
    echo $delta = $newMath->getDiscriminant()."<br>";
    $newMath->checkResult();
    
    ?>
</body>
</html>