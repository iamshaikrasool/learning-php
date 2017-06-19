<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learning PHP</title>
  </head>
  <body>
    <ul>
      <?php foreach ($names as $name) : ?>
        <li><?= $name; ?></li>
      <?php endforeach; ?>

      <?php
        foreach ($names as $name) {
          echo "<li>$name</li>";
        }
      ?>
    </ul>
  </body>
</html>
