<?php
class Dog
{
    protected $breed;

    public function __construct($breed)
    {
        $this->breed = $breed;
    }

    public function makeSound()
    {
        switch ($this->breed) {
            case 'shiba-inu':
                return 'woof! woof!';
            case 'mops':
                return 'woof!';
            case 'dachshund':
                return 'bark!';
            case 'plush-labrador':
                return 'woof! woof!';
            case 'rubber-dachshund':
                return 'squeak! squeak!';
            default:
                return 'Unknown breed';
        }
    }

    public function hunt()
    {
        switch ($this->breed) {
            case 'shiba-inu':
                return 'Hunting lazily';
            case 'mops':
                return 'Too lazy to hunt';
            case 'dachshund':
                return 'Hunting for small animals';
            case 'plush-labrador':
                return 'come on its`s just a toy';
            case 'rubber-dachshund':
                return 'come on its`s a toy';
            default:
                return 'Unknown breed';
        }
    }
}

$command = readline("Enter command (e.g. shiba-inu sound): ");

$parts = explode(' ', $command);

if (count($parts) != 2) {
    echo "Invalid command format. Please use breed and action (e.g. shiba-inu sound).";
    exit(1);
}

$breed = $parts[0];
$action = $parts[1];

$dog = new Dog($breed);

switch ($action) {
    case 'sound':
        echo $dog->makeSound();
        break;
    case 'hunt':
        echo $dog->hunt();
        break;
    default:
        echo "Invalid action. Please use 'sound' or 'hunt'.";
        exit(1);
}