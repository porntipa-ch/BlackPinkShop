<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/home.css?<?php echo time() ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>BLACKPINK | SHOP</title>
    <link rel="icon" href="./img/icon.png" type="image/x-icon">
</head>

<body>
    <?php
    include "./connectDB/connectDB.php";
    session_start();
    if (!isset($_SESSION['fullname'])) {
        echo "<script>alert('กรุณาเข้าสู่ระบบก่อนทำรายการ'); window.location.href='./index.php';</script>";
    }
    $username = $_SESSION['username'];
    $all_cart = "SELECT * FROM cart WHERE `username`= '$username'";
    $total = mysqli_query($conn, $all_cart);
    $num_row = mysqli_num_rows($total);
    ?>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">BLACKPINK | SHOP</label>
        <ul>
            <li><a href="./profile.php"><i class="fas fa-user-friends"></i> <?php echo $_SESSION['fullname'] ?></a></li>
            <li><a href="./home.php"><i class="fas fa-music"></i> Music</a></li>
            <li><a href="./Shirt.php"><i class="fas fa-tshirt"></i> Shirt</a></li>
            <li><a href="./Pants.php"><i class="fas fa-socks"></i> Pants</a></li>
            <li><a href="./Other.php"> Other</a></li>
            <li><a href="./mycart.php"><i class="fas fa-shopping-cart"></i> My Cart (<?php echo $num_row; ?>)</a></li>
            <li><a class="active" href="./my_purchases.php"><i class="fas fa-money-check"></i> my purchases</a></li>
            <li><a href="./logout.php"><i class="fas fa-lock"></i> Logout</a></li>
        </ul>
    </nav>
    <div class="container-sm box" style="background-color: white;">
        <div class="row">
            <div class="col-lg-12">
                <h2>My purchases</h2>
            </div>
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">ใบเสร็จ</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">ชื่อสินค้า</th>
                            <th scope="col">ที่อยู่</th>
                            <th scope="col">เบอร์ติดต่อ</th>
                            <th scope="col">ราคา</th>
                            <th scope="col">สถานะสินค้า</th>
                            <th scope="col">เลขพัสดุ</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $i = 1;
                        $total = 0;
                        $sql = "SELECT * FROM `orders` WHERE `username`= '$username'";
                        $rs = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_row($rs)) {
                            echo "<tr>
                                    <td>$i</td>
                                    <td><img src='./payment/$row[7]' style='width: 50px;'></td>
                                    <td>$row[2]</td>
                                    <td>$row[3]</td>
                                    <td>$row[5]</td>
                                    <td>$row[6]</td>
                                    <td>$row[4]</td>";
                                    if ($row[8] == 0) {
                                        echo "<td style='color: red;'>ยังไม่ยืนยันการสั่งซื้อ</td>";
                                    } else if ($row[8] == 1) {
                                        echo "<td style='color: green;'>ยืนยันการสั่งซื้อ</td>";
                                    }
                            echo "<td style='color: gray;'>$row[9]</td>";       
                            echo "</tr>";
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>