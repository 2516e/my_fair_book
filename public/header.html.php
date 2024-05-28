<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFairBook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="headerrow">
                <div class="socialsrow">
                    <div class="socials">
                        <a href="https://www.facebook.com/?locale=fr_FR" target="_blank">
                        <div class="circle">
                                <i class="fa-brands fa-facebook-f " style="color: #ffffff;"></i>
                            </div>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank">
                            <div class="circle">
                                <i class="fa-brands fa-instagram " style="color: #ffffff;"></i>
                            </div>
                        </a>
                        <a href="https://www.linkedin.com/feed/" target="_blank">
                            <div class="circle">
                                <i class="fa-brands fa-linkedin-in " style="color: #ffffff;"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="mainrow">
                    <div class="logocontainer">
                        <div class="logocontent">
                            <div class="logoimg">
                                <a href="http://localhost/my_fair_book/myfairbook.php">
                                    <img src="assets/img/myfairbook.jpg" alt="logo">
                                </a>
                            </div>
                        
                        <div class="logocontent">
                            <span class="logotitle">Le site qui prolonge la vie des livres</span>
                        </div>
                    </div>
                    <div class="srcbarcontainer">
                        <div class="srcbarcontent">
                            <form action="">
                                <input type="text" placeholder="Chercher..." id="srcbar">
                                <label for="srcbar" id="srcicon">
                                    <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="icons">
                        <li class="iconlist">
                            <div class="circler">
                                <a href="">
                                    <div class="ricon">
                                        <i class="fa-regular fa-user fa-lg" style="color: #ffffff;"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="circler">
                                <a href="">
                                    <div class="ricon">
                                        <i class="fa-regular fa-heart fa-lg" style="color: #ffffff;"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="circler">
                                <a href="">
                                    <div class="ricon">
                                        <i class="fa-solid fa-cart-shopping fa-lg" style="color: #ffffff;"></i>
                                    </div> 
                                </a>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </header>
    <?php require __DIR__ . "/nav.html.php"?>
