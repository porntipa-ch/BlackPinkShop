<?php
include "./connectDB/connectDB.php";
session_start();
if(isset($_POST['m'])){
    $filetmp = $_FILES['img']['tmp_name'];
    $filename = $_FILES['img']['name'];
    $filetype = $_FILES['img']['type'];
    $filepath = 'img/MUSIC/'.$filename;
    $up = move_uploaded_file($filetmp,$filepath);
    if($up){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $path = "./".$filepath;
        $add = "INSERT INTO `product`(`product_name`, `product_price`, `product_img`, `product_type`) 
        VALUES ('$name','$price','$path','music')";
        $rs = mysqli_query($conn,$add);
        if($rs){
            echo "<script>
        alert('เพิ่มข้อมูลสำเร็จ');
        window.location.href='./admin.php';
        </script>";
        }
        else{
            echo "<script>
        alert('เพิ่มข้อมูลไม่สำเร็จ');
        window.location.href='./admin.php';
        </script>";
        }
    }

}
if(isset($_POST['s'])){
    $filetmp = $_FILES['img']['tmp_name'];
    $filename = $_FILES['img']['name'];
    $filetype = $_FILES['img']['type'];
    $filepath = 'img/shirt/'.$filename;
    $up = move_uploaded_file($filetmp,$filepath);
    if($up){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $path = "./".$filepath;
        $add = "INSERT INTO `product`(`product_name`, `product_price`, `product_img`, `product_type`) 
        VALUES ('$name','$price','$path','shirt')";
        $rs = mysqli_query($conn,$add);
        if($rs){
            echo "<script>
        alert('เพิ่มข้อมูลสำเร็จ');
        window.location.href='./admin.php';
        </script>";
        }
        else{
            echo "<script>
        alert('เพิ่มข้อมูลไม่สำเร็จ');
        window.location.href='./admin.php';
        </script>";
        }
    }

}if(isset($_POST['p'])){
    $filetmp = $_FILES['img']['tmp_name'];
    $filename = $_FILES['img']['name'];
    $filetype = $_FILES['img']['type'];
    $filepath = 'img/pants/'.$filename;
    $up = move_uploaded_file($filetmp,$filepath);
    if($up){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $path = "./".$filepath;
        $add = "INSERT INTO `product`(`product_name`, `product_price`, `product_img`, `product_type`) 
        VALUES ('$name','$price','$path','pants')";
        $rs = mysqli_query($conn,$add);
        if($rs){
            echo "<script>
        alert('เพิ่มข้อมูลสำเร็จ');
        window.location.href='./admin.php';
        </script>";
        }
        else{
            echo "<script>
        alert('เพิ่มข้อมูลไม่สำเร็จ');
        window.location.href='./admin.php';
        </script>";
        }
    }

}if(isset($_POST['o'])){
    $filetmp = $_FILES['img']['tmp_name'];
    $filename = $_FILES['img']['name'];
    $filetype = $_FILES['img']['type'];
    $filepath = 'img/other/'.$filename;
    $up = move_uploaded_file($filetmp,$filepath);
    if($up){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $path = "./".$filepath;
        $add = "INSERT INTO `product`(`product_name`, `product_price`, `product_img`, `product_type`) 
        VALUES ('$name','$price','$path','other')";
        $rs = mysqli_query($conn,$add);
        if($rs){
            echo "<script>
        alert('เพิ่มข้อมูลสำเร็จ');
        window.location.href='./admin.php';
        </script>";
        }
        else{
            echo "<script>
        alert('เพิ่มข้อมูลไม่สำเร็จ');
        window.location.href='./admin.php';
        </script>";
        }
    }

}