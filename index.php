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
    
        <div class="main">
            <br>
            <h1 class="text-white bg-dark text-center">
            Student Information</h1>

            <div class="col-lg-8 m-auto d-block" >
            <form action="insert.php" method="POST" enctype="multipart/form-data">

                <label for="">ID</label>
                <input type="text" name="id" class="form-control"><br>
                <label for="">Name</label>
                <input type="text" name="name" class="form-control"><br>
                <label for="">E-Mail</label>
                <input type="email" name="email" class="form-control"><br>
                <label for="">Photo</label>
                <input type="file" name="photo" class="form-control"><br>
                <button name="upload" class="btn btn-success">Submit</button>
                


            </form>
            </div>
        </div>
    

    
    
        <!--Table-->

    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Photo</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>

            <?php
            include 'config.php';
            $q = "SELECT * FROM `info`";
            $pic = mysqli_query($con,$q);

            while($row = mysqli_fetch_array($pic)){
               echo" 
                    <tr>
                     <td>$row[ID]</td>
                     <td>$row[Name]</td>
                     <td>$row[EMail]</td>
                     <td><img src='$row[Image]' width = '100px' height = '100px'></td>
                     <td><a href='delete.php? Id=$row[ID]' class = 'btn btn-danger'>Delete</a></td>
                     <td><a href='update.php? Id=$row[ID]' class = 'btn btn-danger'>Update</a></td>
                
                    </tr>
                ";
            }
            ?>
   
        </tbody>
    </table>
    </div>



    
</body>
</html>