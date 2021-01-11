<?php  
    class car  
    {  
        public function Door()  
        {  
            echo "It has 2 Door </br>";  
        } 
        
        public function Wheels()  
        {  
            echo "4 wheels </br>";  
        }
        public function Ac()  
        {  
            echo "It has AC </br>";  
        }
        
    }  

    interface Prop { 
        public function TireInch(); 
     } 
     

    class ninja  extends car implements Prop
    {  
        public function Wheels()  //Overriding the property of skeleton Car Class and Adding new Features in Limited Edition of ninja car 
        {  
            echo "5 wheels </br>"; //Changing the wheels of car 
        } 
        
        public function TireInch()  //Defining the interface method .
        {
            echo "It is 10 inch Tyre </br>";  
        }
    }  
    $Car = new ninja(); 
    $Car->Door();  
    $Car->Wheels() ; 
    $Car->AC();  
   
    $Car->TireInch();

?>
