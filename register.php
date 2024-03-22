<?php

include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 
  - primary meta tag
-->
    <title>PETOOO - Hight Quality Pet Food</title>
    <meta name="title" content="Kitter - Hight Quality Pet Food">
    <meta name="description" content="This is an eCommerce html template made by codewithsadee">

    <!-- 
  - favicon
-->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
  - custom css link
-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- 
  - google font link
-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- 
  - preload images
-->
    <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">
    <!--
  for login page icons

-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>


<style>
.form-box {
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto auto;
	padding: 40px;
	border-radius: 5px;
	box-shadow: 0 0 10px #000;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 500px;
	height: 430px;
}
.form-box:before {
	background-image: url("https://i.postimg.cc/8cnYLpfc/ddddd.jpg");
	width: 100%;
	height: 100%;
	background-size: cover;
	content: "";
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
	filter: blur(2px);
}
.form-box .header-text {
	font-size: 32px;
	font-weight: 600;
	padding-bottom: 30px;
	text-align: center;
}
.form-box input {
	margin: 10px 0px;
	border: none;
	padding: 10px;
	border-radius: 5px;
	width: 100%;
	font-size: 18px;
	font-family: poppins;
}
.form-box input[type=checkbox] {
	display: none;
}
.form-box label {
	position: relative;
	margin-left: 5px;
	margin-right: 10px;
	top: 5px;
	display: inline-block;
	width: 20px;
	height: 20px;
	cursor: pointer;
}
.form-box label:before {
	content: "";
	display: inline-block;
	width: 20px;
	height: 20px;
	border-radius: 5px;
	position: absolute;
	left: 0;
	bottom: 1px;
	background-color: #ddd;
}
.form-box input[type=checkbox]:checked+label:before {
	content: "\2713";
	font-size: 20px;
	color: #000;
	text-align: center;
	line-height: 20px;
}
.form-box span {
	font-size: 14px;
}
.form-box button {
	background-color: orange;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	width: 100%;
	font-size: 18px;
	padding: 10px;
	margin: 20px 0px;
}

</style>

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


            <div class="header-actions">


            </div>

        </div>
    </header>


    <?php

    if (isset($_POST["btn_sign_in"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $c_password = $_POST["confirm_password"];
        if ($password == $c_password) {
            $querry = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
            $result = mysqli_query($conn, $querry);
            if ($result) {
                echo "<script>
              alert('user added successfully!');
              window.location.href = 'http://localhost/TE_IT/index.php';
          </script>";
            } else {
                echo "<script>
      alert('something went wrong');
      </script>";
            }
        }
        else{
            echo "<script>
      alert('Make sure password is right.');
      </script>";
        }
    }


    ?>


    <main>
        <section class="section hero has-bg-image" id="home" aria-label="home" style="background-image: url('./assets/images/hero-banner.jpg')">
            <div class="container">
                <form class="form-box" method="POST">
                    <div class="header-text">
                        Register New User
                    </div>
                    <input type="text" name="name" placeholder="Harsh " required>
                    <input name="email" placeholder="Your Email Address" type="email" required>
                    <input name="password" placeholder="Your Password" type="password" required>
                    <input name="confirm_password" placeholder="Cofirmed Password" type="password" required>
                    <button name="btn_sign_in"> Register User</button>
                    <a href="account.php">Sign in</a>
                </form>
            </div>
        </section>
    </main>


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