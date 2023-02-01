<?php
session_start();
include './connectDB/connectDB.php';
$user = $_SESSION['username'];
echo $user;
$sql = "DELETE FROM cart WHERE username ='$user'";
$query = mysqli_query($conn,$sql);
echo $sql;
if($query){
    unset($_SESSION["username"]);
    unset($_SESSION["fullname"]);
    unset($_SESSION["cart"]);
    header("Location:index.php");
}else{
    echo "<br>can not";
}
?>