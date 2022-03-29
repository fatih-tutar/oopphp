<?php

// STATIC METHODS AND PROPERTIES

class Car{
    public $color = "Blue";
    public static $brand = "Toyota";
    public $fuelType = "Gasoline";

    public static function sendMessage(){
        echo "Welcome to Car Class";
    }
}

function staticValues(){
    static $fixed = 10;
    $fixed += 10;
    echo $fixed;
    echo "<br/>";
}

staticValues();
staticValues();
staticValues();

$car = new Car;
echo $car->color;
echo "<br/>";

echo Car::$brand;
echo "<br/>";

// We don't create pseudo-objects every time thanks to static declaration
echo Car::sendMessage();
echo "<br/>";

class Math{
    public static function pi()
    {
        return 3.14;
    }

    public static function calculateSquare($edge){
        return $edge * $edge;
    }

    public static $g = 9.81;
    public static function gravity(){
        return self::$g;
    }

    private static $myNum = 5;
    public static function process($edge){
        $square = self::calculateSquare($edge);
        return $square * self::$myNum;
    }
}

echo Math::pi();
echo "<br/>";

echo Math::calculateSquare(5)*Math::gravity();
echo "<br/>";

echo Math::process(6);
echo "<br/>";