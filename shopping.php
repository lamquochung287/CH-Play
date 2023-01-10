<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Education</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark">
    <a href="index.php" class="navbar-brand">
        <img src="logo.png" class="img-responsive">
    </a>
    <form class="form-inline my-2 my-lg-0 w-75">
        <input class="form-control form-group-lg mr-sm-2 ml-sm-3 ml-lg-5 w-50" type="search" placeholder="Search..." id="searchApp">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class="navbar-toggler menuButton" type="button" data-toggle="collapse" data-target="#nvCollapse">
        <i class="bi bi-justify"></i>
    </button>
    <div class="collapse navbar-collapse" id="nvCollapse">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button">CATEGORY</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="games.php"><i class="bi bi-dice-6"></i> Games</a></li>
                    <!--                    <li><a class="dropdown-item" href="#"><i class="bi bi-book"></i> Comics</a></li>-->
                    <li><a class="dropdown-item" href="tools.php"><i class="bi bi-files"></i> Tools</a></li>
<!--                    <li><a class="dropdown-item" href=""><i class="bi bi-journal-text"></i> Education</a></li>-->
                    <li><a class="dropdown-item" href="shopping.php"><i class="bi bi-minecart"></i> Shopping</a></li>
                    <li><a class="dropdown-item" href="photography.php"><i class="bi bi-camera"></i> Photography</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button">TOP APPS</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="free.php"><i class="bi bi-hand-thumbs-up"></i> FREE APPS</a></li>
                    <li><a class="dropdown-item" href="paid.php"><i class="bi bi-file-lock"></i> PAID APPS</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <?php
                if(isset($_SESSION['isLogin']) === TRUE && $_SESSION['isLogin'] === TRUE ){
                    echo'<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button">
                                    <i class="bi bi-person" id="account"></i>'.$_SESSION['username'].'
                                </a>';
                }
                else{
                    echo '<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="bi bi-person" id="account"></i> Account
                            </a>';
                }
                ?>
                <ul class="dropdown-menu" >
                    <?php
                    if(isset($_SESSION['isLogin']) === TRUE && $_SESSION['isLogin'] === TRUE){
                        if($_SESSION['username'] !== 'admin'){
                            echo'<li><a class="dropdown-item" href="logout.php"><i class="bi bi-file-lock" type="button"></i> Log out</a>';
                            echo '<li><a class="dropdown-item" href="accountManagement.php"><i class="bi bi-gear"></i> Management</a></li>';
                        }
                        else{
                            echo'<li><a class="dropdown-item" href="logout.php"><i class="bi bi-file-lock" type="button"></i> Log out</a>';
                        }
                    }
                    else{
                        echo '<li><a class="dropdown-item" href="register.php"><i class="bi bi-file-lock" type="button"></i> Register</a>
                                    <li><a class="dropdown-item" href="login.php"><i class="bi bi-key"></i> Login</a></li>';
                    }
                    ?>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<hr>
<div class="container-fluid" id="appContent">
    <div class="row">
        <div class="col-lg-9 col-md-7 col-">
            <h3 class="title">SHOPPING</h3>
        </div>
    </div>
    <div class="row mr-auto">
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/eBay.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/31-mJUIynIfQBizOn-w1yWLKHBxVeRKA3gz348_E3K-TnuEaqCjn_-Fr9j0yQ6i0y5E=s180-rw">
            </a>
            <a href="Details/eBay.php" class="summary">
                <h5>eBay</h5>
                <h6>eBay Mobile</h6>
                <p> Discover great deals and sell items online!</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/amazon.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
            </a>
            <a href="Details/amazon.php" class="summary">
                <h5>Amazon Shopping</h5>
                <h6>Amazon Mobile LLC</h6>
                <p>Shop millions of products and manage your Amazon orders from anywhere!</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/shopee.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/v2UvMay1dEqzeTPyxWutDgAzvzJQJ_r28WUIhNKQalQ8lAZC05CKYX6vKpGBXvqs8A=s180-rw">
            </a>
            <a href="Details/shopee.php" class="summary">
                <h5>Shopee #1 Online Shopping</h5>
                <h6>Shopee</h6>
                <p>The leading online shopping platform in Southeast Asia and Taiwan.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/tiki.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/kH7bwVV56ZYtb0mGTGj5VeUHkW71PWGoC0cIeeE22dg2r0qBPamC2YJBNujJ89W-Wg=s180-rw">
            </a>
            <a href="Details/tiki.php" class="summary">
                <h5>Tiki</h5>
                <h6>Tiki Mobile Team</h6>
                <p>SHOPPING ONLINE, SO CHEAP, SO FAST, CONVENIENT</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/lazada.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/KN-SeSgc4DjY4Bg2DYSCAXst3dISI_bgAZaI_SgiGQr2DjdF05GblH8u3Y-UubgMS-4=s180-rw">
            </a>
            <a href="Details/lazada.php" class="summary">
                <h5>Lazada</h5>
                <h6>Lazada Mobile</h6>
                <p>Join over 140 million shoppers on Lazada across South East Asia for the best online shopping experience.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/hotTopic.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/REs9MXAU0uKqWLhcsorBPCySBL1Nj8US1pGSodI-M13E_JYEXOZsOJyDzdD_6ETWJrkq=s180-rw">
            </a>
            <a href="Details/hotTopic.php" class="summary">
                <h5>Hot Topic</h5>
                <h6>HOTTOPIC INC</h6>
                <p>Shop your favorite Hot Topic merch wherever you are with the revamped Hot Topic app!</p>
            </a>
        </div>
    </div>

    <hr class="invisible">
    <div class="row">
        <div class="col-lg-9 col-md-7 col-">
            <h3 class="title"></h3>
        </div>
    </div>
    <div class="row mr-auto">
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/etsy.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/giKCCPigafUbKQ1AkXVxSjQ1PggetEI96ORNKxxhQdvGAFhto71kO4zf7gZ9oOdLIQe5=s180-rw">
            </a>
            <a href="Details/etsy.php" class="summary">
                <h5>Etsy</h5>
                <h6>Etsy, Inc</h6>
                <p>Shop millions of one-of-a-kind items straight from your phone and tablet.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/overstock.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/r1RyQV0Tva6dHjjLQ4xikDyc2uU9OMXxUmnvDM3edGwfBI6tZvDC9XGltno9pH-jkw=s180-rw">
            </a>
            <a href="Details/overstock.php" class="summary">
                <h5>Overstock</h5>
                <h6>Overstock.com</h6>
                <p>Get Free Shipping on EVERYTHING</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/hobby.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/iV4M1Tgf30SpuTKxrzxqtJ2KVfj81iqp9rQvWmNTP4HiaNtmheHt_pXVNS0KO5u-xVw=s180-rw">
            </a>
            <a href="Details/hobby.php" class="summary">
                <h5>Hobby Lobby Stores, Inc.</h5>
                <h6>Microsoft Corporation</h6>
                <p>Browse the weekly ad, locate stores near you, check your gift card balance and much more.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/mercari.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/FKdrI1iuREHJ9SUw4RBfKFPmAuVNnvH_74QBCJYMqkRJp993FtP6WD5okQm1wO0ibUU=s180-rw">
            </a>
            <a href="Details/mercari.php" class="summary">
                <h5>Mercari</h5>
                <h6>Mercari, Inc</h6>
                <p>The perfect place to go to declutter or find your new look.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/offerUp.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/l_81q9c_BqSJX58fQ-hqWQO9LmMqcuIFW2leB9PtUyu7QY1ngt3gzW0qTos2vBMvpQ=s180-rw">
            </a>
            <a href="Details/offerUp.php" class="summary">
                <h5>OfferUp</h5>
                <h6>OfferUp Inc.</h6>
                <p>Buy. Sell. Letgo. - OfferUp and Letgo are now one big mobile marketplace.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/walmart.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/nckECUuaqv8rJllZ3CIvOJxxBnqe0TISPy_X-9B3U8nM4rst1Nr0eixKZlXW5fKyiTsf=s180-rw">
            </a>
            <a href="Details/walmart.php" class="summary">
                <h5>Walmart Shopping & Grocery</h5>
                <h6>Walmart</h6>
                <p>Our award-winning shopping app helps you save time and money.</p>
            </a>
        </div>
    </div>

    <hr class="invisible">
    <div class="row">
        <div class="col-lg-9 col-md-7 col-">
            <h3 class="title"></h3>
        </div>
    </div>
    <div class="row mr-auto">
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/alibaba.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Btfes5_yrMt5peCLS3QDjKYZN9rUYqGdPxrmBXdJ0b-6SJFI5-JLd5QSHl4aAplt_FE=s180-rw">
            </a>
            <a href="Details/alibaba.php" class="summary">
                <h5>Alibaba.com</h5>
                <h6>Alibaba Mobile</h6>
                <p>Leading online B2B Trade Marketplace</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/bestBuy.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/u6dX8UIBQKvzQNYcBbWNjdVPrctiOmZgvO89r2mEysm-HpM7UXFUxj8W1zoSvFh_myQ=s180-rw">
            </a>
            <a href="Details/bestBuy.php" class="summary">
                <h5>Best Buy</h5>
                <h6>Best Buy, Inc</h6>
                <p>Now the Best Buy app is more than just great hand-held shopping.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/footLocker.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/kVvsl9UPEIvG3CMYYdLJMWSD-hVH2dBPuotC2k0fDCdg0Znosb4T1lB2TjPJjjg7RTr3=s180-rw">
            </a>
            <a href="Details/footLocker.php" class="summary">
                <h5>Foot Locker</h5>
                <h6>Foot Locker, Inc.</h6>
                <p>Calling all sneakerheads! The Foot Locker App is your link to FLX rewards, classic kicks, hot launches and more</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/nike.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/eLqKK4MkDoXXbD_F3A_2rs-othxTESxbocvyOGyhAmbNCydgnYKczItIY2-HLYJmhr6Q=s180-rw">
            </a>
            <a href="Details/nike.php" class="summary">
                <h5>Nike</h5>
                <h6>Nike, Inc.</h6>
                <p>Shopping, content, and experiences tailored for you by Nike.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/shoeCarnival.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/3vz_XgyaLt_sTwNT5MBrRQ_6Be1xnRfO9GXw1l4EaGzYFoDSyP-3FaKBCfSI3emNIrwQ=s180-rw">
            </a>
            <a href="Details/shoeCarnival.php" class="summary">
                <h5>Shoe Carnival</h5>
                <h6>Shoe Carnival</h6>
                <p>One of the nation's largest, fastest growing and most exciting family footwear retailers.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/gap.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/tZG0k8Sf0QFK_VoEFQcuFl9dz1GUSDY1nTTuK8GOsQTFqDfThfzGBGvxe89YizAGzw=s180-rw">
            </a>
            <a href="Details/gap.php" class="summary">
                <h5>Gap</h5>
                <h6>Gap Official</h6>
                <p>The latest and greatest styles at Gap with our new app</p>
            </a>
        </div>
    </div>
</div>





</body>
</html>