<?php

class Person{
    public $name;
    public $age;

function introduce(){
    echo "Hi I am {$this->name}, and I am {$this->age} years old. \n";
    }
}


$sumon = new person();
$sumon->name = "Sumon Prodhan";
$sumon->age = 25;
$sumon->introduce();

// echo "Hi, I am {$sumon->name}, and I am {$sumon->age} years old. \n";


$parvin = new person();
$parvin->name = "Parvin Prodhan";
$parvin->age = 18;
$parvin->introduce();

// echo "Hi, I am {$parvin->name}, and I am {$parvin->age} years old. \n";