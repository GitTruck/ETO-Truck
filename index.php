<?php

$requestPath = $_SERVER['REQUEST_URI'];

switch($requestPath) {
  case '/':
    echo 'Vroom' . PHP_EOL; 
    break;
    
  default:
    if(contentPageExists($requestPath)){
      include 'content' . $requestPath . '.php';
    }
    else {
      echo 'Unknown Page' . PHP_EOL; 
    }
}


function contentPageExists($requestPath) {
  if(strpos('..', $requestPath) !== FALSE) {
    return FALSE;
  }
  
  if(file_exists('content' . $requestPath . '.php')){
    return TRUE;  
  }
  return FALSE;
}
