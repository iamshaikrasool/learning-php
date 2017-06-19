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
