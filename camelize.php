<?php

  function camelize($underscore){
    $parts = explode('_', strtolower($underscore));
    $camel_case = '';
    foreach($parts as $part){
      $camel_case .= ucfirst($part);
    }
    return $camel_case;
  }
