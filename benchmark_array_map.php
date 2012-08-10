<?php

require_once 'Benchmark/Timer.php';

ini_set('memory_limit', '500M');

for($i=0;$i<1000000;$i++){
  $a[] = rand(0,100);
}

function add($elem){
  return $elem + 30;
}

$timer = new Benchmark_Timer();

echo "#foreach\n";
$timer->start();

foreach($a as $elem){
  $b[] = add($elem);
}
$timer->stop();
$timer->display();

unset($b);

echo "#Closure\n";
$anonymous_func = function($elem){ return $elem + 30; };
$timer->start();
$c = array_map($anonymous_func, $a);
$timer->stop();
$timer->display();

unset($c);

$func = create_function('$elem', 'return $elem + 20;');
$timer->start();
$d = array_map($func, $a);
$timer->stop();
$timer->display();

unset($d);

$timer->start();
$e = array_map('add', $a);
$timer->stop();
$timer->display();

unset($e);
