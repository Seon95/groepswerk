<?php
$title = "<h1>een <span>titel</span></h1>";
//we requiren de json file. (bekijk hem eens. hij bevat de output van de door vite gegenereerde bestanden)
$manifest = file_get_contents("./dist/manifest.json");
//we lezen hem in als associatieve array
$manifestObject = json_decode($manifest, true);
?>
<?php
 

 include './login/db.php';



$sql = "SELECT id,title,price,img,category_id FROM product";
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
    align-items: center;
    padding: 10px;
    max-width: 100%;
  }

  nav img {
    min-height: 100px;
    max-width: 150px;
  }

  nav ul {
    display: flex;
    justify-content: flex-end;
    list-style: none;
    gap: 30px;

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

  }

  main {
    min-width: 100%;
    position: relative;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: column;
    padding: 0 8%;
    margin-bottom: 30px;

  }

  .title {
    font-size: 90px;
    margin: 4rem 0 2rem 0;
  }

  .filters-wrapper {
    width: 95%;
    margin: 0 auto;
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
  #grid {
    max-width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    row-gap: 30px;
    column-gap: 30px;
    flex-wrap: wrap;
    margin-top: 50px;
  }

  .product-container {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    display: none;

  }

  .show {
  display: block;
}

nav img{
  border-radius: 4em;
}
  .product-img {
    height: 100%;
    width: 100%;
    overflow: hidden;
    margin-bottom: 10px;
    transition: all .4s ease;
  }

  .product-img img {
    width: 100%;
    height: 100%;
    overflow: hidden;
    max-width: 250px;

  }

  .product-img:hover {
    opacity: 0.6;
    transform: scale(1.1);

  }

  .product-info {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    flex-direction: column;
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



  section {
    display: flex;
    gap: 20px;
  }

  .filter-buttons {
    padding-bottom: 30px;
  }



  /* --------------------- Footer -------------------- */
  footer {
    position: absolute;
    bottom: auto;
    left: 0;
    right: 0;
    background: #111;
    height: auto;
    width: 100vw;
    padding-top: 40px;
    color: #fff;
  }

  .footer-content {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
  }

  .footer-content h3 {
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
  }

  .footer-content p {
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
    color: #cacdd2;
  }

  .socials {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
  }

  .socials li {
    margin: 0 10px;
  }

  .socials a {
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 5px;
    border-radius: 50%;
  }

  .socials a i {
    font-size: 1.1rem;
    width: 20px;
    transition: color .4s ease;
  }

  .socials a:hover i {
    color: aqua;
  }

  .footer-bottom {
    background: #000;
    width: 100vw;
    padding: 20px;
    padding-bottom: 40px;
    text-align: center;
  }

  .footer-bottom p {
    float: left;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
  }

  .footer-bottom p a {
    color: #44bae8;
    font-size: 16px;
    text-decoration: none;
  }

  .footer-bottom span {
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
  }

  .footer-menu {
    float: right;
  }

  .footer-menu ul {
    display: flex;
  }

  .footer-menu ul li {
    padding-right: 10px;
    display: block;
  }

  .footer-menu ul li a {
    color: #cfd2d6;
    text-decoration: none;
  }

  .footer-menu ul li a:hover {
    color: #27bcda;
  }

  /* --------------------- MEDIA QUERY -------------------- */

  @media only screen and (max-width: 800px) {
    .title {
      font-size: 50px;
    }
  }

  @media (max-width:500px) {
    .footer-menu ul {
      display: flex;
      margin-top: 10px;
      margin-bottom: 20px;
    }
  }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <title>Document</title>
</head>

<body>
  <nav>
    <a href="index.php"><img src="/images/logo.png" alt="logo" /></a>
    <ul>
      <li>
        <a href="index.html"><i class="bi bi-house-door"></i></a>
      </li>
      <li><i class="bi bi-cart3"></i></li>
    </ul>
  </nav>


  <main>
    <h1 class="title">Shop Products</h1>
    <div class="filters-wrapper">
      <div class="search-container">
        <input type="search" id="search-input" placeholder="Search product name here..." />
        <button id="search">Search</button>
      </div>
      <div id="filter-buttons">
        <button class="button-value active" onclick="filterSelection('all')"> Show all</button>
        <button class="button-value" onclick="filterSelection('1')">Premier league</button>
        <button class="button-value" onclick="filterSelection('2')">La Liga</button>
        <button class="button-value" onclick="filterSelection('3')">Bundesliga</button>
        <button class="button-value" onclick="filterSelection('4')">Serie A</button>
        <button class="button-value" onclick="filterSelection('5')"> Ligue 1</button>
      </div>
    </div>


    <section id="grid">
      <?php
      $counter = 1;
      foreach ($product as $key => $produkt) {
      ?>


        
<div class="product-container <?= $produkt["category_id"] ?>">
          <div class="product-img">
            <img src="/images/<?= $produkt["img"] ?>" alt="Product" />
          </div>
          <div class="product-info">
            <span class="product-seller">Our Shop Name</span>
            <h3 class="product-title"><?= $produkt["title"] ?> </h3>
            <!-- <h3 class="product-description"><?= $produkt["description"] ?></h3> -->
            <h3 class="product-price"><?= $produkt["price"] ?></h3>
          </div>
        </div>



      <?php
        $counter++;
      }
      ?>

      <script src="./js/filter.js" defer></script>
    </section>
  </main>


  <footer>
    <div class="footer-content">
      <h3>Footshirt</h3>
      <!--add all information -->
      <p>Footshirts inc.</p>
    </div>
    <ul class="socials">
      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
      <li><a href="#"><i class="fa fa-youtube"></i></a></li>
      <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
    </ul>

    <div class="footer-bottom">
      <!-- add all information -->
      <p>copyright &copy;2021 <a href="#">Footshirts</a> </p>
      <div class="footer-menu">
        <ul class="f-menu">
          <li><a href="./index.html">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="">Blog</a></li>
        </ul>
      </div>
    </div>


  </footer>
</body>