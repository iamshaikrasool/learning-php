## Associative Arrays

We've learned about basic arrays, but you may also creative associative arrays when necessary. The only difference is that each value within the array is associated with a key. Let me show you.

Example #1: Basic Example of Associative Array

Create a view with `associative-arrays.view.php`
```html
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
```
and importing `associative-arrays.view.php` in `associative-arrays.php`

```php
<?php

  $person = [
    'Age' => 21,
    'Hair' => 'Brown',
    'Career' => 'Web developer'
  ];

  $person['Name'] = 'Rasool';

  require 'views/associative-arrays.view.php';
?>
```

Output:
```
	• Age = 21
	• Hair = Brown
	• Career = Web developer
  • Name = Rasool
```

Example #2: Adding array
```
<?php

  $person = [
    'Age' => 21,
    'Hair' => 'Brown',
    'Career' => 'Web developer'
  ];

  $person['Name'] = 'Rasool';

  echo '<pre>';
  var_dump($person);
  echo '</pre>';
?>
```
Output:
```
array(4) {
  ["Age"]=>
  int(21)
  ["Hair"]=>
  string(5) "Brown"
  ["Career"]=>
  string(13) "Web developer"
  ["Name"]=>
  string(6) "Rasool"
}
```

Example #3: Removing array

Create a view with `associative-arrays.view.php`
```html
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
```
and importing `associative-arrays.view.php` in `associative-arrays.php`

```php
<?php

  $person = [
    'Age' => 21,
    'Hair' => 'Brown',
    'Career' => 'Web developer'
  ];

  // Adding array
  $person['Name'] = 'Rasool';
  // Removing array
  unset($person['Age']);

  require 'views/associative-arrays.view.php';
?>
```

Output:
```
	• Hair = Brown
	• Career = Web developer
	• Name = Rasool
```
