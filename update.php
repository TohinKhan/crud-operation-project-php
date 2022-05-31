<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <?php
    include 'config.php';
    $ID = $_GET['Id'];
    $query = "SELECT * FROM `info` WHERE ID = $ID";
    $Record = mysqli_query($con,$query);
    $data = mysqli_fetch_array($Record);
    ?>

        <div class="main">
            <br>
            <h1 class="text-white bg-dark text-center">
            Update Information</h1>

            <div class="col-lg-8 m-auto d-block" >
            <form action="update1.php" method="POST" enctype="multipart/form-data">

                <label for="">Name</label>
                <input type="text" value="<?php echo $data['Name'] ?>" name="name" class="form-control"><br>
                <label for="">E-Mail</label>
                <input type="email" value="<?php echo $data['EMail'] ?>" name="email" class="form-control"><br>
                <label for="">Photo</label>
                <td><input type="file" value="<?php echo $data['Image'] ?>" name="photo" class="form-control"><img src="<?php echo $data['Image'] ?>" width = '100px' height = '100px'></td><br>
                <input type= "hidden" name="ID" value ="<?php echo $data['ID'] ?>">
                <button type ="submit" name="update" class="btn btn-success m-2">Update</button>


            </form>
            </div>
        </div>
    



</body>
</html>