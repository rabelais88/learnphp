<?php
class person {
  public $name = "BasicName";
  private $age;
  private static $money = 0;
  function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }
  public function getName(){
    return $this->name;
  }
  public function getAge(){
    return $this->age;
  }

  public function getMoney(){
    return $this::$money;
  }
}

?>