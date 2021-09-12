<?php

class Product extends Controller{
  public function index(){
    //Send the data from the url
    $data['title'] = 'Product';
    //Send the data by using model
    $this->view('Templates/Header',$data);
    $this->view('Product/Productpage',$data);
  }
}
