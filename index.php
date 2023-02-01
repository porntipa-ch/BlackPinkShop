<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/index1.css?<?php echo time() ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>BLACKPINK | SHOP</title>
    <link rel="icon" href="./img/icon.png" type="image/x-icon">
</head>

<body>
    <?php
    include "./connectDB/connectDB.php";
    session_start();
    setcookie("visit_user", "test_user", time()+300000);
    if (isset($_POST['bt-sm'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $rs = mysqli_query($conn, $sql);
        $numrows = mysqli_num_rows($rs);
        if ($username == "admin") {
            echo "<script>window.location.href='./admin.php';</script>";
        } 
        if ($numrows > 0) {
            $fRows = mysqli_fetch_row($rs);
            $_SESSION['username'] = $username;
            $_SESSION['fullname'] = $fRows[2] . " " . $fRows[3];
            $_SESSION['address'] =  $fRows[4];
            $_SESSION['phone'] =  $fRows[6];
            echo "<script>window.location.href='./home.php';</script>";
        }else {
            echo "<script>alert('ไม่พบบัญชีของคุณ หรือ รหัสผ่านผิดพลาด');</script>";
        }
    }
    ?>
    <div class="body-flex">
        <div class="card-ass">
            <img src="./img/Logotipo_do_BlackPink.png" class="logo">
            <form method="POST">
                <div class="container-ass">
                    <label>Username</label>
                    <input class="form-control" type="text" id="username" name="username" style="font-size:16px;">
                    <label>Password</label>
                    <input class="form-control" type="password" id="password" name="password" style="font-size:16px;">
                    <p><a href="./register.php">สมัครสมาชิก</a> | <a href="./index.php?test=1">บัญชีทดสอบ</a></p>
                    <button type="submit" name="bt-sm">เข้าสู่ระบบ</button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php
if (isset($_GET['logout'])) {
    session_destroy();
}
elseif(isset($_GET['test'])){
    $_SESSION['fullname'] = "บัญชีทดสอบ";
    $_SESSION['username'] = "tester";
    echo "<script>alert('เข้าสู่ระบบด้วยบัญชีทดสอบจะไม่สามารถทำรายการได้');window.location='./home.php'</script>";
}
?>
</html>