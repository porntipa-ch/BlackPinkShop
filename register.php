<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/register.css?<?php echo time() ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>BLACKPINK | SHOP</title>
    <link rel="icon" href="./img/icon.png" type="image/x-icon">
</head>

<body>
    <div class="container-sm bg-white">
        <h3>สมัครสมาชิก</h3>
        <form id="myReg" method="POST" action="./register_save.php" onsubmit="return mainJS()">
            <label>Username</label>
            <input class="form-control" type="text" name="username"  required>
            <label>Password</label>
            <input class="form-control" type="password" id="password" name="password" required>
            <label>Confirm-Password</label>
            <input class="form-control" type="password" id="cf-password" name="cf-password" required>
            <label>Firstname</label>
            <input class="form-control" type="text" name="fname" required>
            <label>Lastname</label>
            <input class="form-control" type="text" name="lname" required>
            <label>Address</label>
            <textarea class="form-control"  style="height: 100px" name="address"></textarea>
            <label>Email</label>
            <input class="form-control" type="email" name="email" required><br>
            <label>Phone number</label>
            <input class="form-control" type="text" name="phone" required><br>
            <center><button type="submit" class="btn btn-success">ยืนยันการสมัครสมาชิก</button></center>
        </form>   
    </div>



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
</body>

</html>