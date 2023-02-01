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
    $user = $_SESSION['username'];
    $all_cart = "SELECT * FROM cart WHERE username ='$user'";
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
            <li><a href="./Other.php"><i class="fas fa-list"></i> Other</a></li>
            <li><a class="active" href="./mycart.php"><i class="fas fa-shopping-cart"></i> My Cart (<?php echo $num_row; ?>)</a></li>
            <li><a href="./my_purchases.php"><i class="fas fa-money-check"></i> my purchases</a></li>
            <li><a href="./logout.php"><i class="fas fa-lock"></i> Logout</a></li>
        </ul>
    </nav>
    <div class="container-sm box" style="background-color: white;">
        <div class="row">
            <div class="col-lg-12">
                <h2>My Cart</h2>
            </div>
            <div class="col-lg-8">
                <table class="table table-striped">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">ชื่อสินค้า</th>
                            <th scope="col">ราคา</th>
                            <th scope="col">จำนวน</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $i = 1;
                        $total = 0;
                        $all_product = "";
                        $user = $_SESSION['username'];
                        $sql = "SELECT * FROM cart WHERE username ='$user'";
                        $rs = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_row($rs)) {
                            echo "<tr>
                                    <td>$i</td>
                                    <td>$row[2]</td>
                                    <td>$row[3]</td>
                                    <td>$row[4]</td>
                                    <td><a href='./delete.php?CartID=$row[0]'><button type='button' class='btn btn-outline-danger'>Remove</button></a><td>
                                </tr>";
                            $i++;
                            $total = $total + ($row[3] * $row[4]);
                            $all_product =$all_product.$row[2]."  x  ".$row[4]."<br>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form action="./payment.php" method="POST" enctype="multipart/form-data">
                    <h4>Total price</h4>
                    <hr><h4>฿ <?php echo $total ?></h4><hr>
                    <input type="hidden" name="total" value="<?php echo $total ?>">
                    <input type="hidden" name="all_product" value="<?php echo $all_product ?>">
                    <h5><input class="form-check-input" type="radio" name="bank" value="1"> K-Bank : Lisa 12345678 </h5>
                    <h5><input class="form-check-input" type="radio" name="bank" value="2"> SCB : Rose 987654321  </h5>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">
                            <h5>Please send proof of payment.(กรุณาส่งหลักฐานการโอนเงิน)</h5>
                        </label>
                        <input class="form-control" type="file" id="formFile" name="file" required>
                    </div>
                    <hr>
                    <button class="btn btn-primary btn-block" type="submit" name="s">ยืนยัน</button><br><br>
                </form>
            </div>
        </div>
    </div>
</body>

</html>