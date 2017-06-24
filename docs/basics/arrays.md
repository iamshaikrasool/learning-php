## Understanding Arrays

Let's learn about a new construct: arrays. Think of them as primitive collections of related data. Maybe you have an array of names, or animals, or practically anything. Even better, we can filter through this data and act upon it with ease.

Example #1:
```php
<?php
  $names = [
    'John',
    'Rasool',
    'Mueed'
  ];

  foreach ($names as $name) {
    echo $name . ", ";
  }
 ?>
```
Output: `John, Rasool, Mueed,`

Example #2:
Create a view with `arrays.view.php`

```html
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
```
and importing `arrays.view.php` in `arrays.php`

```php
<?php
  $names = [
    'John',
    'Rasool',
    'Mueed'
  ];

  require 'views/arrays.view.php';
 ?>
```
Output:
```
	• John
	• Rasool
	• Mueed
	• John
	• Rasool
	• Mueed
```
