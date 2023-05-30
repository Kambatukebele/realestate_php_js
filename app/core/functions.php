<?php
//Print readabe
function showPrint($var)
{
  echo "<pre>";
  print_r($var);
  echo "</pre>";
}
//Var dump
function showDump($var)
{
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}