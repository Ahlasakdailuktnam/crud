<?php 
class Person{
    protected $id;
    protected $name;
    public function __construct($id,$name)
    {
        $this-> id=$id;
        $this-> name=$name;
    }
    public function show(){
        echo $this->id. "</br>";
        echo $this->name. "</br>";
    }
}
class Teacher extends Person{
    private $gender;
    public function __construct($id, $name,$gender)
    {
         parent::__construct($id, $name);
         $this->gender=$gender;
    }
    public function show(){
        parent:: show();
        echo $this->gender;
    }
}
$teacher = new Teacher(1,"palla","m");
$teacher->show();
?>