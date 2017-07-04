<?php

/*
  // From Example 1 to 3:

  require 'import/classes-101/functions.php';

  class Task {

    protected $description;

    protected $completed = false;

    // Automatically triggered on instantiation
    public function __construct($description)
    {
      $this->description = $description;
    }

    public function complete()
    {
      $this->completed = true;
    }

    public function isComplete()
    {
      return $this->completed;
    }
  }

  $task = new Task('Go to the store');

  $task->complete(); // complete the task

  var_dump($task->isComplete());

  dd($task);
*/

  // require 'import/classes-101/functions.php';

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

    public function isComplete()
    {
      return $this->completed;
    }
  }

  $tasks = [
    new Task('Go to the store'),
    new Task('Finish my project'),
    new Task('Clean my room')
  ];

  $tasks[0]->complete();

  // dd($tasks);

  require 'views/classes-101.view.php';
