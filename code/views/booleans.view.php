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
        <strong>Status: </strong> <?= $task['completed'] ? "Completed" : "Not Completed"; ?>
      </li>
    </ul>
  </body>
</html>
