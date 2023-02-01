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
    $sql = "SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
    $rs = mysqli_query($conn, $sql);

    $all_cart = "SELECT * FROM cart";
    $total = mysqli_query($conn,$all_cart);
    $num_row = mysqli_num_rows($total);
    ?>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">BLACKPINK | SHOP</label>
        <ul>
            <li><a class="active" href="./profile.php"><i class="fas fa-user-friends"></i> <?php echo $_SESSION['fullname'] ?></a></li>
            <li><a href="./home.php"><i class="fas fa-music"></i> Music</a></li>
            <li><a href="./Shirt.php"><i class="fas fa-tshirt"></i> Shirt</a></li>
            <li><a href="./Pants.php"><i class="fas fa-socks"></i> Pants</a></li>
            <li><a href="./Other.php"> Other</a></li>
            <li><a href="./mycart.php"><i class="fas fa-shopping-cart"></i> My Cart (<?php echo $num_row; ?>)</a></li>
            <li><a href="./my_purchases.php"><i class="fas fa-money-check"></i> my purchases</a></li>
            <li><a href="./logout.php"><i class="fas fa-lock"></i> Logout</a></li>
        </ul>
    </nav>
    <div class="container profile" style="background-color: white;">
        <h4>โปรไฟล์</h4>
        <form id="myReg" method="POST" action="./edit_profile.php">
        <?php
        while ($row = mysqli_fetch_row($rs)) {
        ?>  
            <label>Username</label>
            <input class="form-control" type="text" name="username" value="<?php echo $row[0]?>" readonly><br>
            <label>Password</label>
            <input class="form-control" type="password" id="password" name="password" required><br>
            <label>Confirm-Password</label>
            <input class="form-control" type="password" id="cf-password" name="cf-password" required><br>
            <label>Firstname</label>
            <input class="form-control" type="text" name="fname" value="<?php echo $row[2]?>" required><br>
            <label>Lastname</label>
            <input class="form-control" type="text" name="lname" value="<?php echo $row[3]?>" required><br>
            <label>Address</label>
            <textarea class="form-control"  style="height: 100px" name="address"><?php echo $row[4]?></textarea><br>
            <label>Email</label>
            <input class="form-control" type="email" name="email" value="<?php echo $row[5]?>" required><br>
            <label>Phone number</label>
            <input class="form-control" type="text" name="phone" value="<?php echo $row[6]?>" required><br>
            <center><button type="submit" class="btn btn-success">ยืนยันการแก้ไขข้อมูล</button></center>
        <?php
        }
        ?>
        </form>    
    </div>
</body>
<script>
        let password = document.getElementById('password');
        let cfPassword = document.getElementById('cf-password');

        function mainJS() {
            if (checkPW(password, cfPassword)) {
                return true;
            } else {
                alert("กรุณาตรวจสอบ Password อีกครั้ง");
                return false;
            }
        }

        function checkPW(password, cfPassword) {
            if (password.value == cfPassword.value) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</html>