<?php
  //[HTTP_HOST] ->localhost
  //[SERVER_NAME] => localhost
  //[REQUEST_SCHEME] => http
  // echo "<pre>";
  // print_r($_SERVER);

  //ROOT PATH
  define("ROOT", $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/");
  define("ROOT_ASSETS", $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/" . "assets/");

  //DATABASE CONNECTION
  define("db_HOST", $_SERVER['HTTP_HOST']);
  define("db_NAME", "db_realestate");
  define("db_PORT", 3306);
  define("db_USER", "root");
  define("db_PASSWORD", ""); 
  define("db_DRIVER", "mysql");
  