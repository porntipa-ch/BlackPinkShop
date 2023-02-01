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
    $sql = "SELECT * FROM product WHERE product_type='other'";
    $rs = mysqli_query($conn, $sql);
    $user = $_SESSION['username'];
    $all_cart = "SELECT * FROM cart WHERE username ='$user'";
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
            <li><a href="./profile.php"><i class="fas fa-user-friends"></i> <?php echo $_SESSION['fullname'] ?></a></li>
            <li><a href="./home.php"><i class="fas fa-music"></i> Music</a></li>
            <li><a href="./Shirt.php"><i class="fas fa-tshirt"></i> Shirt</a></li>
            <li><a href="./Pants.php"><i class="fas fa-socks"></i> Pants</a></li>
            <li><a class="active" href="./Other.php"><i class="fas fa-list"></i> Other</a></li>
            <li><a href="./mycart.php"><i class="fas fa-shopping-cart"></i> My Cart (<?php echo $num_row; ?>)</a></li>
            <li><a href="./my_purchases.php"><i class="fas fa-money-check"></i> my purchases</a></li>
            <li><a href="./logout.php"><i class="fas fa-lock"></i> Logout</a></li>
        </ul>
    </nav>
    <div class="container-sm">
        <h3>Other</h3>
        <?php
        while ($row = mysqli_fetch_row($rs)) {
        ?>
            <form action="./manage_cart.php" method="POST">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $row[3]; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title overflow-hidden"><?php echo $row[1]; ?></h5>
                        <p class="card-text">฿ <?php echo $row[2]; ?></p>
                        <input type="hidden" name="Item_Name" value="<?php echo $row[1];?>">
                        <input type="hidden" name="Price" value="<?php echo $row[2];?>">
                    </div>
                    <div class="button">
                        <input type="number" name="amount" value="1" min="1" max="10">
                        <input class="btn btn-primary" type="submit" name="Add_To_Cart" value="Add To Cart">
                    </div>
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>