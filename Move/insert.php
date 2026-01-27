<?php 
require 'connection.php';
 if(isset($_POST['submit'])){
    if( !is_dir('image')){
        mkdir('image',0777,true);
    }
    $name=$_POST['name'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    $total= $qty* $price;
    if($total <= 10){
        $disc=5;
    }elseif($total <= 20){
        $disc=10;
    }elseif($total <= 30){
        $disc=15;
    }elseif($total <= 40){
        $disc=20;
    }elseif($total <= 50){
        $disc=25;
    }else {
        $disc=30;
    }
    $payment= $total - ($total * $disc/100);
    $file=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $path= 'image/'.$file;
    move_uploaded_file($tmp_name,$path);
    $insert = "INSERT INTO tbl_products (pro_name,qty,price,total,discount,payment,image) 
    VALUES ('$name','$qty','$price','$total','$disc','$payment','$file')";
    $result=mysqli_query($conn,$insert);
    if($result){
        header('location: table2.php');
    }
 }
?>