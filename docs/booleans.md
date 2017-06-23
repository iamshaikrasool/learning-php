## Booleans

"Boolean" is a scary, but simple term to understand. It's a data type that represents one of two values: true or false.

Example #1:

Create a view with `booleans.view.php`
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
      <?php foreach ($task as $key => $value): ?>
        <li>
          <strong><?= ucwords($key) . ": " . $value; ?></strong>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
```

and importing `booleans.view.php` in `booleans.php`
```php
<?php

  $task = [
    'title' => 'Finished homework',
    'due' => 'today',
    'assigned_to' => 'Mueed',
    'completed' => false
  ];

  require 'views/booleans.view.php';
```

Output:
```
Task For The Day

	• Title: Finished homework
	• Due: today
	• Assigned_to: Mueed
	• Completed:
```

Example #2:

Create a view with `booleans.view.php`
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
        <strong>Personal Responsible: </strong> <?= $task['assigned_to']; ?>
      </li>
      <li>
        <strong>Status: </strong> <?= $task['completed'] ? "Completed" : "Not Completed"; ?>
      </li>
    </ul>
  </body>
</html>
```

and importing `booleans.view.php` in `booleans.php`
```php
<?php

  $task = [
    'title' => 'Finished homework',
    'due' => 'today',
    'assigned_to' => 'Mueed',
    'completed' => false
  ];

  require 'views/booleans.view.php';
```

Output:
```
Task For The Day

	• Name: Finished homework
	• Due Date: today
	• Personal Responsible: Mueed
	• Status: Not Completed
```
