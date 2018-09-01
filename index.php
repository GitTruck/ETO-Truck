<?php

$requestPath = $_SERVER['REQUEST_URI'];

switch($requestPath) {
  case '/':
  case 'home':
    echo 'Vroom' . PHP_EOL; 
    break;
    
  case '/database':
    echo 'You have entered the database.' . PHP_EOL;
    break;
    
  default:
    echo 'Unkown Page' . PHP_EOL;
}
