<?php

abstract class Child {

abstract protected function showHomeWork($work);

}
class kids extends Child {

public function showHomeWork( $work = 'meat' ) {

 $work = 'I am eating on '.$work;

 echo $work;

}

public function startWork($work) {

 return $this->showHomeWork($work);
         
}
     
}
?>

