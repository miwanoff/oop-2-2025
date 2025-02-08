<?php
interface CanSay
{
    public function say();
}

interface CanSay1
{
    public function say();
}

abstract class Animal implements CanSay, CanSay1
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // abstract public function say();

    public function getName()
    {
        return $this->name;
    }
}

class Cat extends Animal
{

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function say()
    {
        echo "meow-meow";
    }
}

class Dog extends Animal
{

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function say()
    {
        echo "woof-woof!";
    }
}

$arr = [new Dog("Jack"), new Dog("Box"), new Cat("Lusi"), new Cat("Mina")];

foreach ($arr as $value) {
    if ($value instanceof Animal) {
        print($value->getName() . " say:\n");
        print($value->say() . "\n");
    }
}