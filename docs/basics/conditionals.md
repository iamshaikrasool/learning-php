## Conditionals

A conditional is how we branch our logic into different paths. "If some value is true, then we want to proceed in this way. Otherwise, let's handle it in that way." As you can see, booleans and conditionals go hand-in-hand.

Example #1:

Create a view with `conditionals.view.php`
```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Booleans</title>
  </head>
  <body>
    <h1><?= ucwords("Task for the day"); ?></h1>
    <ul>
      <li>
        <strong>Name: </strong> <?= $task['title']; ?>
      </li>
      <li>
        <strong>Due Date: </strong> <?= $task['due']; ?>
      </li>
      <li>
        <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
      </li>
      <li>
        <strong>Status: </strong>
        <?php
          if ($task['completed'] == true ) {
            echo "Complete";
          } else {
            echo "Incomplete";
          }
        ?>
      </li>
    </ul>
  </body>
</html>
```

and importing `conditionals.view.php` in `conditionals.php`
```php
<?php

  $task = [
    'title' => 'Finished homework',
    'due' => 'today',
    'assigned_to' => 'Mueed',
    'completed' => true
  ];

  require 'views/conditionals.view.php';
```

Output:
```
Task For The Day

	• Name: Finished homework
	• Due Date: today
	• Person Responsible: Mueed
	• Status: Completed
```

Example #2:

Create a view with `conditionals.view.php`
```html
<h1><?= ucwords("Task for the day"); ?></h1>
<ul>
  <li>
    <strong>Name: </strong> <?= $task['title']; ?>
  </li>
  <li>
    <strong>Due Date: </strong> <?= $task['due']; ?>
  </li>
  <li>
    <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
  </li>
  <li>
    <strong>Status: </strong>
      <?php if ($task['completed']) : ?>
        <span class="icon">&#9989;</span>
      <?php else : ?>
        <span class="icon">Incomplete</span>
      <?php endif; ?>
  </li>
</ul>
</body>
</html>
```

and importing `conditionals.view.php` in `conditionals.php`
```php
<?php

  $task = [
    'title' => 'Finished homework',
    'due' => 'today',
    'assigned_to' => 'Mueed',
    'completed' => true
  ];

  require 'views/conditionals.view.php';
```

Output:
```
Task For The Day

	• Name: Finished homework
	• Due Date: today
	• Person Responsible: Mueed
	• Status: ✅
```
