<?php
class Car {
  // Properties
public $car_name;
public $car_color;


  // Methods
function set_name($name) {
    $this->car_name = $name;
}
function get_name() {
    return $this->car_name;
}

function set_color($color)
{
    $this->car_color = $color;
}
function get_color()
{
    return $this->car_color;
}


}

$car_a = new Car();

// $car_a->set_name('자동차');
// echo "Name: " . $car_a->get_name()."\n";
// $car_a->set_color('빨강');
// echo "Color: " . $car_a->get_color() . "\n";
// echo $car_a->get_color()."색". $car_a->get_name();

function car_make($type, $car_color, $car_name){
    $type->set_color($car_color);
    $type->set_name($car_name);
}

function car_out($type)
{
    return $type->get_color() . " color " . $type->get_name();
}

car_make($car_a,"Red","car");
echo car_out($car_a);

?>