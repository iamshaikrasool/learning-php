## Intro to PDO

Now that you understand what a class is, we can get back to fetching your first results from the database. To do so, we'll leverage PHP's PDO library, and create a prepared statement.

Example #1: If database not exists.
```php
<?php

  try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todoss', 'root', '');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  require 'views/classes-101.view.php';
```

Output: `SQLSTATE[HY000] [1049] Unknown database 'todoss'`

Example #2: If database exists.
```php
<?php

  try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  $statement = $pdo->prepare('select * from todos');

  $statement->execute();

  echo '<pre>';
  var_dump($statement->fetchAll(PDO::FETCH_OBJ));
  echo '</pre>';

  require 'views/intro-to-pdo.view.php';
```
Output:
```
array(2) {
  [0]=>
  object(stdClass)#3 (3) {
    ["id"]=>
    string(1) "1"
    ["description"]=>
    string(15) "Go to the store"
    ["completed"]=>
    string(1) "0"
  }
  [1]=>
  object(stdClass)#4 (3) {
    ["id"]=>
    string(1) "2"
    ["description"]=>
    string(10) "Clean room"
    ["completed"]=>
    string(1) "1"
  }
}
```

Example #3:
```php
<?php

  try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  $statement = $pdo->prepare('select * from todos');

  $statement->execute();

  $results = $statement->fetchAll(PDO::FETCH_OBJ);

  var_dump($results[0]->description);

  require 'views/intro-to-pdo.view.php';
```

Output: `string(15) "Go to the store"`

Example #4:
Create a view with `intro-to-pdo.view.php`
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

importing `intro-to-pdo.view.php` into `intro-to-pdo.php`
```php
<?php

  try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  $statement = $pdo->prepare('select * from todos');

  $statement->execute();

  $tasks = $statement->fetchAll(PDO::FETCH_OBJ);

  require 'views/intro-to-pdo.view.php';
```

Output:
```
	• Go to the store (with Strike)
	• Finish my project
	• Clean my room
  • complete abdulmueed.net
```

Example #5:
Create a view with `intro-to-pdo.view.php`
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

Create `Task.php`
```php
<?php

  class Task {

    public $description;

    public $completed;
  }
```

importing `intro-to-pdo.view.php` and `Task.php` into `intro-to-pdo.php`
```php
<?php

  require 'import/intro-to-pdo/Task.php';

  try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  $statement = $pdo->prepare('select * from todos');

  $statement->execute();

  $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

  require 'views/intro-to-pdo.view.php';
```

Output:
```
	• Go to the store (with Strike)
	• Finish my project
	• Clean my room
  • complete abdulmueed.net
```

Example #6:
Create a view with `intro-to-pdo.view.php`
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

Create `Task.php`
```php
<?php

  class Task {

    public $description;

    public $completed;
  }
```

Create `functions.php`
```php
<?php

  function connectToDb()
  {
    try {
      return new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  function fetchAllTasks($pdo)
  {
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
  }

  function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
  }
```

importing `intro-to-pdo.view.php`, `functions.php` and `Task.php` into `intro-to-pdo.php`
```php
<?php

  require 'import/intro-to-pdo/Task.php';
  require 'import/intro-to-pdo/functions.php';

  $pdo = connectToDb();

  $tasks = fetchAllTasks($pdo);

  require 'views/intro-to-pdo.view.php';
```

Output:
```
	• Go to the store (with Strike)
	• Finish my project
	• Clean my room
  • complete abdulmueed.net (with Strike)
```
