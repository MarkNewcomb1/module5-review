<?php

class Patient{
  private $name;  
  private $height;
  private $weight;
  
  // Constructor
  function __construct($value) {
    $this->name = $value;
  }
  
  // Destructor
  function __destruct() {
    // Clean up resources
    // Close connections to resources
    // Debugging
    // Something else
    echo "Instance of Patient '" . $this->name . "' is being destroyed<br>";
  }
  
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
  public function getHeight(){return $this->height;}
  
  // Weight
  public function setWeight($value){
    $this->weight = $value;
  }
  public function getWeight(){return $this->weight;}
  
  // BMI
  public function getBMI(){
    
    if (empty($this->weight) || empty($this->height)){
      return FALSE;
    }

    $bmi = ( $this->weight / ( $this->height * $this->height ) ) * 703;

    return $bmi;
  }
}
