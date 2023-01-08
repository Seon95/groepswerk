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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="/css/shop.css" />

  <title>Shop</title>
</head>

<body>
  <div class="container">
    <nav>
      <div class="links">
        <img class="logoo" src="/images/futshirt_logo_gimp.png" alt="logo" />
      </div>

      <div class="rechts">
        <ul>
          <li>
            <a href="index.html"><i class="bi bi-house-door"></i></a>
          </li>
          <li><i class="bi bi-cart3"></i></li>
        </ul>
      </div>
    </nav>
    <hr />


    <main>
      <h1 class="title">Our Products</h1>
      <div class="filters-wrapper">

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
              <img id="P-img" src="/images/<?= $produkt["img"] ?>" alt="Product" />
            </div>
            <div class="product-info">
              <span class="product-seller">FUTSHIRT</span>
              <h3 class="product-title"><?= $produkt["title"] ?> </h3>
              <!-- <h3 class="product-description"><?= $produkt["description"] ?></h3> -->
              <h3 class="product-price"><?= $produkt["price"] ?></h3>
            </div>
          </div>


          <div id="myModal" class="modal">
            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
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
        <h3>Futshirt</h3>
        <!--add all information -->
        <p>Futshirt inc.</p>
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
        <p>copyright &copy;2021 <a href="#">Futshirt</a> </p>
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
    <script src="./js/modalImg.js"></script>
  </div>

</body>