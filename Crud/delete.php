<?php
include 'connnectiondata.php';
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $delete= "DELETE FROM tbl_employee WHERE id=$id";
    $ex=mysqli_query($conn,$delete);
    if($ex){
        header('location: table.php');
    }
}

 ?> 