<?php

interface ABC{  //creating interface
    public function show();
    public function display();  
}

abstract class DEF implements ABC{  // abstract class implementing the interface
    abstract function print();
    public function display(){
        echo "displaying this<br>";
        return $this;
    }
}
class GHI extends DEF {
    public function print(){
        echo "hello<br>";
        return $this;
    }
    public function show(){
        echo "show method<br>";
        return $this;
    }
}
$a = new GHI();
$a->show();
?>