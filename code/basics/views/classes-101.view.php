<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tasks</title>
  </head>
  <body>
    <!-- Example #6:
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li><?= $task->description; ?></li>
      <?php endforeach; ?>
    </ul>
    -->
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
