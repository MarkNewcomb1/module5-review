<?php

class Patient{
  private $name;  
  private $height;
  private $weight;
  
  // Name
  public function setName($value){
    $this->name = $value;
  }
  
  public function getName(){
    return $this->name;
  }
  
  // Height
  public function setHeight($value){
    $this->height = $value;
  }
  
  public function getHeight(){
    return $this->height;
  }
  
  // Weight
  public function setWeight($value){
    $this->weight = $value;
  }
  
  public function getWeight(){
    return $this->weight;
  }
  
}
