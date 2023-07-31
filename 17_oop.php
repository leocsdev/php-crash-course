<?php

// Object Oriented Programming

// From PHP5 onwards you can write PHP in either a procedural or object oriented way.
// OOP consists of classes that can hold "properties" and "methods".
// Objects can be created from classes.

class User
{
  // Properties are attributes that belong to a class.
  // Access Modifiers: public, private, protected
  //  public    - can be accessed from anywhere
  //  private   - can only be accessed from inside the class
  //  protected - can only be accessed from inside the class and by inheriting classes

  // Properties
  public $name;
  public $email;
  public $password;

  // A constructor is a method that runs when an object is created.
  public function __construct($name, $email, $password)
  {
    // echo 'constructor ran';
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Methods are functions that belong to a class.
  function set_name($name)
  {
    $this->name = $name;
  }

  function get_name()
  {
    return $this->name;
  }
}

// // Instantiate a user object
// $user_1 = new User();
// $user_2 = new User();

// // Set the name property
// $user_1->name = 'Leo';

// // Set the properties using the set_name() method inside the User class
// $user_1->set_name('Brad');
// $user_2->set_name('Leo');
// // var_dump($user_1);
// // var_dump($user_2);

// echo $user_1->get_name();
// echo '<br>';
// echo $user_2->get_name();

// Instantiate a user object with constructor
$user_1 = new User('Brad', 'b@b.com', 'password');
$user_2 = new User('Leo', 'l@l.com', 'password');

echo $user_1->name;
echo '<br>';
echo $user_2->name;
echo '<br>';

/* === === === === === === === Inheritence === === === === === === === */

class Employee extends User
{
  public $title;

  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title()
  {
    return $this->title;
  }
}

// Instantiate an employee object
$employee_1 = new Employee('Brad', 'b@b.com', 'password', 'CEO');
echo $employee_1->get_title();
