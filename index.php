<?php
require "vendor/autoload.php";

use App\Cat;
use App\Dog;
use App\Zoo;


$cat1 = new Cat(
    "Сима",
    1.5,
    "black"
);
$cat2 = new Cat(
    "Семен",
    3.5,
    "gray"
);

$dog1 = new Dog(
    "Буся",
    9,
    "Шарпей"
);
$dog2 = new Dog(
    "Владос",
    20,
    "дворняга"
);

$zoo = new Zoo();
$zoo->addAnimal($cat1);
$zoo->addAnimal($cat2);
$zoo->addAnimal($dog1);
$zoo->addAnimal($dog2);

$zoo->listAnimals();
$zoo->animalSounds();