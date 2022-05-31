<?php 

include 'config.php';

if(isset($_POST['update'])){
    $IDD =$_POST['ID']; 
    //$ID = $_POST['id'];
    $NAME = $_POST['name'];
    $EMAIL = $_POST['email'];
    $PHOTO = $_FILES['photo'];
    print_r($_FILES['photo']); 
    $img_loc = $_FILES['photo']['tmp_name'];
    $img_name = $_FILES['photo']['name'];
    $img_des = 'uploadimage/'.$img_name;
    move_uploaded_file($img_loc,'uploadimage/'.$img_name);

    $query= "UPDATE `info` SET `Name`='$NAME',`EMail`='$EMAIL',`Image`='$img_des' WHERE ID = '$IDD'";
    mysqli_query($con,$query);
    header('location:index.php');
}


?>