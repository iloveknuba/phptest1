<?php

// DogTest.php

require 'Dog.php';

use PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{
    public function testShibaInuSound()
    {
        $dog = new Dog('shiba-inu');
        $this->assertEquals('woof! woof!', $dog->makeSound());
    }

    public function testPugSound()
    {
        $dog = new Dog('mops');
        $this->assertEquals('woof!', $dog->makeSound());
    }

    public function testDachshundSound()
    {
        $dog = new Dog('dachshund');
        $this->assertEquals('bark!', $dog->makeSound());
    }

    public function testPlushLabradorSound()
    {
        $dog = new Dog('plush-labrador');
        $this->assertEquals('woof! woof!', $dog->makeSound());
    }

    public function testRubberDachshundSound()
    {
        $dog = new Dog('rubber-dachshund');
        $this->assertEquals('squeak! squeak!', $dog->makeSound());
    }

    public function testShibaInuHunt()
    {
        $dog = new Dog('shiba-inu');
        $this->assertEquals('Hunting lazily', $dog->hunt());
    }

    public function testPugHunt()
    {
        $dog = new Dog('mops');
        $this->assertEquals('Too lazy to hunt', $dog->hunt());
    }

    public function testDachshundHunt()
    {
        $dog = new Dog('dachshund');
        $this->assertEquals('Hunting for small animals', $dog->hunt());
    }

    public function testPlushLabradorHunt()
    {
        $dog = new Dog('plush-labrador');
        $this->assertEquals('come on its`s just a toy', $dog->hunt());
    }

    public function testRubberDachshundHunt()
    {
        $dog = new Dog('rubber-dachshund');
        $this->assertEquals('come on its`s a toy', $dog->hunt());
    }
}
