<?php

class Cat
{
    public $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function add_age()
    {
        $this->age++;
    }

    public function getstr() {
		$str = "\nВік кота: {$this->age}.";
		return $str;
	}
}

// $kitty = new Cat(5);
// echo $kitty->age;

// оголошуємо успадкований клас
class MyCat extends Cat
{
    public $name;
    function __construct($age, $name="") {
		// викликаємо метод-конструктор батьківського класу
		parent::__construct ($age);

		// ініціалізуємо властивість, визначену у підкласі
		$this->name = $name;
	}
    // визначаємо власний метод підкласу
    public function sleep()
    {
        echo "\nZzzzz...";
        $this->eat();
    }

    protected function eat(){
        echo "\nChrum-chrum";
    }

    public function getstr() {
        $str = parent::getstr();        
		$str .= "\nІм'я кота: {$this->name}.";
		return $str;
	}

    public function __toString() {
        return "\n{$this->name} {$this->age}";
    }
}

class MyCatMeow extends MyCat
{
    // визначаємо власний метод підкласу
    public function meow()
    {
        echo "\nmeow!";
    }

    public function sleep()
    {
        echo "\nZz...";
    }

    function getstr() {
		$str = parent::getstr ();

		//$str .= "\nВік: {$this->age} років.";
        $str .= " I can meow";
		return $str;
	}
}

$kitty = new MyCat(5, "Machka");
echo $kitty->age;
$kitty->add_age();
echo $kitty->age;
echo $kitty->name;
echo $kitty;
echo $kitty->getstr();

$kitty->sleep();
// $kitty->eat();

$kitty1 = new MyCatMeow(5, "Karfa");
echo $kitty1->age;
$kitty1->add_age();
echo $kitty1->age;
echo $kitty1->name;
echo $kitty1;

$kitty1->meow();
$kitty1->sleep();
echo $kitty1->getstr();