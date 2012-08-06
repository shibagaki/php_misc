<?php

  // 5.3
  $func1 = function($a, $b){return $a + $b;};

  // 5.2
  $func2 = create_function('$a, $b', 'return $a + $b;');

  echo $func1(1, 2) . "\n";
  echo $func2(1, 2) . "\n";
