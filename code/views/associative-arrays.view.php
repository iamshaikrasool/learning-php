<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Associative Arrays</title>
  </head>
  <body>
    <ul>
      <?php foreach ($person as $key => $feature): ?>
        <li><strong><?= $key . " = "; ?></strong><?= $feature; ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
