<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLACKPINK | SHOP</title>
    <link rel="icon" href="./img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/admin.css">
</head>

<body>
    <?php
    include "./connectDB/connectDB.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM `product` WHERE product_id =" . $id;
    $rs = mysqli_query($conn, $sql);
    echo "<form method='POST' action='#'>";
    while ($row = mysqli_fetch_row($rs)) {
        echo "
    <fieldset>
        <legend>Product edit</legend>
        <label class='edit'>Product_id : </label>
        <input type='text' name='id' value='$row[0]' readonly><br><br>
        <label class='edit'>Product_name : </label>
        <input type='text' name='name' value='$row[1]'><br><br>
        <label class='edit'>Product_price : </label>
        <input type='text' name='price' value='$row[2]'><br><br>
    </fieldset> 
    ";
    }
    echo "<br><button type='submit' name='edit'>ยืนยันการแก้ไข</button>    ";
    echo "<a href='./admin.php'><input type='button' value='ย้อนกลับ'></a>";
    echo "</form>";


    if (isset($_POST['edit'])) {
        include "./connectDB/connectDB.php";
        $pid = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $up = "UPDATE `product` SET product_name='$name',product_price=$price WHERE product_id=" . $pid;
        $update = mysqli_query($conn, $up);
        if ($update) {
            echo "<script>
        alert('แก้ไขข้อมูลสำเร็จ');
        window.location.href='./admin.php';
        </script>";
        } else {
            echo "can not";
        }
    }
    ?>
</body>

</html>