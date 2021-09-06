<?php

class Home extends Controller{
  public function index(){
    //Send the data from the url
    $data['title'] = 'Home';
    //Send the data by using model
    $this->view('Templates/Header',$data);
    $this->view('Home/Homepage',$data);
  }
}
