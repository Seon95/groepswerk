<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'winkeltje2';
$db_port = 8888;

$mysqli = new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db,
  $db_port
);

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

header("Location: ../index.php");
exit;
?>


