<?php

// When many methods are called in a single instruction, then it is called Method Chaining.

class person
{
private $name;
private $age;
private $fruit;


public function setName($name)  //function 1
{
$this->name=$name;
return $this;
}
public function setAge($age)   //function 2
{
$this->age=$age;
return $this;
}
public function setFruit($fruit)  //function 3

{ 
$this->fruit=$fruit;
return $this;
}

public function getInformation()  //function 4
{
echo " My name is ".$this->name." and I am ".$this->age." years old , i like eating ".$this->fruit." at my home " ; //....simple printing the out put

}
}
$person = new person();  //creating object

/* 
$person->setName("vashu");
$person->setAge("22");               ..........TRADITIONAL WAY OF DOING..............
$person->setFruit("apple");
$person->getInformation();     

*/


$person->setName("vashu")->setAge("21")->setFruit("apple")->getInformation();  // ........calling the object by just calling it in a single instruction

?>