## Separate PHP Logic From Presentation

Example #1:
Create a view with `index.view.php`
```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learning PHP</title>
    <style>
      header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>
        <?= $greetings; ?>
      </h1>
    </header>
  </body>
</html>
```

and importing `index.view.php` in `index.php`

```php
<?php

  $greetings = "Hello World";

  require 'views\separate-php-logic-from-presentation.view.php'
?>
```
