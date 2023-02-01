<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLACKPINK | SHOP</title>
    <link rel="icon" href="./img/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/home.css?<?php echo time() ?>">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<?php
if (isset($_GET['logout'])) {
    session_destroy();
    header("location: index.php");
}
?>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">BLACKPINK | SHOP FOR ADMIN</label>
        <ul>
            <li><a href="./admin.php" class="active"><i class="fab fa-product-hunt"></i> Product</a></li>
            <li><a href="./admin_user.php"><i class="fas fa-users"></i> User</a></li>
            <li><a href="./admin_order.php"><i class="fas fa-list"></i> Order</a></li>
            <li><a href="./logout.php"><i class="fas fa-lock"></i> Logout</a></li>
        </ul>
    </nav>
    <div class="container" style="background-color: white;">
        <h2>Music <a href='./admin_insert.php?id=m'><button type='submit' class='btn btn-success'>เพิ่มสินค้า</button></a></h2>
        <table class="table table-striped">
            <tr>
            <th>product_id</th>
                <th>name</th>
                <th>price</th>
                <th>image</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
            <?php
            include "./connectDB/connectDB.php";
            $sql = "SELECT * FROM product WHERE product_type='music'ORDER BY product_id ASC";
            $rs = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_row($rs)) {
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td><img src='$row[3]' class='img_admin'></td>";
            ?>
                <td><a href='./admin_edit.php?id=<?php echo $row[0] ?>'><button type='submit' class='btn btn-warning' name='m'>แก้ไข</button></a></td>
                <td><a href='./admin_delete.php?id=<?php echo $row[0] ?>'><button type='submit' class='btn btn-danger' name='m'>ลบ</button></a></td>
            <?php
                echo "</tr>";
            }
            ?>
        </table>
        <h2>Shirt <a href='./admin_insert.php?id=s'><button type='submit' class='btn btn-success'>เพิ่มสินค้า</button></a></h2>
        <table class="table table-striped">
            <tr>
            <th>product_id</th>
                <th>name</th>
                <th>price</th>
                <th>image</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
            <?php
            $sql = "SELECT * FROM product WHERE product_type='shirt'";
            $rs = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_row($rs)) {
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td><img src='$row[3]' class='img_admin'></td>";
            ?>
                <td><a href='./admin_edit.php?id=<?php echo $row[0] ?>'><button type='submit' class='btn btn-warning' name='s'>แก้ไข</button></a></td>
                <td><a href='./admin_delete.php?id=<?php echo $row[0] ?>'><button type='submit' class='btn btn-danger' name='s'>ลบ</button></a></td>
            <?php
                echo "</tr>";
            }
            ?>
        </table>
        </table>
        <h2>Pants <a href='./admin_insert.php?id=p'><button type='submit' class='btn btn-success'>เพิ่มสินค้า</button></a></h2>
        <table class="table table-striped">
            <tr>
                <th>product_id</th>
                <th>name</th>
                <th>price</th>
                <th>image</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
            <?php
            $sql = "SELECT * FROM product WHERE product_type='pants'";
            $rs = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_row($rs)) {
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td><img src='$row[3]' class='img_admin'></td>";
            ?>
                <td><a href='./admin_edit.php?id=<?php echo $row[0] ?>'><button type='submit' class='btn btn-warning'>แก้ไข</button></a></td>
                <td><a href='./admin_delete.php?id=<?php echo $row[0] ?>'><button type='submit' class='btn btn-danger'>ลบ</button></a></td>
            <?php
                echo "</tr>";
            }
            ?>
        </table>
        </table>
        <h2>other <a href='./admin_insert.php?id=o'><button type='submit' class='btn btn-success'>เพิ่มสินค้า</button></a></h2>
        <table class="table table-striped">
            <tr>
            <th>product_id</th>
                <th>name</th>
                <th>price</th>
                <th>image</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
            <?php
            $sql = "SELECT * FROM product WHERE product_type='other'";
            $rs = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_row($rs)) {
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td><img src='$row[3]' class='img_admin'></td>";
            ?>
                <td><a href='./admin_edit.php?id=<?php echo $row[0] ?>'><button type='submit' class='btn btn-warning'>แก้ไข</button></a></td>
                <td><a href='./admin_delete.php?id=<?php echo $row[0] ?>'><button type='submit' class='btn btn-danger'>ลบ</button></a></td>
            <?php
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>