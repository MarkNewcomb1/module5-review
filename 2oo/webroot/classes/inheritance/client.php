<?php

class Client extends Patient{
  private $billingID;
  private $balance;
  
  public function setBillingID($value){
    $this->billingID = $value;
  }
  
  public function getBillingID($value){
    return $this->billingID;
  }
  
  public function setBalance($value){
    $this->balance = $value;
  }
  
  public function getBalance($value){
    return '$' . $this->balance;
  }
  
}
