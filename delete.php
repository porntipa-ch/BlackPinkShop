<?php
    include './connectDB/connectDB.php';
    $sql = "DELETE FROM cart WHERE CartID =".$_GET['CartID'];
    $query = mysqli_query($conn,$sql);
    $sql1 = "DELETE FROM `order` WHERE id =".$_GET['CartID'];
    $query1 = mysqli_query($conn,$sql1);
    if($query){
        echo "<script>
        alert('ลบข้อมูลสำเร็จ');
        window.location.href='./mycart.php';
        </script>";
    }else {
        echo "<script>
        alert('ลบข้อมูลไม่สำเร็จ');
        window.location.href='./mycart.php';
        </script>";
    }
?>