<?php 
 include "crudConnect.php";

 if(isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['addressplace'];
    $email = $_POST['email'];

    $sqlinsert = "INSERT INTO `crudtable`(`id`, `firstName`, `lastName`, `address`, `email`) VALUES (NULL,'$firstName','$lastName','$address','$email')";
    
    $result = mysqli_query($myconnection, $sqlinsert);

    if($result) {
        header("Location: index.php?msg=New record created successfully.");
    }
    else
        echo "Failed" . mysqli_connect_error($myconnection);

}
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
            <h3>Add New User</h3>
            <p name="addNewDesc" class = "text-muted"
            style = "font-size: 20px; margin-left: 5%;">Complete the form to add a new user.</p>
        </div>
        <div class="container justify-content-center">
            <form action="" method="post"
            style= "
            width = 50vw;
            min-width = 300px;
            ">
                <div class = "row">
                    <div class="col">
                        <label class = "form-label">First Name:</label>
                        <input type = "text" class = "form-control" name = "firstName" placeholder = "Enter Here...">
                        </input>
                    </div>

                    <div class="col">
                        <label class = "form-label">Last Name:</label>
                        <input type = "text" class = "form-control" name = "lastName" placeholder = "Enter Here...">
                        </input>
                    </div>

                    <div class="mt-3 mb-3">
                        <label class = "form-label">Address:</label>
                        <input type = "text" class = "form-control" name = "addressplace" placeholder = "Enter Here...">
                        </input>
                    </div>

                    <div class="col">
                        <label class = "form-label">Email:</label>
                        <input type = "text" class = "form-control" name = "email" placeholder = "Enter Here...">
                        </input>
                    </div>

                    <div>
                        <button type="submit" class = "btn btn-success" name= "submit" style="
                        color: white;
                        width: 100%;
                        margin: 2% 0% 1% 0%;
                        "> Submit </button>
                        <a href = "index.php" class = "btn btn-danger" style = "width: 100%"> Cancel </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>