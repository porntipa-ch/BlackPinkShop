<?php
if(isset($_POST['Add_To_Cart'])){
    session_start();
    $name = $_SESSION['fullname'];
    $uname = $_SESSION['username'];
    $Item_Name = $_POST['Item_Name'];
    $Price = $_POST['Price'];
    $amount = $_POST['amount'];
    include './connectDB/connectDB.php';
    $sql = "INSERT INTO cart (username,Pname,price,amount)VALUES ('$uname','$Item_Name','$Price','$amount')";
    $rs = mysqli_query($conn,$sql);

    $sql1 = "INSERT INTO `order`(`name`, `Pname`, `price`, `amount`, `receipt`, `status`) VALUES ('$uname','$Item_Name','$Price','$amount','0','0')";
    $rs1 = mysqli_query($conn,$sql1);
    if($rs){
        echo "<script>
        alert('เพิ่มสินค้าลงในตะกร้าสำเร็จ!!!');
        window.location.href='./home.php';
        </script>";
    } else {
        echo "<script>
        alert('สินค้าในตะกร้าอยู่แล้ว');
        window.location.href='./home.php';
        </script>";
    }
}
?>
