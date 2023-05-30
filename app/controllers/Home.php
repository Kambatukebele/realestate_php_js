<?php 

  class Home extends Controller
  {    
    public function index()
    {
      $data = []; 
      $data['page_title'] = "Home | Hously - Home page"; //page title
      return $this->view("theme","home", $data);       
    }    
  }