## Classes 101

I know you're excited about MySQL, and want to fetch records using PHP. However, we need to make one quick pit stop. We must learn the basics of writing classes, and creating objects.

Example #1:
Create `classes-101.php`

```php
<?php

require 'import/classes-101/functions.php';

  class Task {

    protected $description;

    protected $completed = false;

    public function __construct($description)
    {
      $this->description = $description;
    }
  }

  $task = new Task('Go to the store');

  dd($task);
```

and also create `import/classes-101/functions.php`

```php
<?php
  function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}
```

Output:
```
object(Task)#1 (2) {
  ["description":protected]=>
  string(15) "Go to the store"
  ["completed":protected]=>
  bool(false)
}
```

Example #2:
Create `classes-101.php`

```php
<?php

  class Task {

    protected $description;

    protected $completed = false;

    // Automatically triggered on instantiation
    public function __construct($description)
    {
      $this->description = $description;
    }

    public function isComplete()
    {
      return $this->completed;
    }
  }

  $task = new Task('Go to the store');

  var_dump($task->isComplete());
```

Output: `bool(false)`

Example #3:
Create `classes-101.php`

```php
<?php

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
```

Output: `bool(true)`

Example #4:
Create `classes-101.php`

```php
<?php

require 'import/classes-101/functions.php';

class Task {

  protected $description;

  protected $completed = false;

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

dd($tasks);
``
and also create `import/classes-101/functions.php`

```php
<?php
  function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}
```
Output:
```
array(3) {
  [0]=>
  object(Task)#1 (2) {
    ["description":protected]=>
    string(15) "Go to the store"
    ["completed":protected]=>
    bool(false)
  }
  [1]=>
  object(Task)#2 (2) {
    ["description":protected]=>
    string(17) "Finish my project"
    ["completed":protected]=>
    bool(false)
  }
  [2]=>
  object(Task)#3 (2) {
    ["description":protected]=>
    string(13) "Clean my room"
    ["completed":protected]=>
    bool(false)
  }
}
```

Example #5:
Create a view with `classes-101.view.php`
```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tasks</title>
  </head>
  <body>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li><?= $task->description; ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
```

importing `classes-101.view.php` into `classes-101.php`
```php
<?php

class Task {

  protected $description;

  protected $completed = false;

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

require 'views/classes-101.view.php';
```

Output:
```
Fatal error: Uncaught Error: Cannot access protected property Task::$description in C:\laragon\www\learning-php\code\basics\views\classes-101.view.php:10
```

Example #6:
Create a view with `classes-101.view.php`
```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tasks</title>
  </head>
  <body>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li><?= $task->description; ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
```

importing `classes-101.view.php` into `classes-101.php`
```php
<?php

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

require 'views/classes-101.view.php';
```

Output:
```
	• Go to the store
	• Finish my project
	• Clean my room
```

Example #7:
Create a view with `classes-101.view.php`
```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tasks</title>
  </head>
  <body>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li>
          <?php if ($task->completed) : ?>
            <strike>
          <?php endif; ?>

          <?= $task->description; ?>

          <?php if ($task->completed) : ?>
            </strike>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
```

importing `classes-101.view.php` into `classes-101.php`
```php
<?php

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

require 'views/classes-101.view.php';
```

Output:
```
	• Go to the store (with Strike)
	• Finish my project
	• Clean my room
```

Example #8:
Create a view with `classes-101.view.php`
```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tasks</title>
  </head>
  <body>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li>
          <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
          <?php else: ?>
            <?= $task->description; ?>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
```

importing `classes-101.view.php` into `classes-101.php`
```php
<?php

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

require 'views/classes-101.view.php';
```

Output:
```
	• Go to the store (with Strike)
	• Finish my project
	• Clean my room
```
