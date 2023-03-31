<?php
class Student {
  // Properties
public $name;
private $stu_age;
protected $stu_id;

  // Methods
function set_name($name) {
    $this->name = $name;
}
function get_name() {
    return $this->name;
}

function set_id($stu_id)
{
    $this->stu_id = $stu_id;
}
function get_id()
{
    return $this->stu_id;
}

}

$std_a = new Student();
$std_a->set_name('Subin');
echo "Name: " . $std_a->get_name()."\n";
$std_a->set_id('SNOH6839');
echo "ID: " . $std_a->get_id();
?>
