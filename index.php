<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'winkeltje';
$db_port = 8889;

$mysqli = new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db,
  $db_port
);

if ($mysqli->connect_error) {
  echo 'Errno: ' . $mysqli->connect_errno;
  echo '<br>';
  echo 'Error: ' . $mysqli->connect_error;
  exit();
}
// if (isset($_GET["completed"])) {

//     $sql = "UPDATE todos set completed_at = NOW() Where id=" . $_GET["completed"];
//     $mysqli->query($sql);
//     $result = $mysqli->query($sql);
// }

// if (isset($_POST["newtask"])) {

//     $sql = "INSERT INTO todos(task) Values( '". $_POST["newtask"] . "')";
//     $mysqli->query($sql);

// }

$sql = "SELECT id,title,price,img FROM product";
$result = $mysqli->query($sql);

$product = [];
if ($result && $result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $product[] = $row;
  }
}


$mysqli->close();
?>

<style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* --------------------- NAVBAR -------------------- */

nav {
  display: flex;
  justify-content: space-around;
  /* background-color: green; */
  align-items: center;
  padding: 10px;
  max-width: 100%;
  min-width: 1000px;
}
nav img {
  height: 100px;
  width: 150px;
}
nav ul {
  display: flex;
  justify-content: flex-end;
  list-style: none;
  gap: 30px;
  margin-right: 30px;
}

nav ul li {
  color: white;
  text-decoration: none;
}
nav ul li:hover {
  color: white;
  text-decoration: underline;
}

/* --------------------- BODY / MAIN -------------------- */

body {
  background: #161616;
  color: white;
  font-weight: 400;
  font-family: sans-serif;
  margin-top: 10px;

  /* background: rgb(3, 119, 149);
  background: linear-gradient(
    90deg,
    rgba(3, 119, 149, 1) 0%,
    rgba(86, 176, 172, 1) 48%,
    rgb(74, 251, 245) 100%
  );

  background-position-y: 550px;
  color: white;
  font-weight: 400;
  font-family: sans-serif; */
}
main {
  width: 100%;
  position: relative;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  flex-direction: column;
  padding: 0 8%;
}

.title {
  font-size: 90px;
  margin: 4rem 0 2rem 0;
}

.filters-wrapper {
  width: 95%;
  margin: 0 auto;
}

.filters-wrapper ul {
  display: flex;
  gap: 80px;
  margin-bottom: 30px;
  list-style: none;
}
.filters-wrapper ul li:hover {
  text-decoration: underline;
}
.filters-wrapper ul li {
  display: flex;
  justify-content: space-between;
  list-style: none;
}

.search-container {
  margin: 1em 0;
}

.search-container input {
  background-color: transparent;
  width: 40%;
  border-bottom: 2px solid #110f29;
  padding: 1em 0.3em;
  color: white;
}
.search-container input:focus {
  border-bottom-color: #6759ff;
}

.search-container button {
  padding: 1em 2em;
  margin-left: 1em;
  background-color: #6759ff;
  color: white;
  border-radius: 5px;
  margin-top: 0.5em;
}

.button-value {
  border: 2px solid #6759ff;
  padding: 1em 2.2em;
  border-radius: 3em;
  background-color: transparent;
  color: #6759ff;
  cursor: pointer;
}
.button-value:hover {
  background: linear-gradient(#6759ff, #110f29);
}

/* --------------------- PRODUCTS -------------------- */

.product-grid {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  overflow: hidden;
  flex-wrap: wrap;
}

.product-container {
  width: 23%;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  flex-direction: column;
  margin-bottom: 5rem;
}

.product-img {
  height: 300px;
  width: 100%;
  overflow: hidden;
}

.product-img img {
  width: 100%;
}
/* .product-img:hover {
  opacity: 0.6;
  transform: scale(1.1);
} */

.product-info {
  display: flex;
  justify-content: flex-start;
  align-items: flex-start;
  flex-direction: column;
  /* margin-top: 1rem; */
}

.product-seller {
  text-transform: uppercase;
  font-size: 12px;
  color: #999;
}

.product-title {
  font-size: 20px;
  margin: 5px 0;
  font-weight: 500;
}

.product-price {
  color: white;
  font-size: 16px;
  font-weight: 600;
}

/* --------------------- PRODUCTS ANIMATIONS -------------------- */

.product-img img:hover {
  width: 100%;
  height: 100%;
  animation: rotation 2s infinite linear;
  /* opacity: 0.6; */
  transform: scale(1.1);
}

@keyframes rotation {
  from {
    transform: rotateY(0deg);
  }
  to {
    transform: rotateY(359deg);
  }
}

section{
  display: flex;
  gap: 20px;
}

.filter-buttons{
  padding-bottom: 30px;
}


</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <title>Document</title>
</head>

<body>
  <nav>
    <a href="../Homepage/index.html"><img src="/images/logo.png" alt="logo" /></a>
    <ul>
      <li>
        <a href="../Homepage/index.html"><i class="bi bi-house-door"></i></a>
      </li>
      <li><i class="bi bi-cart3"></i></li>
    </ul>
  </nav>


  <main>
    <h1 class="title">Football Shirts</h1>
    <div class="filters-wrapper">
      <!-- <button>Premier league</button>
        <button>La liga</button>
        <button>Bundesliga</button>
        <button>Serie A</button>
        <button>Ligue 1</button> -->
      <div class="search-container">
        <input type="search" id="search-input" placeholder="Search product name here..." />
        <button id="search">Search</button>
      </div>
      <div class="filter-buttons">
        <button class="button-value">Premier league</button>
        <button class="button-value">La Liga</button>
        <button class="button-value">Bundesliga</button>
        <button class="button-value">Serie A</button>
        <button class="button-value">Ligue 1</button>
      </div>
    </div>


    <section>
    <?php
    $counter = 1;
    foreach ($product as $key => $produkt) {
    ?>


      <div class="product-container">
        <div class="product-img">
          <img src="/images/<?= $produkt["img"] ?>" alt="Product" />
        </div>
        <div class="product-info">
          <span class="product-seller">Our Shop Name</span>
          <h3 class="product-title"><?= $produkt["title"] ?> </h3>
          <h3 class="product-price"><?= $produkt["price"] ?></h3>
        </div>
      </div>


    <?php
      $counter++;
    }
    ?>


</section>