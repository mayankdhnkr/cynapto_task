<?php
    // Create database connection using config file
    include_once("config.php");

    // Fetch all users data from database
    $result = mysqli_query($mysqli, "SELECT * FROM user_data ORDER BY id");
?>

<html>
    <head>    
        <title>Cynapto User</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    
    <body>
    
        <h1 class="text-center my-5 fw-bold">Cynapto Internship Task</h1>
    
        <div class="d-flex mb-5">
            <a href="add.php" class="mx-auto"><button class="btn btn-lg btn-primary">Add New User</button></a><br/><br/>
        </div>
    
        <table class="table table-striped table-hover">
    
        <tr>
            <th scope="col">Name</th> <th scope="col">Address</th> <th scope="col">Email</th> <th scope="col">Mobile Number</th> <th scope="col">Gender</th>
        </tr>
    
        <?php  
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['name']."</td>";
            echo "<td>".$user_data['address']."</td>";
            echo "<td>".$user_data['email']."</td>";    
            echo "<td>".$user_data['mobile']."</td>";
            echo "<td>".$user_data['gender']."</td>";
        }
        ?>
        </table>
    </body>
</html>
