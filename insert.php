<?php
include 'config.php';

if(isset($_POST['upload'])){
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $EMAIL = $_POST['email'];
    $PHOTO = $_FILES['photo']; 
    $img_loc = $_FILES['photo']['tmp_name'];
    $img_name = $_FILES['photo']['name'];
    $img_des = 'uploadimage/'.$img_name;
    move_uploaded_file($img_loc,'uploadimage/'.$img_name);


    $query = "INSERT INTO `info`(`ID`, `Name`, `EMail`, `Image`) VALUES ('$ID','$NAME','$EMAIL','$img_des')";
    mysqli_query($con,$query);

    header('location:index.php');

}
?>