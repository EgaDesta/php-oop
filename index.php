<?php
//class
class robot{
    //properties
    public $name ;
    public $size ;

//method
public function bentuknya(){
    echo " namanya adalah ". $this->name ." yang keren. ";
}
public function size(){
    return $this->size;
}

//method set & get
public function set_name($name) {
    $this->name = $name;
}
public function get_name() {
    return $this->name;
}

//constarctor
public function __construct($name){
    $this->name = $name;
    
}
}
?>