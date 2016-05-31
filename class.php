<?php
namespace App;
class Human {
    private $name=null;
    private $age=null;
    private $data=null;
  /*  public function getFirstName(){} 
    public function getLastName(){}
    public function getAge(){}
    public function getBirthYear(){}
    */
      public function __construct($data,$age){
      $this->data=$data;
      $this->age=$age;
    //  var_dump($this->data);
      var_dump($this->age);
      
    } 
}