<?php 
 include "crudConnect.php";
 $id = $_GET['id'];

 if(isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['addressplace'];
    $email = $_POST['email'];

    $sqlinsert = "UPDATE `crudtable` SET `firstName`='$firstName',`lastName`='$lastName',`address`='$address',`email`='$email' WHERE id = $id";
    
    $result = mysqli_query($myconnection, $sqlinsert);

    if($result) {
        header("Location: index.php?msg=New changes applied successfully.");
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
            <h3>Edit User Information</h3>
            <p name="addNewDesc" class = "text-muted"
            style = "font-size: 20px; margin-left: 5%;">Edit the form to add changes to an existing user.</p>
        </div>

        <?php 
        $sql = "SELECT * FROM `crudtable` WHERE id = $id LIMIT 1";
        $result = mysqli_query($myconnection, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container justify-content-center">
            <form action="" method="post" style= "width = 50vw;min-width = 300px;">
                <div class = "row">
                    <div class="col">
                        <label class = "form-label">First Name:</label>
                        <input type = "text" class = "form-control" name = "firstName" value = "<?php echo $row['firstName'] ?>">
                        </input>
                    </div>

                    <div class="col">
                        <label class = "form-label">Last Name:</label>
                        <input type = "text" class = "form-control" name = "lastName" value = "<?php echo $row['lastName'] ?>">
                        </input>
                    </div>

                    <div class="mt-3 mb-3">
                        <label class = "form-label">Address:</label>
                        <input type = "text" class = "form-control" name = "addressplace" value = "<?php echo $row['address'] ?>">
                        </input>
                    </div>

                    <div class="col">
                        <label class = "form-label">Email:</label>
                        <input type = "text" class = "form-control" name = "email" value = "<?php echo $row['email'] ?>">
                        </input>
                    </div>

                    <div>
                        <button type="submit" class = "btn btn-success" name= "submit" style="
                        color: white;
                        width: 100%;
                        margin: 2% 0% 1% 0%;
                        "> Save Changes </button>
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