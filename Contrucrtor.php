<?php 
 class Book{
    private $id;
    private $name;
    public function __construct($id,$name){
        $this-> id=$id;
        $this-> name=$name;
    }
    public function getData(){
        echo "id:" . $this->id. "</br>";
        echo "Name:" . $this->name. "</br>";
    }
 }
 $book = new Book(3,'lork of the ring');
 $book->getData();
?>