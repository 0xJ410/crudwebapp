<?php 

include "crudConnect.php";
$id = $_GET['id'];

$sql = "DELETE FROM `crudtable` WHERE id = $id";

$result = mysqli_query($myconnection, $sql);

if($result) {
    header("Location: index.php?msg=Data deleted successfully.");
}
else {
    echo "Failed." . mysqli_connect_error($myconnection);
}

?>