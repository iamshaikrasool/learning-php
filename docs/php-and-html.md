## PHP and HTML

PHP is a language built for the web. As such, it mixes with regular HTML beautifully. Let's learn how that all works in this episode. You'll review embedding PHP in HTML, calling your first function, and fetching URL parameters.

Example #1:
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
        <?php

          $greetings = "Hello World";
          echo $greetings;
        ?>
      </h1>
    </header>
  </body>
</html>
```
Output: `Hello World`

Example #2:
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
        <?php

        $name = $_GET['name'];
        echo "Hello, $name";
        ?>
      </h1>
    </header>
  </body>
</html>
```
Output: Goto this url `http://learning-php.app/code/php-and-html.php?name=Rasool`
```
Hello, Rasool
```

Example #3:
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
        <?php

        echo "Hello, " . $_GET['name'];
        ?>
      </h1>
    </header>
  </body>
</html>
```
Output: Goto this url `http://learning-php.app/code/php-and-html.php?name=Rasool`
```
Hello, Rasool
```

Example #4:
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
        <?php
        /*
          // Example #1:

          $greetings = "Hello, World";
          echo $greetings;

          // Example #2:

          $name = $_GET['name'];
          echo "Hello, $name";

          // Example #3:
          echo "Hello, " . $_GET['name'];
        */
        // Example #4:
        echo "Hello, " . htmlspecialchars($_GET['name']);

        ?>
      </h1>
    </header>
  </body>
</html>
```
Output: Goto this url `http://learning-php.app/code/php-and-html.php?name=<small>Rasool</small>`
```
Hello, <small>Rasool</small>
```
