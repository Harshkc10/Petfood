<?php

include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- 
    - primary meta tag
  -->
  <title>PETOOO - Hight Quality Pet Food</title>
  <meta name="title" content="Kitter - Hight Quality Pet Food" />
  <meta name="description" content="This is an eCommerce html template made by codewithsadee" />

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css" />

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet" />

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg" />
  <style>
    body {
      color: black;
      background-color: (255, 255, 255);
    }

    .header {
      background-color: orange;
    }

    .btn_buy {
      width: 100%;
      padding: 5px;
      background-color: limegreen;
      color: white;
      border-radius: 10px;
      font-size: larger;
    }
  </style>
</head>

<body id="top">
  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>

      <a href="#" class="logo">PETOOO</a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="index.php" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="products.php" class="navbar-link" data-nav-link>Shop</a>
          </li>

          <li class="navbar-item">
            <a href="#collections" class="navbar-link" data-nav-link>Collections</a>
          </li>

          <li class="navbar-item">
            <a href="blogs.php" class="navbar-link" data-nav-link>Blogs</a>
          </li>

          <li class="navbar-item">
            <a href="#footer" class="navbar-link" data-nav-link>Contact</a>
          </li>
        </ul>

        <a href="#" class="navbar-action-btn">Log In</a>
      </nav>

      <div class="header-actions">
      <!-- <input type="text" placeholder="Search.." id="searching-items" name="search">
        <button class="action-btn" aria-label="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        
        </button> -->

        <button class="action-btn user" aria-label="User">
          <a href="register.php"><ion-icon name="person-outline" aria-hidden="true"></ion-icon></a>
        </button>

        <button class="action-btn" aria-label="cart">
          <a href="cart.php"><ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon></a>
        </button>
      </div>
    </div>

  </header>

  <main>
    <article>
      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home" style="background-image: url('./assets/images/hero-banner.jpg')">
        <div class="container">
          <h1 class="h1 hero-title">
            <span class="span">High Quality</span> Pet Food
          </h1>

          <p class="hero-text">Sale up to 40% off today</p>

          <a href="products.php" class="btn">Shop Now</a>
        </div>
      </section>

      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">
          <h2 class="h2 section-title">
            <span class="span">Top</span> categories
          </h2>

          <ul class="has-scrollbar">
            <li class="scrollbar-item">
              <div class="category-card">
                <figure class="card-banner img-holder" style="--width: 330; --height: 300">
                  <img src=".\assets\images\CATCOVER.jpg" width="330" height="300" loading="lazy" alt="Cat Food" class="img-cover" />
                </figure>
                <h3 class="h3">
                  <a href="cats.php" class="card-title">Cat Food</a>
                </h3>
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">
                <figure class="card-banner img-holder" style="--width: 330; --height: 300">
                  <img src=".\assets\images\DOGCOVER.jpg" width="330" height="300" loading="lazy" alt="Cat Toys" class="img-cover" />
                </figure>
                <h3 class="h3">
                  <a href="dogs.php" class="card-title">Dogs Food</a>
                </h3>
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">
                <figure class="card-banner img-holder" style="--width: 330; --height: 300">
                  <img src=".\assets\images\BIRDCOVER2.jpg" width="330" height="300" loading="lazy" alt="Dog Food" class="img-cover" />
                </figure>

                <h3 class="h3">
                  <a href="birds.php" class="card-title">Birds Food</a>
                </h3>
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">
                <figure class="card-banner img-holder" style="--width: 330; --height: 300">
                  <img src=".\assets\images\FISHCOVER.jpg" width="330" height="300" loading="lazy" alt="Dog Toys" class="img-cover" />
                </figure>

                <h3 class="h3">
                  <a href="fish.php" class="card-title">Fish's Toys</a>
                </h3>
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">
                <figure class="card-banner img-holder" style="--width: 330; --height: 300">
                  <img src="./assets/images/category-5.jpg" width="330" height="300" loading="lazy" alt="Dog Sumpplements" class="img-cover" />
                </figure>

                <h3 class="h3">
                  <a href="Toys.php" class="card-title">Pets Toys</a>
                </h3>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- 
        - #OFFERS
      -->

      <section class="section offer"  aria-label="offer">
        <div class="container">
          <ul class="grid-list">
            <li>
              <div class="offer-card has-bg-image img-holder" style="
                    background-image: url('./assets/images/offer-banner-1.jpg');
                    --width: 540;
                    --height: 374;
                  ">
                <p class="card-subtitle">Selected Items. Online Only.</p>

                <h3 class="h3 card-title">
                  Hot Summer <span class="span">Deals</span>
                </h3>

                <a href="#" class="btn">Read More</a>
              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder" style="
                    background-image: url('./assets/images/offer-banner-2.jpg');
                    --width: 540;
                    --height: 374;
                  ">
                <p class="card-subtitle">Treats & Grooming</p>

                <h3 class="h3 card-title">
                  Spoil your true <span class="span">love</span>
                </h3>

                <a href="#" class="btn">Read More</a>
              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder" style="
                    background-image: url('./assets/images/offer-banner-3.jpg');
                    --width: 540;
                    --height: 374;
                  ">
                <p class="card-subtitle">Our Brand You Will Love</p>

                <h3 class="h3 card-title">
                  New in this <span class="span">year</span>
                </h3>

                <a href="#" class="btn">Read More</a>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- 
        - #PRODUCT
      -->
   <section class="section hero has-bg-image" id="products-pets" aria-label="home">
      <h2 class="h2 section-title" id="collections">
              <span class="span">Best</span> Seller
            </h2>
        <div class="container">

          <ul class="grid-list">
            <li>
              <div class="product-card">
                <div class="card-banner img-holder" style="--width: 360; --height: 360">
                  <img src="./assets/images/petfood1.jpg" width="360" height="360" loading="lazy" alt="Commodo leo sed porta" class="img-cover default" />
                  <img src="./assets/images/petfood1back.jpg" width="360" height="360" loading="lazy" alt="Commodo leo sed porta" class="img-cover hover" />

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card" onclick="addToCart('petfood1.jpg','petfood1back.jpg','Pedigree Adult Wet Dog Food, Grilled Liver Chunks Flavour in Gravy with Vegetables', 1425.00)">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">
                  <div class="wrapper">
                    <div class="rating-wrapper">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(1)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Pedigree Adult Wet Dog Food, Grilled Liver Chunks Flavour in Gravy with Vegetables</a>
                  </h3>
                  <p>
                    Lorem ipsum dolor sit....
                  </p>

                  <data class="card-price" value="15">Rs 1425.00</data>
                  <form method="post"><button class="btn_buy" name="buy">buy now</button></form>
                  <?php
                  if (isset($_POST["buy"])) {
                    echo "<script>
                    location.href='http://localhost/TE_IT/payment.php'
                    </script>";
                  }


                  ?>
                </div>
              </div>
            </li>

            <li>
              <div class="product-card">
                <div class="card-banner img-holder" style="--width: 360; --height: 360">
                  <img src=".\assets\images\Petfood2.jpg" width="360" height="360" loading="lazy" alt="Purus consequat congue sit" class="img-cover default" />
                  <img src=".\assets\images\petfood2back.jpg" width="360" height="360" loading="lazy" alt="Purus consequat congue sit" class="img-cover hover" />

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card" onclick="addToCart('petfood2.jpg','petfood2back.jpg','PEDIGREE® Puppy Wet Dog Food - Chicken & Liver Chunks Flavour in Gravy with Vegetables', 1000.00)">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">
                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(1)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">PEDIGREE® Puppy Wet Dog Food - Chicken & Liver Chunks Flavour in Gravy with Vegetables</a>
                  </h3>
                  <p>
                    Lorem ipsum dolor sit....
                  </p>

                  <data class="card-price" value="45">Rs 1000.00</data>
                  <form method="post"><button class="btn_buy" name="buy">buy now</button></form>
                  <?php
                  if (isset($_POST["buy"])) {
                    echo "<script>
                    location.href='http://localhost/TE_IT/payment.php'
                    </script>";
                  }


                  ?>
                </div>
              </div>
            </li>
            <li>
              <div class="product-card">
                <div class="card-banner img-holder" style="--width: 360; --height: 360">
                  <img src=".\assets\images\Petfood3.jpg" width="360" height="360" loading="lazy" alt="Morbi vel arcu scelerisque" class="img-cover default" />
                  <img src=".\assets\images\Petfood3back.jpg" width="360" height="360" loading="lazy" alt="Morbi vel arcu scelerisque" class="img-cover hover" />

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card" onclick="addToCart('petfood3.jpg','petfood3back.jpg','Royal Canin British Shorthair Adult Wet Cat Food (85g x 12 Gravy Pouches)..', 1242.00)">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">
                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title"> Royal Canin British Shorthair Adult Wet Cat Food (85g x 12 Gravy Pouches)................</a>
                  </h3>
                  <p>
                    Lorem ipsum dolor sit....
                  </p>

                  <data class="card-price" value="45">Rs 1242.00</data>
                  <form method="post"><button class="btn_buy" name="buy">buy now</button></form>
                  <?php
                  if (isset($_POST["buy"])) {
                    echo "<script>
                    location.href='http://localhost/TE_IT/payment.php'
                    </script>";
                  }


                  ?>
                </div>
              </div>
            </li>

            <li>
              <div class="product-card">
                <div class="card-banner img-holder" style="--width: 360; --height: 360">
                  <img src=".\assets\images\Petfood4.jpg" width="360" height="360" loading="lazy" alt="Morbi vel arcu scelerisque" class="img-cover default" />
                  <img src=".\assets\images\Petfood4back.jpg" width="360" height="360" loading="lazy" alt="Morbi vel arcu scelerisque" class="img-cover hover" />

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card" onclick="addToCart('petfood4.jpg','petfood4back.jpg','Royal Canin Persian Adult Breed Dry Cat Food 400g', 522.00)">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">
                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Royal Canin Persian Adult Breed Dry Cat Food 400g &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                  </h3>
                  <p>
                    Lorem ipsum dolor sit....
                  </p>

                  <data class="card-price" value="49">Rs 522.00</data>
                  <form method="post"><button class="btn_buy" name="buy">buy now</button></form>
                  <?php
                  if (isset($_POST["buy"])) {
                    echo "<script>
                    location.href='http://localhost/TE_IT/payment.php'
                    </script>";
                  }


                  ?>
                </div>
              </div>
            </li>

          </ul>
        </div>
   </section>
    
   <section class="section hero has-bg-image" id="product-pets" aria-label="home">
        <div class="container">

          <ul class="grid-list">
            <li>
              <div class="product-card">
                <div class="card-banner img-holder" style="--width: 360; --height: 360">
                  <img src=".\assets\images\Petfood5.jpg" width="360" height="360" loading="lazy" alt="Morbi vel arcu scelerisque" class="img-cover default" />
                  <img src="./assets/images/product-4_0.jpg" width="360" height="360" loading="lazy" alt="Morbi vel arcu scelerisque" class="img-cover hover" />

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card" onclick="addToCart('petfood5.jpg','product-4._0.jpg','Zupreem Fruit Blend Bird Food for Large Birds', 1734.00)">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">
                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Zupreem Fruit Blend Bird Food for Large Birds</a>
                  </h3>
                  <p>
                    Lorem ipsum dolor sit....
                  </p>

                  <data class="card-price" value="85">Rs 1734.00</data>
                  <form method="post"><button class="btn_buy" name="buy">buy now</button></form>
                  <?php
                  if (isset($_POST["buy"])) {
                    echo "<script>
                    location.href='http://localhost/TE_IT/payment.php'
                    </script>";
                  }


                  ?>
                </div>
              </div>
            </li>

            <li>
              <div class="product-card">
                <div class="card-banner img-holder" style="--width: 360; --height: 360">
                  <img src=".\assets\images\Petfood6.jpg" width="360" height="360" loading="lazy" alt="Nam justo libero porta ege" class="img-cover default" />
                  <img src=".\assets\images\Petfood6back.jpg" width="360" height="360" loading="lazy" alt="Nam justo libero porta ege" class="img-cover hover" />

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card" onclick="addToCart('petfood6.jpg','petfood6back.jpg','Vitapol Karmeo Premium Food for Budgie (500g)', 247.00)">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">
                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Vitapol Karmeo Premium Food for Budgie (500g)</a>
                  </h3>
                  <p>
                    Lorem ipsum dolor sit....
                  </p>

                  <data class="card-price" value="85">Rs 247.00</data>
                  <form method="post"><button class="btn_buy" name="buy">buy now</button></form>
                  <?php
                  if (isset($_POST["buy"])) {
                    echo "<script>
                    location.href='http://localhost/TE_IT/payment.php'
                    </script>";
                  }


                  ?>
                </div>
              </div>
            </li>
            <li>
              <div class="product-card">
                <div class="card-banner img-holder" style="--width: 360; --height: 360">
                  <img src=".\assets\images\Petfood7.jpg" width="360" height="360" loading="lazy" alt="Nam justo libero porta ege" class="img-cover default" />
                  <img src=".\assets\images\Petfood7back.jpg" width="360" height="360" loading="lazy" alt="Nam justo libero porta ege" class="img-cover hover" />

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card" onclick="addToCart('petfood7.jpg','Petfood7back.jpg','Boltz Healthy Fish Food For Aquarium - Nutritionist Choice', 319.00)">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">
                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Boltz Healthy Fish Food For Aquarium - Nutritionist Choice</a>
                  </h3>
                  <p>
                    Lorem ipsum dolor sit....
                  </p>

                  <data class="card-price" value="85">Rs 319.00</data>
                  <form method="post"><button class="btn_buy" name="buy">buy now</button></form>
                  <?php
                  if (isset($_POST["buy"])) {
                    echo "<script>
                    location.href='http://localhost/TE_IT/payment.php'
                    </script>";
                  }


                  ?>
                </div>
              </div>
            </li>

            <li>
              <div class="product-card">
                <div class="card-banner img-holder" style="--width: 360; --height: 360">
                  <img src=".\assets\images\Petfood8.jpg" width="360" height="360" loading="lazy" alt="Etiam commodo leo sed" class="img-cover default" />
                  <img src=".\assets\images\Petfood8back.jpg" width="360" height="360" loading="lazy" alt="Etiam commodo leo sed" class="img-cover hover" />

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card" onclick="addToCart('petfood8.jpg','petfoodback8.jpg','Taiyo Discovery Pluss Arowana Fish Food - Floating Sticks', 280.00)">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">
                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Taiyo Discovery Pluss Arowana Fish Food - Floating Sticks</a>
                  </h3>
                  <p>
                    Lorem ipsum dolor sit....
                  </p>

                  <data class="card-price" value="55">Rs 280.00</data>
                  <form method="post"><button class="btn_buy" name="buy">buy now</button></form>
                  <?php
                  if (isset($_POST["buy"])) {
                    echo "<script>
                    location.href='http://localhost/TE_IT/payment.php'
                    </script>";
                  }


                  ?>
                </div>
              </div>
            </li>



          </ul>
        </div>
   </section>

      <!-- 
        - #SERVICE
      -->

      <section class="section service" aria-label="service">
        <div class="container">
          <img src="./assets/images/service-image.png" width="122" height="136" loading="lazy" alt="" class="img" />

          <h2 class="h2 section-title">
            <span class="span">What your pet needs,</span> when they need it.
          </h2>

          <ul class="grid-list">
            <li>
              <div class="service-card">
                <figure class="card-icon">
                  <img src="./assets/images/service-icon-1.png" width="70" height="70" loading="lazy" alt="service icon" />
                </figure>

                <h3 class="h3 card-title">Free Same-Day Delivery</h3>

                <p class="card-text">
                  Order by 2pm local time to get free delivery on orders $35+
                  today.
                </p>
              </div>
            </li>

            <li>
              <div class="service-card">
                <figure class="card-icon">
                  <img src="./assets/images/service-icon-2.png" width="70" height="70" loading="lazy" alt="service icon" />
                </figure>

                <h3 class="h3 card-title">30 Day Return</h3>

                <p class="card-text">
                  35% off your first order plus 5% off all future orders.
                </p>
              </div>
            </li>

            <li>
              <div class="service-card">
                <figure class="card-icon">
                  <img src="./assets/images/service-icon-3.png" width="70" height="70" loading="lazy" alt="service icon" />
                </figure>

                <h3 class="h3 card-title">Security payment</h3>

                <p class="card-text">
                  25% off your online order of $50+. Available at most
                  locations.
                </p>
              </div>
            </li>

            <li>
              <div class="service-card">
                <figure class="card-icon">
                  <img src="./assets/images/service-icon-4.png" width="70" height="70" loading="lazy" alt="service icon" />
                </figure>

                <h3 class="h3 card-title">24/7 Support</h3>

                <p class="card-text">
                  Shop online to get orders over $35 shipped fast and free.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- 
        - #CTA
      -->

      <section class="cta has-bg-image" id="Blogs" aria-label="cta" style="background-image: url('./assets/images/cta-bg.jpg')">
        <div class="container">
          <figure class="cta-banner">
            <img src="./assets/images/cta-banner.png" width="900" height="660" loading="lazy" alt="cat" class="w-100" />
          </figure>

          <div class="cta-content">
            <img src="./assets/images/cta-icon.png" width="120" height="35" loading="lazy" alt="taste guarantee" class="img" />

            <h2 class="h2 section-title">
              Taste it, love it or we’ll replace it… Guaranteed!
            </h2>

            <p class="section-text">
              At Petooo, we believe your dog and cat will love their food so
              much that if they don’t … we’ll help you find a replacement.
              That’s our taste guarantee.
            </p>


          </div>
        </div>
      </section>

      <!-- 
        - #BRAND
      -->

      <section class="section brand" aria-label="brand">
        <div class="container">
          <h2 class="h2 section-title">
            <span class="span">Popular</span> Brands
          </h2>

          <ul class="has-scrollbar">
            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150">
                <img src="./assets/images/brand-1.jpg" width="150" height="150" loading="lazy" alt="brand logo" class="img-cover" />
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150">
                <img src="./assets/images/brand-2.jpg" width="150" height="150" loading="lazy" alt="brand logo" class="img-cover" />
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150">
                <img src="./assets/images/brand-3.jpg" width="150" height="150" loading="lazy" alt="brand logo" class="img-cover" />
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150">
                <img src="./assets/images/brand-4.jpg" width="150" height="150" loading="lazy" alt="brand logo" class="img-cover" />
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150">
                <img src="./assets/images/brand-5.jpg" width="150" height="150" loading="lazy" alt="brand logo" class="img-cover" />
              </div>
            </li>
          </ul>
        </div>
      </section>
    </article>


  </main>


  <!--
    floating button for docters information 
  
  -->
  <div class="floating_info">
    <div class="css-script-ads" align="center">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- CSSScript Demo Page -->
      <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-2783044520727903" data-ad-slot="3025259193"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <div class="menu">
      <div class="menu__button">+</div>
      <div class="menu__content">
        <h3 class="menu__title">Doctors near you </h3>
        <ul class="menu_content_list">
          <li> <a href="https://www.google.com/search?sa=X&sca_esv=576780426&rlz=1C1UEAD_enIN1029IN1029&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=AM9HkKnfIjYquovALR1iVfduZh-rnMY8Pg:1698334667935&q=PET+doctor+near+sub+urban+mumbai&rflfq=1&num=10&ved=2ahUKEwiB8N3UhZSCAxVDTWwGHdWsAjIQjGp6BAgUEAE&biw=1536&bih=695&dpr=1.25#rlfi=hd:;si:;mv:[[19.2079241,72.9410716],[18.9510315,72.7986761]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2"><i class="fa fa-facebook-square"></i> Mumbai </li></a>
          <li> <a href="https://www.google.com/search?sca_esv=578063141&rlz=1C1UEAD_enIN1029IN1029&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=AM9HkKlrsvK2fjTww7WbbELJ6ldr1rV4Jw:1698735358218&q=pet+doctors+in+thane&rflfq=1&num=10&sa=X&ved=2ahUKEwid59-s2p-CAxVTSGwGHTnDChIQjGp6BAgUEAE&biw=1536&bih=742&dpr=1.25#rlfi=hd:;si:;mv:[[19.274225599999998,72.991821],[19.1935078,72.95884769999999]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2"><i class="fa fa-twitter-square"></i> Thane </li></a>
          <li> <a href="https://www.google.com/search?q=pet+doctors+in+navi+Mumbai&sca_esv=578063141&rlz=1C1UEAD_enIN1029IN1029&biw=1536&bih=742&tbm=lcl&sxsrf=AM9HkKnjaaoA61EgIud0jRGMgpyVXchSZg%3A1698735478072&ei=dqVAZc6GBJfvseMPraKjiAk&ved=0ahUKEwjOmfPl2p-CAxWXd2wGHS3RCJEQ4dUDCAk&uact=5&oq=pet+doctors+in+navi+Mumbai&gs_lp=Eg1nd3Mtd2l6LWxvY2FsIhpwZXQgZG9jdG9ycyBpbiBuYXZpIE11bWJhaTIFEAAYogQyBRAAGKIEMgUQABiiBDIFEAAYogRIoyNQdVjuG3ADeACQAQCYAYMCoAGOEKoBAzItObgBA8gBAPgBAcICBBAjGCfCAgcQIxiwAhgnwgIKECEYoAEYwwQYCogGAQ&sclient=gws-wiz-local#rlfi=hd:;si:;mv:[[19.1736616,73.1026121],[18.9530513,72.98439479999999]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2"><i class="fa fa-google-plus-square"></i> Navi Mumbai </li></a>
          <li> <a href="https://www.google.com/search?q=pet+doctors+in+pune&sca_esv=578063141&rlz=1C1UEAD_enIN1029IN1029&biw=1536&bih=742&tbm=lcl&sxsrf=AM9HkKmAaKSb0nj1GH6u-l-jz7WQV6aFzg%3A1698735531172&ei=q6VAZcORCtuw4-EP_ve82As&ved=0ahUKEwiDk5z_2p-CAxVb2DgGHf47D7sQ4dUDCAk&uact=5&oq=pet+doctors+in+pune&gs_lp=Eg1nd3Mtd2l6LWxvY2FsIhNwZXQgZG9jdG9ycyBpbiBwdW5lMgYQABgWGB4yCBAAGBYYHhgPMggQABgWGB4YDzIGEAAYFhgeMggQABgWGB4YDzIGEAAYFhgeMgYQABgWGB4yCBAAGIoFGIYDMggQABiKBRiGAzIIEAAYigUYhgNI7xpQpQRYxRVwAHgAkAEAmAGhAqABywuqAQMyLTa4AQPIAQD4AQHCAgQQIxgnwgIFEAAYgATCAggQABgWGB4YCogGAQ&sclient=gws-wiz-local#rlfi=hd:;si:;mv:[[18.6098951,73.960871],[18.4383738,73.7592567]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2"><i class="fa fa-instagram"></i> Pune </li></a>
        </ul>
      </div>
    </div>
    <script>
      let menu = document.querySelector(".menu");
      let button = document.querySelector(".menu__button");

      toggleMenu = () => {
        menu.classList.toggle("open");
      }

      button.addEventListener("click", function() {
        clearInterval(interactionPreview);
        toggleMenu();
      });

      let interactionPreview = setInterval(() => {
        toggleMenu();
      }, 2000)
    </script>
    <script>
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

      ga('create', 'UA-46156385-1', 'cssscript.com');
      ga('send', 'pageview');
    </script>

    <style>
      .menu {
        position: absolute;
        bottom: 20px;
        right: 20px;
        padding: 17px 15px;
        width: 50px;
        height: 50px;
        font-size: 20px;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        white-space: nowrap;
        color: #464448;
        overflow: hidden;
        background: black;
        border-radius: 50%;
        box-shadow: 0 3px 10px -2px rgba(0, 0, 0, 0.25);
        transition: 0.2s;
      }

      .menu.open {
        background: white;
        border: 1px solid #ccc;
        width: 235px;
        height: 258px;
        border-radius: 2px;
      }

      .menu.open .menu__button {
        color: #999;
        transform: rotate(45deg);
      }

      .menu.open .menu__content {
        opacity: 1;
        visibility: visible;
      }

      .menu__button {
        font-weight: 400;
        border: 0;
        background: none;
        color: white;
        position: absolute;
        top: 18px;
        right: 15px;
        font-size: 34px;
        padding: 0;
        width: 20px;
        height: 20px;
        line-height: 12px;
        transition: 0.2s;
        user-select: none;
      }

      .menu__title {
        font-size: 22px;
        margin: 0 0 13px 0;
      }

      .menu__content {
        opacity: 0;
        visibility: hidden;
        transition: 0.2s;
      }

      .menu_content_list {
        list-style: none;
        color: #42A5F5;
      }

      .menu_content_list li {
        margin: 0 0 3px 0;
        transform: translateX(20px);
        transition: 0.2s;
      }

      .menu_content_list li:nth-child(1) {
        transition-delay: 0.08s;
      }

      .menu_content_list li:nth-child(1) svg {
        fill: #42A5F5;
      }

      .menu_content_list li:nth-child(2) {
        transition-delay: 0.12s;
      }

      .menu_content_list li:nth-child(2) svg {
        fill: #66BB6A;
      }

      .menu_content_list li:nth-child(3) {
        transition-delay: 0.16s;
      }

      .menu_content_list li:nth-child(3) svg {
        fill: #FF8F00;
      }

      .menu.open .menu_content_list li {
        transform: translateX(0);
      }

      .menu_content_list svg {
        vertical-align: middle;
        position: relative;
        top: -1px;
      }
    </style>
  </div>
  <!-- 
    - #FOOTER
  -->

  <footer class="footer" id="footer" style="background-image: url('./assets/images/footer-bg.jpg')">
    <div class="footer-top section">
      <div class="container">
        <div class="footer-brand">
          <a href="#" class="logo">PETOOO</a>

          <p class="footer-text">
            If you have any question, please contact us at
            <a href="mailto:support@gmail.com" class="link">petoosupport@gmail.com</a>
          </p>

          <ul class="contact-list">
            <li class="contact-item">
              <a href="https://www.google.com/maps/place/K.C.+College+of+Engineering+%26+Management+Studies+%26+Research/@19.1855942,72.9730918,15.11z/data=!4m6!3m5!1s0x3be7b8da14eacea9:0xb4f1e032d9e4fc41!8m2!3d19.1799845!4d72.9803957!16s%2Fm%2F04n5vvg?entry=ttu"><ion-icon name="location-outline" aria-hidden="true"></ion-icon></a>

              <address class="address">Mumbai,Maharashtra,400078</address>
            </li>

            <li class="contact-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="tel:+16234567891011" class="contact-link">(+91)1234567890</a>
            </li>
          </ul>

          <ul class="social-list">
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
          </ul>
        </div>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Corporate</p>
          </li>

          <li>
            <a href="#" class="footer-link">Careers</a>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQs</a>
          </li>

          <li>
            <a href="#" class="footer-link">Vendors</a>
          </li>

          <li>
            <a href="#" class="footer-link">Affiliate Program</a>
          </li>
        </ul>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Information</p>
          </li>

          <li>
            <a href="#" class="footer-link">Online Store</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Refund Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Shipping Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms of Service</a>
          </li>

          <li>
            <a href="#" class="footer-link">Track Order</a>
          </li>
        </ul>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">Grooming</a>
          </li>

          <li>
            <a href="#" class="footer-link">Positive Dog Training</a>
          </li>

          <li>
            <a href="#" class="footer-link">Veterinary Services</a>
          </li>

          <li>
            <a href="#" class="footer-link">Petco Insurance</a>
          </li>

          <li>
            <a href="#" class="footer-link">Pet Adoption</a>
          </li>

          <li>
            <a href="#" class="footer-link">Resource Center</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <img src="./assets/images/payment.png" width="397" height="32" loading="lazy" alt="payment method" class="img" />
      </div>
    </div>
  </footer>

  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="./assets/js/cart.js"></script>

</body>


</html>