<?php 
include "crudConnect.php";

$results = mysqli_query($myconnection, "SELECT * FROM crudtable"); 
?>


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
        <div class="text fs-3"
        style ="
        margin-left: 3%;">
            <h3>Edit User Information</h3>
            <p name="addNewDesc" class = "text-muted"
            style = "font-size: 20px; margin-left: 5%;">Edit the form to add changes to an existing user.</p>
        </div>


        <div class="container justify-content-center">
            <form action="" method="post" style= "width = 50vw;min-width = 300px;">
            <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
            <?php } ?>
        </table>

                    <div>
                        <a href = "index.php" class = "btn btn-danger" style = "width: 100%"> Back </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>