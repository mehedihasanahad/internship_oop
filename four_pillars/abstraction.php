<?php

//Abstraction

//Abstraction is the process of hiding the complex implementation details and showing only the
//essential features of an object. This is usually done by creating abstract classes or interfaces in PHP.
//Abstract classes cannot be instantiated directly and can have both abstract methods
//(which do not have a body) and concrete methods.


// abstract class

abstract class Animal {
    abstract public function makeSound();

    public function sleep() {
        echo "Sleeping...\n";
    }
}

//access abstract class method

// child class of abstract class
class Dog extends Animal {
    public function makeSound() {
        echo "Bark! <br/>";
    }
}

(new Dog())->makeSound();
(new Dog())->makeSound();
(new Dog())->sleep();


