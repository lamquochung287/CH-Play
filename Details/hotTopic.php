<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hot Topic</title>
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark">
    <a href="../index.php" class="navbar-brand">
        <img src="../logo.png" class="img-responsive">
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
                    <li><a class="dropdown-item" href="../games.php"><i class="bi bi-dice-6"></i> Games</a></li>
                    <!--                    <li><a class="dropdown-item" href="#"><i class="bi bi-book"></i> Comics</a></li>-->
                    <li><a class="dropdown-item" href="../tools.php"><i class="bi bi-files"></i> Tools</a></li>
                    <!--                    <li><a class="dropdown-item" href=""><i class="bi bi-journal-text"></i> Education</a></li>-->
                    <li><a class="dropdown-item" href="../shopping.php"><i class="bi bi-minecart"></i> Shopping</a></li>
                    <li><a class="dropdown-item" href="../photography.php"><i class="bi bi-camera"></i> Photography</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button">TOP APPS</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../free.php"><i class="bi bi-hand-thumbs-up"></i> FREE APPS</a></li>
                    <li><a class="dropdown-item" href="../paid.php"><i class="bi bi-file-lock"></i> PAID APPS</a></li>
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
                            echo'<li><a class="dropdown-item" href="../logout.php"><i class="bi bi-file-lock" type="button"></i> Log out</a>';
                            echo '<li><a class="dropdown-item" href="../accountManagement.php"><i class="bi bi-gear"></i> Management</a></li>';
                        }
                        else{
                            echo'<li><a class="dropdown-item" href="../logout.php"><i class="bi bi-file-lock" type="button"></i> Log out</a>';
                        }
                    }
                    else{
                        echo '<li><a class="dropdown-item" href="../register.php"><i class="bi bi-file-lock" type="button"></i> Register</a>
                                    <li><a class="dropdown-item" href="../login.php"><i class="bi bi-key"></i> Login</a></li>';
                    }
                    ?>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<hr>
<div class="container" id="appContent">
    <div class="row mr-0">
        <div class="col-lg-4 detailsImg mb-2 mr-0">
            <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/REs9MXAU0uKqWLhcsorBPCySBL1Nj8US1pGSodI-M13E_JYEXOZsOJyDzdD_6ETWJrkq=s180-rw">
        </div>
        <div class="col-lg-8 col-md-9 col- d-flex justify-content-center">
            <h2 class="title">
                Hot Topic
                <br>
                <p class="d-flex justify-content-end author">HOTTOPIC INC &nbsp&nbsp Shopping</p>

            </h2>
        </div>
    </div>
    <div class="row mr-auto mb-3 d-flex justify-content-center">
    </div>
    <div class="row mb-5">
        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
            <a >
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/WHUYQ2VzOG3kNyQ31DOIvxgPP3gZr6LgVjR4Y1ZVqDgCYvDBQRh7MmACY8Nbf9bxcw=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/ZpiEuRb9H-ZrcEzbtkFn_2shriFvK6ZaOGoUdMjkFZbiN79gd9o8Navs6_T4QAWvQPs=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/UQX3eyPKU-iVvtuQbrwvUvbD1J92KcPqHoQsJEVOuRyXAUjeu8vRUfO-qup4y3_IQC8=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/eOrmPFoxdWivteCwpiwjoeZ2Dwhwq2JMXXkY50dki5xp1RelT40B70ywipA5nq3DCA=w720-h310-rw">
            </a>
        </div>

    </div>
    <div class="row mr-auto mb-3">
        <p>Shop your favorite Hot Topic merch wherever you are with the revamped Hot Topic app! It's now easier than ever to browse our huge selection of officially licensed music and pop culture merch for all fandoms. Whether you want new tees or fresh hoodies, the latest fashion trends for guys, girls and plus sizes, band merch to turn up your look, anime styles you can wear head to toe, the coolest Funko drops and collectibles, home décor items, or mini backpacks and jewelry for your 'fit — we've got it. You can even round up your purchases to the nearest dollar to benefit the Hot Topic Foundation, which increases access to mental health programs and music education.</p>
        <b>Download our NEW app to enjoy these improved and exclusive features: </b>
        o Smoother navigation and enhanced search capabilities to easily browse Hot Topic apparel, accessories, collectibles and home décor. <Br>
        o Improved stability for seamless app experience. <Br>
        o Easily add must-have merch to your Wishlist. <Br>
        o Quickly find your nearest Hot Topic store for in-store shopping. <Br>
        o Use HT Reservations to book an in-store shopping reservation and skip the line. <Br>
        o Score the latest promotions, deals and discounts. <Br>
        o Keep track of your HT Guest List points and rewards. <Br>
        o Easily manage your account activity and info, and track your order status. <Br>
        o Quick access to customer service FAQs.
        <br>
    </div>
    <div class="row mr-auto mb-3">
        <h3 class="pt-5">Similar Tools</h3>
        <div class="row mr-auto">
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="#">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/9a0BgQzLrVIy4Tj_uDA9I1a2vJZDCxmo0wO8oRXXN1Z8qMMDc64Pmr_wrIz7CtkTj_E=s180-rw">
                </a>
                <a href="#" class="summary">
                    <h5>Five Below</h5>
                    <h6>Five Below</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="#">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                </a>
                <a href="#" class="summary">
                    <h5>Amazon Shopping</h5>
                    <h6>Amazon Mobile LLC</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="#">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/v2UvMay1dEqzeTPyxWutDgAzvzJQJ_r28WUIhNKQalQ8lAZC05CKYX6vKpGBXvqs8A=s180-rw">
                </a>
                <a href="#" class="summary">
                    <h5>Shopee #1 Online Shopping</h5>
                    <h6>Shopee</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="#">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/kH7bwVV56ZYtb0mGTGj5VeUHkW71PWGoC0cIeeE22dg2r0qBPamC2YJBNujJ89W-Wg=s180-rw">
                </a>
                <a href="#" class="summary">
                    <h5>Tiki</h5>
                    <h6>Tiki Mobile Team</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="#">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/KN-SeSgc4DjY4Bg2DYSCAXst3dISI_bgAZaI_SgiGQr2DjdF05GblH8u3Y-UubgMS-4=s180-rw">
                </a>
                <a href="#" class="summary">
                    <h5>Lazada</h5>
                    <h6>Lazada Mobile</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="#">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/REs9MXAU0uKqWLhcsorBPCySBL1Nj8US1pGSodI-M13E_JYEXOZsOJyDzdD_6ETWJrkq=s180-rw">
                </a>
                <a href="#" class="summary">
                    <h5>Hot Topic</h5>
                    <h6>HOTTOPIC INC</h6>
                </a>
            </div>
        </div>
        <div class="row mr-auto mb-3">
            <h3 class="pt-5">From the same Developer</h3>
            <div class="row mr-auto">
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="#">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                    </a>
                    <a href="#" class="summary">
                        <h5>Amazon Shopping</h5>
                        <h6>Amazon Mobile LLC</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="#">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                    </a>
                    <a href="#" class="summary">
                        <h5>Amazon Shopping</h5>
                        <h6>Amazon Mobile LLC</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="#">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                    </a>
                    <a href="#" class="summary">
                        <h5>Amazon Shopping</h5>
                        <h6>Amazon Mobile LLC</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="#">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                    </a>
                    <a href="#" class="summary">
                        <h5>Amazon Shopping</h5>
                        <h6>Amazon Mobile LLC</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="#">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                    </a>
                    <a href="#" class="summary">
                        <h5>Amazon Shopping</h5>
                        <h6>Amazon Mobile LLC</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="#">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                    </a>
                    <a href="#" class="summary">
                        <h5>Amazon Shopping</h5>
                        <h6>Amazon Mobile LLC</h6>
                    </a>
                </div>
            </div>
        </div>


    </div>
</div>





</body>
</html>