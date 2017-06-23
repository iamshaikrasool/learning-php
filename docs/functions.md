## Functions

Think of a function as a container for reusable pieces of logic. In this lesson, you'll create your very first function.

Example #1:
```php
<?php

  $animals = ['cat', 'dog'];

  echo '<pre>';
  die(var_dump($animals));
  echo '</pre>';
```

Output:
```
array(2) {
  [0]=>
  string(3) "cat"
  [1]=>
  string(3) "dog"
}
```

Example #2:
```php
<?php

  function dumper($one, $two, $three) {
    var_dump($one, $two, $three);
  }

  dumper('Hello', 'Big', 'World');
```

Output: `string(5) "Hello" string(3) "Big" string(5) "World"`

Example #3:
```php
<?php

  $animals = ['cat', 'dog'];

  function dd($animals) {
    echo '<pre>';
    die(var_dump($animals));
    echo '</pre>';
  }

  dd($animals);
```

Output:
```
array(2) {
  [0]=>
  string(3) "cat"
  [1]=>
  string(3) "dog"
}
```
