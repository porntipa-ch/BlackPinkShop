<?php
    include "./connectDB/connectDB.php";

    if($_POST){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $sql = "INSERT INTO user(username, password, fname, lname,address, mail,phone) VALUES ('$username', '$password', '$fname', '$lname','$address', '$email','$phone')";
        if(mysqli_query($conn, $sql)){
            echo "<script>";
            echo "alert('บันทึกข้อมูลสำเร็จกรุณาเข้าสู่ระบบ $fname');";
            echo "window.location='./index.php'";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert('บันทึกข้อมูลไม่สำเร็จกรุณาลองใหม่อีกครั้ง');";
            echo "window.location='./register.php'";
            echo "</script>";
        }
    }   
?>