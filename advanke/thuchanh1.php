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

abstract class Fruit implements Edible
{
}
interface Edible
{
   public function howToEat();
}
class Tiger extends Animal
{
   public function makeSound()
   {
       return "Tiger: roarrrrr!";
   }
}
class Chicken extends Animal implements Edible
{
   public function makeSound()
   {
       return "Chicken: cluck-cluck!";
   }

   public function howToEat()
   {
       return "could be fried";
   }
}
class Apple extends Fruit
{
   public function howToEat()
   {
       return "Apple could be slided";
   }
}
class Orange extends Fruit
{

   public function howToEat()
   {
       return "Orange could be juiced";
   }
}
echo ('---- Animals<br>');

$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
   echo $animal->makeSound() . '<br>';

   if ($animal instanceof Chicken) {
       echo $animal->howToEat() . '<br>';
   }
}

echo ('---- Fruits<br>');

$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
   echo $fruit->howToEat() . '<br>';
}
?>
</body>
</html>