<?php 

  class Home extends Controller
  {    
    use Database; 
    public function index()
    {
      $this->db_connect(); 
      return $this->view("theme","home");       
    }    
  }