<?php 

  class _404 extends Controller
  {
    public function index()
    {
      return $this->view("theme","404");  
    }
  }