<?php
include './connectDB/connectDB.php';
$id = $_GET['id'];
$sql = "DELETE FROM `product` WHERE product_id=".$id;
$query = mysqli_query($conn,$sql);
if($query){
    echo "<script>
    alert('ลบข้อมูลสำเร็จ');
    window.location.href='./admin.php';
    </script>";
}else {
    echo "<script>
    alert('ลบข้อมูลไม่สำเร็จ');
    window.location.href='./admin.php';
    </script>";
    }    
?>