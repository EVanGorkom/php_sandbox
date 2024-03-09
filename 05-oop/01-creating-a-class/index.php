<?php

class User 
{  
  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }
 
  // properties
  public $name;
  public $email;

  public function login() 
  {
    echo $this->name . ' logged in';
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');
// var_dump($user1);
$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');
$user2->login();
