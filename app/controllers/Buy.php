<?php 

  class Buy extends Controller
  {    
    public function index()
    {
      $data = []; 
      $data['page_title'] = "Buy | Hously - Home page"; //page title
      return $this->view("theme","buy", $data);       
    }    
  }