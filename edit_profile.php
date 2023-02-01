<?php
    include "./connectDB/connectDB.php";
    session_start();
    unset($_SESSION["fullname"]);
    if($_POST){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sql = "UPDATE user SET
        password='$password',
        fname='$fname',
        lname='$lname',
        address='$address',
        mail='$email',
        phone='$phone' 
        WHERE username='$username'";      
        $query =mysqli_query($conn,$sql);
        if($query){
            $_SESSION['fullname'] = $fname . " " . $lname;
            echo "<script>
        alert('แก้ไขข้อมูลสำเร็จ');
        window.location.href='./home.php';
        </script>";
        }else{
            echo "<script>
            alert('แก้ไขข้อมูลไม่สำเร็จ');
            window.location.href='./home.php';
            </script>";
        }
        echo $username.$password.$fname.$lname.$address.$email.$phone;
    }   
?>