<?php
/*
	// Example #1:

	class Person {

		public $name;

		public function __construct($name) {
			$this->name = $name;
		}

	}

	$shaik = new Person('Rasool');

	$shaik->age = 23;

	var_dump($shaik);		// Output: object(Person)#1 (2) { ["name"]=> string(6) "Rasool" ["age"]=> int(23) }

	// Example #2:

	class Person {

		public $name;

		public function __construct($name) {
			$this->name = $name;
		}

	}

	$shaik = new Person('Rasool');

	$shaik->age = 23;

	$shaik->age++;

	var_dump($shaik);		// Output: object(Person)#1 (2) { ["name"]=> string(6) "Rasool" ["age"]=> int(24) }

	// Example #3:

	class Person {

		public $name;

		public $age;

		public function __construct($name) {
			$this->name = $name;
		}

		public function setAge($age) {
			$this->age = $age;
		}

	}

	$shaik = new Person('Rasool');

	$shaik->setAge(32);

	var_dump($shaik);		// Output: object(Person)#1 (2) { ["name"]=> string(6) "Rasool" ["age"]=> int(32) }

	// Example #4:

	class Person {

		public $name;

		public $age;

		public function __construct($name) {
			$this->name = $name;
		}

		public function setAge($age) {

			if ($age < 18) {
				throw new Exception("Person is not old enough.");
			}

			$this->age = $age;
		}
	}

	$shaik = new Person('Rasool');

	$shaik->setAge(12);

	var_dump($shaik);		// Output: Uncaught Exception: Person is not old enough.
*/
	// Example #5:

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

	$shaik->setAge(32);

	var_dump($shaik->getAge()); // Output: int(11680)
