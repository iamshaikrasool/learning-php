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
      <!-- Example #1: -->
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
      <!-- Example #2: -->
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
