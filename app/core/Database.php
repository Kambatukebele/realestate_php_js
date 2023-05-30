<?php
  trait Database 
  {    
    public function db_connect()
    {
      try{
      $query = db_DRIVER . ":host=" . db_HOST .";dbname=" . db_NAME;
      $connection = new PDO($query, db_USER, db_PASSWORD); 
      // set the PDO error mode to exception
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";

      }catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
      }

      if($connection){
        return $connection; 
      }

      $connection = null;
    }
    
  }