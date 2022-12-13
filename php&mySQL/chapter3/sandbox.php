<?php

//classes
class User {
    //public $email;
    //public $name;

    private $email;
    private $name;

    //public function__construct($name, $email){
        //$this->email = 'pekka@warrior.com';
        //$this->name = 'pekka';
        //$this->email = $email;
        //$this->name = $name;
    //}

    public function login(){
        //echo 'the user logged in';
        echo $this->name. 'logged in';
   }

   public function getName(){
    return $this->name;
   }

   public function setName($name){
    if(is_string($name) && strlen($name) >1){
      $this->name = $name;
      return "name has been updated";
    } else {
      return "not a valid name";
    }
   }
}

//$userOne = new User();

//$userOne->login();
//echo $userOne->name;
//echo $userOne->email;

//$userTwo = new User('pekka', 'pekka@gmail.com');{
  //$userTwo->name = 'pekka';
  //echo $userTwo->email;
  //$userTwo->login();
  //echo $userTwo->name;
//}

$userTwo = new User('pekka', 'pekka@gmail.com');

//echo $userTwo->getName();
//echo $usertwo->setName(50);
//echo $usertwo->setName('shaun');
//echo $userTwo->getName();


?>