<?php

/**
 * User Object
 */
class User{
  
  private $_uid;
  private $_name;
  private $_pass;
  private $_mail;
  private $_created;

  public function getUID(){return $this->_uid;}
  public function setUID($arg){$this->_uid = $arg;}
  
  public function getName(){return $this->_name;}
  public function setName($arg){$this->_name = $arg;}
  
  public function getPassword(){return $this->_pass;}
  public function setPassword($arg){$this->_pass = $arg;}
  
  public function getMail(){return $this->_mail;}
  public function setMail($arg){$this->_mail = $arg;}
  
  public function getCreated(){return $this->_created;}
  public function setCreated($arg){$this->_created = $arg;}        
  
  public function hydrate($arr) {
    $this->setUID(isset($arr["uid"])?$arr["uid"]:'');
    $this->setName(isset($arr["name"])?$arr["name"]:'');
    $this->setPassword(isset($arr["pass"])?$arr["pass"]:'');
    $this->setMail(isset($arr["mail"])?$arr["mail"]:'');
    $this->setCreated(isset($arr["created"])?$arr["created"]:'');
  }
  
}

