<?php 
abstract class Person{
   protected $name;
   protected $gender;
    public function __construct($name,$gender)
    {
        $this->name=$name;
        $this->gender=$gender;
    }
    abstract public function show();
}
class Teacher extends Person{
    private $age;
    public function __construct($name, $gender,$age)
    {
        parent::__construct($name, $gender);
        $this->age=$age;
    }
    public function show(){
        echo $this->name. "</br>";
        echo $this-> gender. "</br>";
        echo $this-> age;
    }
}
$teacher= new Teacher("phalla","M",10);
$teacher-> show();
?>