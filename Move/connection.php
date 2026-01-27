<?php
try{
    $conn=mysqli_connect('localhost','root','','db_php_11_12');
}catch(Exception $e){
    echo $e-> getMessage();
}
?>