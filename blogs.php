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
        .offer{
            padding-top: 12rem;
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

            <a href="index.php" class="logo">PETOOO</a>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="index.php" class="navbar-link" data-nav-link>Home</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#shop" class="navbar-link" data-nav-link>Shop</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#" class="navbar-link" data-nav-link>Collections</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#Blogs" class="navbar-link" data-nav-link>Blogs</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#" class="navbar-link" data-nav-link>Contact</a>
                    </li>
                </ul>

                <a href="#" class="navbar-action-btn">Log In</a>
            </nav>

            <div class="header-actions">
                <button class="action-btn" aria-label="Search">
                    <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
                </button>

                <button class="action-btn user" aria-label="User">
                    <a href="register.php"><ion-icon name="person-outline" aria-hidden="true"></ion-icon></a>
                </button>

                <button class="action-btn" aria-label="cart">
                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                    <span class="btn-badge">0</span>
                </button>
            </div>
        </div>
    </header>

    <main>
    <section class="section offer" aria-label="offer">
        <div class="container">
          <ul class="grid-list">
            <li>
              <div class="offer-card has-bg-image img-holder" style="
                    background-image: url('./assets/images/offer-banner-1.jpg');
                    --width: 540;
                    --height: 374;
                  ">
                <p class="card-subtitle">.</p>

                <h3 class="h3 card-title">
                 DOG FOOD <span class="span">SCIENCE</span>
                </h3>

                <a href="dog_blogs.php" class="btn">Read More</a>
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

                <a href="dog_blogs.php" class="btn">Read More</a>
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

                <a href="dog_blogs.php" class="btn">Read More</a>
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



            <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">
                <div class="footer-top section">
                    <div class="container">
                        <div class="footer-brand">
                            <a href="#" class="logo">PETOOO</a>

                            <p class="footer-text">
                                If you have any question, please contact us at
                                <a href="mailto:support@gmail.com" class="link">kitterfoodssupport@gmail.com</a>
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
</body>


</html>