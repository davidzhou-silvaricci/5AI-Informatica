<?php

if (!isset($_SESSION)) {
  session_start();
}

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* 
function MyAutoload($className)
{
  $extension =  spl_autoload_extensions();
  $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
  $filename = __DIR__ . DIRECTORY_SEPARATOR . $className . $extension;
  if (is_readable($filename)) {
    require_once($filename);
  } else {
    die("Not Found Class ($filename)");
  }
}

spl_autoload_extensions('.php');
spl_autoload_register('MyAutoload'); */