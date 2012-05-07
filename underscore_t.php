<?php

  $camel_case = 'OneClassName';

  $underscore = 
    strtolower(preg_replace('/([a-zA-Z])([A-Z])/', '$1_$2', $camel_case));
  
  echo $underscore . "\n";
?>
