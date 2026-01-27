<?php
require 'connection.php';

$id = $_POST['id'] ?? '';
$name = $_POST['name'];
$qty = $_POST['qty'];
$price = $_POST['price'];
if (!empty($_FILES['file']['name'])) {

    $image = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmp, "image/" . $image);

    $conn->query("UPDATE tbl_products SET
        pro_name='$name',
        qty='$qty',
        price='$price',
        image='$image'
        WHERE id='$id'");

} else {

    $conn->query("UPDATE tbl_products SET
        pro_name='$name',
        qty='$qty',
        price='$price'
        WHERE id='$id'");
}

header("Location: table2.php");
