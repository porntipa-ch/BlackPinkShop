<?php
include "./connectDB/connectDB.php";
session_start();
if(isset($_POST['s'])){
    $filetmp = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];
    $filetype = $_FILES['file']['type'];
    $filepath = 'payment/' . $filename;
    move_uploaded_file($filetmp,$filepath);

    $username = $_SESSION['username'];
    $name = $_SESSION['fullname'];
    $phone = $_SESSION['phone'];
    $address = $_SESSION['address'];
    $total = $_POST['total'];
    $status = 0;   
    $all_product = $_POST['all_product'];
    $bank = $_POST['bank'];

    $sql2 = "INSERT INTO `orders`(`username`, `name`, `all_product`, `Total`, `address`, `phone`, `img`, `status`, `track`, `bank_id`) 
    VALUES ('$username','$name','$all_product','$total','$address','$phone','$filename','$status','ยังไม่ส่ง','$bank')";
    $rs2 = mysqli_query($conn,$sql2);

    $drop = "DELETE FROM `cart`";
    $sql_drop = mysqli_query($conn,$drop);
    if($rs2){
        echo "<script>
        alert('สำเร็จ');
        window.location.href='./mycart.php';
        </script>";
    }else{
        echo "<script>
        alert('ไม่สำเร็จ');
        window.location.href='./home.php';
        </script>";
    }
}
