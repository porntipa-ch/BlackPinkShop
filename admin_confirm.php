<?php
include "./connectDB/connectDB.php";
$id = $_GET['id'];
$edit = "UPDATE `orders` SET `status`='1' WHERE id ='$id' ";
$query =mysqli_query($conn,$edit);
if($query){
    echo "<script>
alert('แก้ไขสถานะสินค้าสำเร็จ');
window.location.href='./admin_order.php';
</script>";
}else{
    echo "<script>
    alert('แก้ไขสถานะสินค้าไม่สำเร็จ');
    window.location.href='./admin_order.php';
    </script>";
}
?>