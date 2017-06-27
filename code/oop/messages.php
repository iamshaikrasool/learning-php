<?php

class Person {

  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
}

class Business {

  protected $staff;

  public function __construct(Staff $staff)
  {
    $this->staff = $staff;
  }

  public function hire(Person $person)
  {
    // add $person to the staff collection
    $this->staff->add($person);
  }

  public function getStaffMembers()
  {
    return $this->staff->members();
  }
}

class Staff {

  protected $members = [];

  public function __construct($members = [])
  {
    $this->members = $members;
  }

  public function add(Person $person)
  {
    $this->members[] = $person;
  }
  public function members()
  {
    return $this->members;
  }
}

$shaik = new Person('Shaik Rasool');

$staff = new Staff([$shaik]);

$teamwedesign = new Business($staff);

$teamwedesign->hire(new Person('Abdul Mueed')); // object(Staff)#2 (1) { ["members":protected]=> array(2) { [0]=> object(Person)#1 (1) { ["name":protected]=> string(12) "Shaik Rasool" } [1]=> object(Person)#4 (1) { ["name":protected]=> string(11) "Abdul Mueed" } } }

// var_dump($staff); // Output: object(Staff)#2 (1) { ["members":protected]=> array(1) { [0]=> object(Person)#1 (1) { ["name":protected]=> string(12) "Shaik Rasool" } } }

var_dump($teamwedesign->getStaffMembers()); // Output: array(2) { [0]=> object(Person)#1 (1) { ["name":protected]=> string(12) "Shaik Rasool" } [1]=> object(Person)#4 (1) { ["name":protected]=> string(11) "Abdul Mueed" } }
