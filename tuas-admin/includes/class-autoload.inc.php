<?php

spl_autoload_register('myAutoLoader');
spl_autoload_register('myAutoLoader1');

function myAutoLoader ($className) {
    $path = 'classes/';
    $extension = '.class.php';
    $fileName = $path . $className . $extension;

    if (!file_exists($fileName)) {
      return false;
    }

    include_once $path . $className . $extension;
}

function myAutoLoader1 ($className) {
  $path = 'services/';
  $extension = '.class.php';
  $fileName = $path . $className . $extension;

  if (!file_exists($fileName)) {
    return false;
  }

  include_once $path . $className . $extension;
}

