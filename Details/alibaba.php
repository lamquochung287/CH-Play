<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alibaba</title>
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
            <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Btfes5_yrMt5peCLS3QDjKYZN9rUYqGdPxrmBXdJ0b-6SJFI5-JLd5QSHl4aAplt_FE=s180-rw">
        </div>
        <div class="col-lg-8 col-md-9 col- d-flex justify-content-center">
            <h2 class="title">
                Alibaba.com
                <br>
                <p class="d-flex justify-content-end author">Alibaba.com &nbsp&nbsp Shopping</p>

            </h2>
        </div>
    </div>
    <div class="row mr-auto mb-3 d-flex justify-content-center">
    </div>
    <div class="row mb-5">
        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
            <a >
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/KG8FqU_YU4VU90U_7wuPVJ8WdFW2teQAHcgoDNDQTRc_O6L5mNd6Y1Bto8fVUQTPW7E=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/d39QDUckd8XglWoWeoLTnI-eCDCGdsVqYE8q4U_NfNSYrUW47SuPdeOTQGOU0xp3aw=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/eWrLr-EEWCiQkd8dnLH5wRoBAXv0KYIj8EOnj2g4GCfBViZkcIzCDJjQRiUm1mTJSMY=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/h-3OcoOYAD4l2tJLchz8eyv-rFiO2HIXMFbbTsFghSCrauTZknx5d-p4sqj0UO4SYSE=w720-h310-rw">
            </a>
        </div>


    </div>
    <div class="row mr-auto mb-3">
        <p>The Alibaba.com app is a shopping wholesale mobile marketplace for global trade. Shop products from suppliers around the world, all from the convenience of your mobile device.</p>
        <p><b>Shop & Pay with confidence</b> <Br>
            Alibaba Trade Assurance fully covers your purchases when suppliers do not meet the product quality and delivery schedule specified in the agreed contract.</p>
        <p><b>Customized products</b> <br>
            Suppliers have years of experience in customizing products, fulfilling the demands from sellers on Amazon, eBay, wish, etsy, mercari, lazada, etc.</p>
        <p><b>Easy sourcing</b><br>
            Browse millions of products from industry-wide categories. Post Request for Quotations (RFQs) and receive price quotes quickly.<br>

            <b>Fast shipping</b><br>
            Alibaba partners with major freight forwarders to provide sea, air & land shipping solutions with on time delivery , tracking information and fair pricing.

            <b>Popular Categories</b><br>
            Alibaba.com covers a wide range of popular categories including hot and trending consumer products, also features industrial and raw materials categories</p>
        <br>
    </div>
    <div class="row mr-auto mb-3">
        <h3 class="pt-5">Similar Tools</h3>
        <div class="row mr-auto">
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="#">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/31-mJUIynIfQBizOn-w1yWLKHBxVeRKA3gz348_E3K-TnuEaqCjn_-Fr9j0yQ6i0y5E=s180-rw">
                </a>
                <a href="#" class="summary">
                    <h5>eBay</h5>
                    <h6>eBay Mobile</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="amazon.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                </a>
                <a href="amazon.php" class="summary">
                    <h5>Amazon Shopping</h5>
                    <h6>Amazon Mobile LLC</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="shopee.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/v2UvMay1dEqzeTPyxWutDgAzvzJQJ_r28WUIhNKQalQ8lAZC05CKYX6vKpGBXvqs8A=s180-rw">
                </a>
                <a href="shopee.php" class="summary">
                    <h5>Shopee #1 Online Shopping</h5>
                    <h6>Shopee</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="tiki.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/kH7bwVV56ZYtb0mGTGj5VeUHkW71PWGoC0cIeeE22dg2r0qBPamC2YJBNujJ89W-Wg=s180-rw">
                </a>
                <a href="tiki.php" class="summary">
                    <h5>Tiki</h5>
                    <h6>Tiki Mobile Team</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="lazada.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/KN-SeSgc4DjY4Bg2DYSCAXst3dISI_bgAZaI_SgiGQr2DjdF05GblH8u3Y-UubgMS-4=s180-rw">
                </a>
                <a href="lazada.php" class="summary">
                    <h5>Lazada</h5>
                    <h6>Lazada Mobile</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="hotTopic.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/REs9MXAU0uKqWLhcsorBPCySBL1Nj8US1pGSodI-M13E_JYEXOZsOJyDzdD_6ETWJrkq=s180-rw">
                </a>
                <a href="hotTopic.php" class="summary">
                    <h5>Hot Topic</h5>
                    <h6>HOTTOPIC INC</h6>
                </a>
            </div>
        </div>
        <div class="row mr-auto mb-3">
            <h3 class="pt-5">From the same Developer</h3>
            <div class="row mr-auto">
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="amazon.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                    </a>
                    <a href="amazon.php" class="summary">
                        <h5>Amazon Shopping</h5>
                        <h6>Amazon Mobile LLC</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="amazon.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                    </a>
                    <a href="amazon.php" class="summary">
                        <h5>Amazon Shopping</h5>
                        <h6>Amazon Mobile LLC</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="amazon.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                    </a>
                    <a href="amazon.php" class="summary">
                        <h5>Amazon Shopping</h5>
                        <h6>Amazon Mobile LLC</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="amazon.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                    </a>
                    <a href="amazon.php" class="summary">
                        <h5>Amazon Shopping</h5>
                        <h6>Amazon Mobile LLC</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="amazon.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                    </a>
                    <a href="amazon.php" class="summary">
                        <h5>Amazon Shopping</h5>
                        <h6>Amazon Mobile LLC</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="amazon.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/QPKtPRTJyhrYoPqYmjP81aCeYAQrH7ocIC25Tw8spEoKsX7eY0cqXMJp4QfkIq2bSg=s180-rw">
                    </a>
                    <a href="amazon.php" class="summary">
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