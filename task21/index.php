<?php
require_once "objek.php";
$animal = new Animal("Gajah", "Herbivora");
echo $animal->getInfo() . "<br>";

$cat = new Cat("Kitty");
echo $cat->getInfo()."<br>";
$Dog = new Dog("Dogy");
echo $Dog->getInfo();




    