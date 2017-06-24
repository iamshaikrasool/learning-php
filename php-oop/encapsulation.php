<?php
/*
  // Example #1: with out Encapsulation

  class Person {

    public $name;

    public $age;

      public function __construct($name) {
        $this->name = $name;
      }

      public function getAge()
      {
        return $this->age * 365;
      }

      public function setAge($age)
      {
        if ($age < 18)
        {
          throw new Exception("Person is not old enough.");
        }
        $this->age = $age;
      }
    }

    $shaik = new Person('Rasool');

    $shaik->setAge(30);

    $shaik->age = 2;

    var_dump($shaik->getAge()); // Output: int(730)
*/
  // Example #2: with Encapsulation

  class Person {

    private $name;

    private $age;

    public function __construct($name) {
      $this->name = $name;
    }

    public function getAge()
    {
      return $this->age * 365;
    }

    public function setAge($age)
    {
      if ($age < 18)
      {
        throw new Exception("Person is not old enough.");
      }
      $this->age = $age;
    }
  }

  $shaik = new Person('Rasool');

  $shaik->setAge(30);

  $shaik->age = 2;

  var_dump($shaik->getAge()); // Output: Uncaught Error: Cannot access private property Person::$age
