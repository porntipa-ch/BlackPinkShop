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
            <li><a href="./admin.php"><i class="fab fa-product-hunt"></i> Product</a></li>
            <li><a href="./admin_user.php" class="active"><i class="fas fa-users"></i> User</a></li>
            <li><a href="./admin_order.php"><i class="fas fa-list"></i> Order</a></li>
            <li><a href="./logout.php"><i class="fas fa-lock"></i> Logout</a></li>
        </ul>
    </nav>
    <div class="container-sm admin"style="background-color: white;">
        <h2>ผู้ใช้ทั้งหมด</h2>
        <table class="table table-striped">
            <thead class="text-center">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">username</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">นามสกุล</th>
                    <th scope="col">Mail</th>
                    <th scope="col">ที่อยู่</th>
                    <th scope="col">เบอร์ติดต่อ</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                include "./connectDB/connectDB.php";
                $i = 1;
                $total = 0;
                $id = "";
                $sql = "SELECT * FROM `user`";
                $rs = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_row($rs)) {
                    echo "<tr>
                                    <td>$i</td>
                                    <td>$row[0]</td>
                                    <td>$row[2]</td>
                                    <td>$row[3]</td>
                                    <td>$row[4]</td>
                                    <td>$row[5]</td>
                                    <td>$row[6]</td>";
                    echo "</tr>";
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>