<?php 
include 'connnectiondata.php';
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $position=$_POST['position'];
    $gender=$_POST['gender'];
    $salary=$_POST['salary'];
    $update= "UPDATE tbl_employee SET name='$name',gender='$gender',email='$email',position='$position',salary='$salary' WHERE id='$id' ";
    $rs=$conn-> query($update);
    if($rs){
        header('location: table.php');
    }
} 
?>