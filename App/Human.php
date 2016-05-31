<?php
namespace App;

class Human {
    private $age=null;
    private $data=null;
    public function getFirstName(){
      $x = $this->data;
      $y=explode (' ',$x);
      return ucwords($y['0']);
    } 
    public function getLastName(){
      $x = $this->data;
      $y=explode (' ',$x);
      return ucwords($y['1']);
    }
    public function getAge(){
      return $this->age;
    }
    public function getBirthYear(){
      $x = date('Y')-($this->age);
      return $x;
    }
    
      public function __construct($data,$age){
      $this->data=$data;
      $this->age=$age;
    } 
}