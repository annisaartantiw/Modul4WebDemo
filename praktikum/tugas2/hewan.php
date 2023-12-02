<?php

namespace MyApp;

abstract class Animal
{
    protected $name;
    protected $sound;

    abstract public function makeSound();
}

trait CanFly
{
    public function fly()
    {
        echo $this->name . " sedang terbang.\n";
    }
}

class Bird extends Animal
{
    use CanFly;

    public function __construct($name, $sound)
    {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function makeSound()
    {
        echo $this->name . " berkicaw " . $this->sound . "\n";
    }
}

class Dog extends Animal
{
    public function __construct($name, $sound)
    {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function makeSound()
    {
        echo $this->name . " menggonggong " . $this->sound . "\n";
    }
}

$bird = new Bird("Ciki", "Cuit-Cuit");
$bird->makeSound();
$bird->fly();

$dog = new Dog("Dogas", "Guk-guk");
$dog->makeSound();
