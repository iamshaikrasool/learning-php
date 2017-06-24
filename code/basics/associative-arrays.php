<?php
  // Example #1:
  $person = [
    'Age' => 21,
    'Hair' => 'Brown',
    'Career' => 'Web developer'
  ];
  // Adding array
  $person['Name'] = 'Rasool';

/*
  // Example #2:
  echo '<pre>';
  var_dump($person);
  echo '</pre>';
*/
  // Example #3: Removing array
  unset($person['Age']);

  require 'views/associative-arrays.view.php';
?>
