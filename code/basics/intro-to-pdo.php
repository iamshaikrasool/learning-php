<?php

  require 'import/intro-to-pdo/Task.php';
  require 'import/intro-to-pdo/functions.php';

  $pdo = connectToDb();

  $tasks = fetchAllTasks($pdo);

  require 'views/intro-to-pdo.view.php';
