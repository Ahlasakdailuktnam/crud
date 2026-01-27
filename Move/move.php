<?php 
   if(isset($_POST['btnSubmit'])){
    $file= $_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $path= 'upload/'.$file;
    move_uploaded_file($tmp_name,$path);
   }
?>
