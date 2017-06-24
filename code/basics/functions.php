<?php

  $animals = ['cat', 'dog'];

/*
  //Example #1:

  echo '<pre>';
  die(var_dump($animals));
  echo '</pre>';

  // Example #2:

  function dumper($one, $two, $three) {
    var_dump($one, $two, $three);
  }

  dumper('Hello', 'Big', 'World');
*/
  // Example #3:
  
  function dd($animals) {
    echo '<pre>';
    die(var_dump($animals));
    echo '</pre>';
  }

  dd($animals);
