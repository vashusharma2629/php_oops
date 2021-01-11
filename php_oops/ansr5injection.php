<?php

/* Dependency Injection is a design pattern that  avoids hard-coded dependencies for a code.
   The Dependency Injection makes totally independent classes and it composes testable code without any problem and since each class becomes independent, it becomes easier to manage it.*/

 
      class animal {
      private $breed;
      public function __construct($breed){

         $this->breed = $breed;

  
 }
      public function ShowBreed(){

      print_r($this->breed) ;

      }
   }

   $Breeds = array("DOG", "CAT", "TIGER");  //here we are giving the input instead of depending
    $p = new animal($Breeds);
   echo $p->ShowBreed();

?>