<?php
   include 'connnectiondata.php';
   if(isset($_POST['btnSubmit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $position=$_POST['position'];
    $salary=$_POST['salary'];
    $insert="INSERT INTO tbl_employee (name,gender,email,position,salary) VALUE('$name','$gender','$email','$position','$salary');
    ";
    $execute=mysqli_query($conn,$insert);
    if($execute){
        header('location: table.php');
    }
   }
?>