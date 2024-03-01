<?php

// older syntax for constant declaration.
define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

// newer syntax, similar to JavaScript
const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

function run()
{
  echo DB_NAME, DB_HOST;
  echo APP_NAME;
}
run();

// this doesn't work cause you cant redefine a constant.
// define('APP_NAME', 'My app 2');