<?php
class Controller 
{
  public function view($folder, $file)
    {
      $FILENAME = "../app/views/" . $folder . "/" . $file . ".view.php";

      if(file_exists($FILENAME)){
        require $FILENAME;
      }else{
         $FILENAME = "../app/views/" . $folder . "/" . "404.view.php";
         require $FILENAME;
      }
    }
}