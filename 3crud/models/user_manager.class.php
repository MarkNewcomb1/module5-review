<?php 

class UserManager extends Manager{
	
  public function getUser($arg){
    
    if(!is_numeric($arg)) return FALSE;
    
      $db = new Db();
    
      $uid = $db -> quote($arg);
      $results = $db -> select("SELECT * from users where uid = $uid limit 1");
      
      foreach($results as $result){
        $user = new User();
        $user->hydrate($result);
      }
      
      return $user;
    
  }
  public function getAllUsers(){
    
      $db = new Db();
      $users = array();
          
      $results = $db -> select("SELECT * from users");
      
    foreach($results as $result){
        $user = new User();
        $user->hydrate($result);
        $users[] = $user;
      }
            
      return $users;    
      
  }
  public function save($user){
    
    if ($user->getUID()) {
      $this->_update($user);
    } else {
      $this->_add($user);
    }
  }
  
  private function _add($user){
    $db = new Db();
    
    $name = $db -> quote($user->getName());
    $mail = $db -> quote($user->getMail());
    $pass = $db -> quote($user->getPassword());
    $created = time();
    
    $results = $db -> query("insert into users (name, pass, mail, created) values ($name, $pass, $mail, $created);");

  }
  
  private function _update($user){
    $db = new Db();
    
    $uid = $db -> quote($user->getUID());
    $name = $db -> quote($user->getName());
    $mail = $db -> quote($user->getMail());
    
    if($user->getPassword()){
      $pass = $db -> quote($user->getPassword());
    } else {
      $pass = '';
    }

    if(!empty($pass)){
      $results = $db -> query("update users set name=$name, pass=$pass, mail=$mail where uid = $uid;");  
    } else {
      $results = $db -> query("update users set name=$name, mail=$mail where uid = $uid;");
    }

  }
  
  public function delete($arg){
    
    if(!is_numeric($arg)) return FALSE;
    
      $db = new Db();
    
      $uid = $db -> quote($arg);
      $results = $db -> query("DELETE from users where uid = $uid");
  }
  
}

