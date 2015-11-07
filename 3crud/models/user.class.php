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
  private $_role;

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
  
  public function getRole(){return $this->_role;}
  public function setRole($arg){$this->_role = $arg;}  
  
  public function isAdmin(){
    if ($this->_role == 1) {
      return TRUE;
    }
    return FALSE;
  }
    
  public function hydrate($arr) {
    $this->setUID(isset($arr["uid"])?$arr["uid"]:'');
    $this->setName(isset($arr["name"])?$arr["name"]:'');
    $this->setPassword(isset($arr["pass"])?$arr["pass"]:'');
    $this->setMail(isset($arr["mail"])?$arr["mail"]:'');
    $this->setCreated(isset($arr["created"])?$arr["created"]:'');
    $this->setRole(isset($arr["role"])?$arr["role"]:'');
  }
  
      
        /* Set a valid email address, and check to make sure the property is set */
    testEmailSetAndGet(){
	    	$email_a = 'joe@example.com';
			$email_b = 'bogus';

	if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    	echo "This ($email_a) email address is considered valid.";
    	$_POST['email'] = '';
		}
    }
    
    /* Set an invalid email address, and check to make sure the property is blank */
testEmailIsInvalid(){

if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
   	 echo "This ($email_b) email address is considered valid.";
   	 $_POST['email'] = '';
	}
	
	} 
  
}

