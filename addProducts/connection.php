<?php
 include '../login/db.php';

$title = $_POST['title'];
$description = $_POST['description'];
$createdAt = $_POST['createdAt'];
$price = $_POST['price'];
$active = $_POST['active'];
$category_id = $_POST['category_id'];
$img = $_POST['img'];

$qry = "INSERT INTO `product`(`title`, `description`, `createdAt`, `price`, `active`, `category_id`, `img`) VALUES ('$title','$description','$createdAt','$price','$active','$category_id','$img')";

$insert = mysqli_query($mysqli,$qry);

    if (!$insert){
        echo "problems";
    }
    else{
        echo "data inserted";
    }

header("Location: ../shop.php");
exit;
?>


