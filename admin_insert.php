<!-- <!DOCTYPE html>
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
    <div class="container insert">
        <h2>เพิ่มสินค้า</h2>
        <form action="./admin_insert_save.php" method="get">
            <p>ชื่อสินค้า : </p><input class='form-control' type='text' name='name'><br>
            <p>ราคา : </p><input class='form-control' type='number' name='price'><br>
            <p>ประเภท : </p>
            <select class="form-select" id="inputGroupSelect01" name="typer">
                <option selected></option>
                <option value="music">music</option>
                <option value="shirt">shirt</option>
                <option value="pants">pants</option>
                <option value="other">other</option>
            </select><br>
            <div>
                <p>รูปสินค้า : </p>
                <input class='form-control' type='file' id='formFile' name='img'>
            </div><br>
            <button class='btn btn-success btn-block btnn' type='submit' name='m'>ยืนยันการเพิ่มสินค้า</button>
        </form>
        <a href="./admin.php"><button class='btn btn-warning btn-block btnn'>ย้อนกลับ</button></a>
        <br><br>
    </div>
</body>

</html> -->

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
    <div class="container-sm admin">
        <?php
        if (isset($_GET['id'])) {
            include "./connectDB/connectDB.php";
            $id = $_GET['id'];
            switch ($id) {
                case 'm':
                    echo "<h1>Music</h1>";
                    echo "<form method='POST' action='./admin_insert_save.php' enctype='multipart/form-data'>
                    <label>Name</label>
                    <input class='form-control' type='text' name='name' required><br><br>
                    <label>Price</label>
                    <input class='form-control' type='number' name='price' min='1' required><br>
                    <div>
                        <label for='formFile' class='form-label'>Image</label>
                        <input class='form-control' type='file' id='formFile' name='img'>
                    </div><br>
                    <button class='btn btn-success btn-block' type='submit' name='m'>ยืนยันการเพิ่มสินค้า</button><br><br>
                </form>";

                    break;

                case 's':
                    echo "<h1>Shirt</h1>";
                    echo "<form method='POST' action='./admin_insert_save.php' enctype='multipart/form-data'>
                    <label>Name</label>
                    <input class='form-control' type='text' name='name' required><br><br>
                    <label>Price</label>
                    <input class='form-control' type='number' name='price' min='1' required><br>
                    <div>
                        <label for='formFile' class='form-label'>Image</label>
                        <input class='form-control' type='file' id='formFile' name='img'>
                    </div><br>
                    <button class='btn btn-success btn-block' type='submit' name='s'>ยืนยันการเพิ่มสินค้า</button><br><br>
                </form>";

                    break;

                case 'p':
                    echo "<h1>Pants</h1>";
                    echo "<form method='POST' action='./admin_insert_save.php' enctype='multipart/form-data'>
                    <label>Name</label>
                    <input class='form-control' type='text' name='name' required><br><br>
                    <label>Price</label>
                    <input class='form-control' type='number' name='price' min='1' required><br>
                    <div>
                        <label for='formFile' class='form-label'>Image</label>
                        <input class='form-control' type='file' id='formFile' name='img'>
                    </div><br>
                    <button class='btn btn-success btn-block' type='submit' name='p'>ยืนยันการเพิ่มสินค้า</button><br><br>
                </form>";

                    break;

                case 'o':
                    echo "<h1>Other</h1>";
                    echo "<form method='POST' action='./admin_insert_save.php' enctype='multipart/form-data'>
                    <label>Name</label>
                    <input class='form-control' type='text' name='name' required><br><br>
                    <label>Price</label>
                    <input class='form-control' type='number' name='price' min='1' required><br>
                    <div>
                        <label for='formFile' class='form-label'>Image</label>
                        <input class='form-control' type='file' id='formFile' name='img'>
                    </div><br>
                    <button class='btn btn-success btn-block' type='submit' name='o'>ยืนยันการเพิ่มสินค้า</button><br><br>
                </form>";

                    break;
            }
        }
        ?>
        <a href="./admin.php"><button class='btn btn-warning'>กลับ</button></a>
    </div>
</body>

</html>