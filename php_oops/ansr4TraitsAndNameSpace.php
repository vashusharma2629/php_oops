<?php
namespace basic; //Namespaces are the way of encapsulating items so that same names can be reused without name conflicts.
function Hello()  
    { 
        echo 'This is a namespace </br>'; 
    } 
    
hello();  //calling the function
 
 
//........................TRAITS.........................................

//Traits are used to declare methods that can be used in multiple classes. 
trait msg {
  public function msg() {       
    
    echo " This is a Trait ";  //....declaring traits 
  
  }

}

class Traits {
  use msg;              //......trait is called by using the ( use ) statement .
}


$obj = new Traits();    

$obj->msg();




?>
 