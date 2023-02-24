<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>CRUD</title>

    <link rel="stylesheet" type = "text/css" href="/css/display.css?version=1">
</head>
<body>
    <nav class="navbar navrbar-light justify-content-center fs-1 mb-5" 
    style ="
    color: #ccc;
    background-color: #0F1417;
    ">
        My CRUD Website
    </nav>

    <div class="container">
        <?php 
        if(isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>';
        }
        
        ?>
        <a href = "addNew.php" class= "btn btn-dark mb-3" style = "justify-content: end;">Add New</a>

    <table class="table table-hover text-center mb-3">
        <thead class="table-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email Address</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "crudConnect.php";
            $sql = "SELECT * FROM `crudtable`";
            $result = mysqli_query($myconnection, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
               ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['firstName'] ?></td>
                    <td><?php echo $row['lastName'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td>
                        <a href="editUser.php?id=<?php echo $row['id'] ?>" class = "link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a> 
                        <a href="delUser.php?id=<?php echo $row['id'] ?>" class = "link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
               <?php
            }
            ?>
        </tbody>
    </table>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>