<?php
  /*
  // Example #1:

  class Task {

    public $description = 'Go to the store';
  }

  $task = new Task();

  var_dump($task->description); // Output: string(15) "Go to the store"

  // Example #2:

  class Task {
    public $description;

    public function __construct()
    {
      var_dump('CALLED');   // Output: string(6) "CALLED"
    }
  }

  $task = new Task('Learn OOP');

  var_dump($task->description);   // Output: NULL

  // Example #3:

  class Task {
    public $description;

    public function __construct($description)
    {
      var_dump($description);   // Output: string(9) "Learn OOP"
    }
  }

  $task = new Task('Learn OOP');

  var_dump($task->description);   // Output: NULL
  
  // Example #4:

  class Task {
    public $description;

    public function __construct($description)
    {
      $this->description = $description;
    }
  }

  $task = new Task('Learn OOP');

  var_dump($task->description);   // Output: string(9) "Learn OOP"

  // Example #5:

  class Task {
    public $description;

    public function __construct($description)
    {
      $this->description = $description;
    }
  }

  $task = new Task('Learn OOP');

  $task2 = new Task('Learn PHP');

  var_dump($task2->description);   // Output: string(9) "Learn PHP"

  // Example #6:

  class Task {
    public $description;

    public $completed = false;

    public function __construct($description)
    {
      $this->description = $description;
    }
  }

  $task = new Task('Learn OOP');

  var_dump($task->completed);   // Output: bool(false)

   */

  // Example #7:

  class Task {
    public $description;

    public $completed = false;

    public function __construct($description)
    {
      $this->description = $description;
    }

    public function complete()
    {
      $this->completed = true;
    }
  }

  $task = new Task('Learn OOP');

  $task->complete();

  var_dump($task->completed);   // Output: bool(true)