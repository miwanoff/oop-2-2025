<?php

class Animal
{
    public $name;
    public function getName()
    {
        echo $this->name;
    }
}

trait CatSounds
{
    public function sound()
    {
        echo "Meowww\n";
    }
}

trait BigAnimal
{
    public function big()
    {
        echo "A big animal\n";
    }
}

trait BigCar
{
    public function big()
    {
        echo "A big car\n";
    }
}

class Tiger extends Animal
{
    use CatSounds;
    use BigAnimal;
}

class Cat extends Animal
{
    use CatSounds;
}

class Elefant extends Animal
{
    use BigAnimal, BigCar {
		BigAnimal::big insteadof BigCar;		
	}
}

$tiger = new Tiger();
$tiger->sound();
$tiger->big();
$cat = new Cat();
$cat->sound();
$elefant= new Elefant();
$elefant->big();