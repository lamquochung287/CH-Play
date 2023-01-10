<?php

    session_start();
    $host = 'localhost';
    $user = 'root';
    $pass = '519h0291';
    $dbname = 'account_db';
    $connection = new mysqli($host , $user,$pass);
    if ($connection-> error){
        die("Connection failed: " . $connection->error);
    }

    #create database if not exist 
    mysqli_query($connection,"CREATE DATABASE IF NOT EXISTS $dbname");

    $_SESSION['isSuccess'] = FALSE;
    $_SESSION['Error'] = FALSE;
    $_SESSION['String'] = '';

    # select database and create table profile for normal user if not exist
    $connection->select_db($dbname);
    $sql = 'create table if not exists profile(
        username varchar(255) not null,
        password varchar(255) not null,
        email varchar(255) not null,
        fullname varchar(255) not null)';

    $sql2 = 'create table if not exists adminprofile(
        username varchar(255) not null,
        password varchar(255) not null)';
    if($connection->query($sql) === FALSE){
        die('Create table profile failed'.$connection->error);
    }
    if($connection->query($sql2) === FALSE){
        die('Create table adminprofile failed'.$connection->error);
    }

    $admin = 'admin';
    $admin_pass = 'tdtu';
    $admin_pass = md5($admin_pass);
    $connection = mysqli_connect($host,$user,$pass, $dbname);
    #add admin account to the database
    $check = mysqli_query($connection,"SELECT * FROM adminprofile WHERE username = 'admin'");

    if(mysqli_num_rows($check) == 0){
        @$addmember = mysqli_query($connection,"INSERT adminprofile Value('$admin','$admin_pass')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App Store</title>
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
<!--                        <li><a class="dropdown-item" href="tools.php"><i class="bi bi-book"></i> Comics</a></li>-->
                        <li><a class="dropdown-item" href="tools.php"><i class="bi bi-files"></i> Tools</a></li>
<!--                        <li><a class="dropdown-item" href="education.php"><i class="bi bi-journal-text"></i> Education</a></li>-->
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
                <h3 class="title">GAMES</h3>
            </div>
            <div class="col-lg-3 col-md-5 col- d-flex flex-row-reverse">
                <a href="games.php" class="detail p-2">See more</a>
            </div>
        </div>
        <div class="row mr-auto">
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Details/bandicoot.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/D5cIl0bz9miRWcDyBNHk2VnRi9vNfsI7321ZCdK6lYvDjMqcAtfmiTlZGsjDhy4bRUpS=s180-rw">
                </a>
                <a href="Details/bandicoot.php" class="summary">
                    <h5>Crash Bandicoot</h5>
                    <h6>King</h6>
                    <p>Join Crash Bandicoot to save the multiverse!</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Details/AmongUs.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/VHB9bVB8cTcnqwnu0nJqKYbiutRclnbGxTpwnayKB4vMxZj8pk1220Rg-6oQ68DwAkqO=s180-rw">
                </a>
                <a href="Details/AmongUs.php" class="summary">
                    <h5>Among Us</h5>
                    <h6>Innersloth LLC</h6>
                    <p>Let find out who is the Imposter!!!</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Details/snake.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/SCq3fvRfILZKpMpVEbNYj_kRsnAt--KzZqO78JeQnfv7F00adEC72JgPXfnD5fZpblbr=s180-rw">
                </a>
                <a href="Details/snake.php" class="summary">
                    <h5>Snake</h5>
                    <h6>Kooapps Games</h6>
                    <p>Fun Addicting Online Arcade .io Games</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Details/genshin.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/So91qs_eRRralMxUzt_tkj4aBXvVSYqWiEJrzrk_LBd5071mSMv_gBKslyulIOrPsiQ=s180-rw">
                </a>
                <a href="Details/genshin.php" class="summary">
                    <h5>Genshin Impact</h5>
                    <h6>miHoYo Limited</h6>
                    <p>Step into Teyvat, a beautiful world with elemental energy.</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Details/pokemon.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/nK_-VeI5OLlQYOucqEMOjsmAa_xgkxyZw4QKWDI4jk0crWYuZyi4wxhcqrGgc14E7g=s180-rw">
                </a>
                <a href="Details/pokemon.php" class="summary">
                    <h5>Pokémon GO</h5>
                    <h6>Niantic, Inc</h6>
                    <p>Explore the world of Pokémon.</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Details/dragon.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/8cEUhwDnG7TUQiOnMB2c0ZTFtXQ025rorUtNmyBUQOiX5ayUJq2nU-5llM8RBcvLxh8=s180-rw">
                </a>
                <a href="Details/dragon.php" class="summary">
                    <h5>Dragonscapes</h5>
                    <h6>Century Games Pte. Ltd</h6>
                    <p>Go on a tropical adventure to mysterious new islands and discover dragons!</p>
                </a>
            </div>
        </div>
        <!--COMICS-->
<!--        <hr class="appHr">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-9 col-md-7 col-">-->
<!--                <h3 class="title">COMICS</h3>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-5 col- d-flex flex-row-reverse">-->
<!--                <a href="#" class="detail p-2">See more</a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row mr-auto">-->
<!--            <div class="col-lg-2 col-md-4 col-sm-6 col-">-->
<!--                <a href="#">-->
<!--                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/N0IoatmNSedA1OwGmjZauoziClJnAR3gatt5G78PDAHmZU8ytvyVj7wp2SfDFM15N0w=s180-rw">-->
<!--                </a>-->
<!--                <a href="#" class="summary">-->
<!--                    <h5>WEBTOON</h5>-->
<!--                    <h6>WEBTOON ENTERTAINMENT</h6>-->
<!--                    <p>The largest webcomics community in the world.!</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-2 col-md-4 col-sm-6 col-">-->
<!--                <a href="#">-->
<!--                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Lv7tKkdYemGyK8RUNFImz52Ad104QxkTTZN30jkhXLRdsB9kV2e46mdXv_YTNonfITo=s180-rw">-->
<!--                </a>-->
<!--                <a href="#" class="summary">-->
<!--                    <h5>WeComics - Daily Webtoon</h5>-->
<!--                    <h6>WeComics</h6>-->
<!--                    <p>Dive in your favorite comic world</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-2 col-md-4 col-sm-6 col-">-->
<!--                <a href="#">-->
<!--                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/duQHY3cIoxs3FF7rqxp8iRddaeivohp3vdQ_S65exsMovMelHUoFGwXLpecMRpZS0A=s180-rw">-->
<!--                </a>-->
<!--                <a href="#" class="summary">-->
<!--                    <h5>Watch Anime Online HD</h5>-->
<!--                    <h6>ainsleychai</h6>-->
<!--                    <p>The best app to watch anime online HD.</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-2 col-md-4 col-sm-6 col-">-->
<!--                <a href="#">-->
<!--                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/1uEi6nmVXhDdAieXYpWibI4esn7mA0cZDywo_Dqv1hwg17DN10VDr-nQKmPaEe39dgc=s180-rw">-->
<!--                </a>-->
<!--                <a href="#" class="summary">-->
<!--                    <h5>Tappytoon Comics & Webtoons</h5>-->
<!--                    <h6>Contents First</h6>-->
<!--                    <p>The best new comics and exclusive webtoons</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-2 col-md-4 col-sm-6 col-">-->
<!--                <a href="#">-->
<!--                    <img class="image-responsive appImg"  src="https://play-lh.googleusercontent.com/jm6iUrDxxIPS6tq3EJLmRguHrJmkYe_gnmI83Itzpt5teODRQbgt4UsAkb_T_Enr2G14=s180-rw">-->
<!--                </a>-->
<!--                <a href="#" class="summary">-->
<!--                    <h5>Lezhin Comics</h5>-->
<!--                    <h6>LEZHIN ENTERTAINMENT</h6>-->
<!--                    <p>New High Quality Comics Every Day.</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-2 col-md-4 col-sm-6 col-">-->
<!--                <a href="#">-->
<!--                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/vqxJTH2xSwjU4BzDyrxjR827HanqfnPsKW7Oz9NGlxnIxK8gI0wOSwUvCJvevHey8A=s180-rw">-->
<!--                </a>-->
<!--                <a href="#" class="summary">-->
<!--                    <h5>Tapas – Comics and Novels</h5>-->
<!--                    <h6>Tapas Media, Inc</h6>-->
<!--                    <p>Your new favorite app to explore tens of thousands of webcomics and novels!</p>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
        <!--WE DON'T HAVE ENOUGH TIME SO WE DROP IT-->

            <!--TOOLS-->
            <hr class="appHr">
            <div class="row">
                <div class="col-lg-9 col-md-7 col-">
                    <h3 class="title">TOOLS</h3>
                </div>
                <div class="col-lg-3 col-md-5 col- d-flex flex-row-reverse">
                    <a href="tools.php" class="detail p-2">See more</a>
                </div>
            </div>
            <div class="row mr-auto">
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="Details/moveiOS.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/TVVIZnPw3rAi9o1DfCRH97UbbSRGqLo7fFKoDIYhQZ2j1B2T-fOQkDuLlCqki-gYKg=s180-rw">
                    </a>
                    <a href="Details/moveiOS.php" class="summary">
                        <h5>Move to iOS</h5>
                        <h6>Apple Inc</h6>
                        <p>No need to save your stuff elsewhere before switching from Android!</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="Details/holaVPN.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CTqc1bZ8SOOj9IjVWNIvl8K8W7bKiWaU_3oRtnqC_jmZvHVfHkaAR9FM6V0xPtm78xwh=s180-rw">
                    </a>
                    <a href="Details/holaVPN.php" class="summary">
                        <h5>Hola VPN Proxy Plus</h5>
                        <h6>Hola VPN Ltd</h6>
                        <p>Unblock websites, apps and content. Secure and private browsing!</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="Details/nordVPN.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/X8hJVUEzH6Q5N0g5npd0gz4rYPmvSek1ScQL8cmnIa8bLtXeAcRQJbLaoBAL-4YXIQ=s180-rw">
                    </a>
                    <a href="Details/nordVPN.php" class="summary">
                        <h5>NordVPN</h5>
                        <h6>Nord Security</h6>
                        <p>Best VPN Fast, Secure & Unlimited</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="Details/rar.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/K4ZQnK2FafXDnaAu5TPWWEDVR-ZhR9AiriJ-nUuMUy-9LHafa8VwJhY_UJLRPJzGbmKh=s180-rw">
                    </a>
                    <a href="Details/rar.php" class="summary">
                        <h5>RAR</h5>
                        <h6>RARLAB</h6>
                        <p>An all-in-one, original, free, simple, easy and quick compression program, archiver...</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="Details/googleGo.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/RZ5luCUwc5QtJP9xDn-ZCwEutT160GVyoh5K1eu4YJ5fD7v4LP5ptVdgR9mz4Hnr7A=s180-rw">
                    </a>
                    <a href="Details/googleGo.php" class="summary">
                        <h5>Google Go - A fast way to search</h5>
                        <h6>Google LLC</h6>
                        <p>Google Go is a faster way to search and save up to 40% of your data!</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="Details/phoneCleaner.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/DQpbp_DGd380wvngtYfSfsgBAv-H-tbIJKOotHRpuO47dg5UZRCu7GuB7MOYcMlh_PI=s180-rw">
                    </a>
                    <a href="Details/phoneCleaner.php" class="summary">
                        <h5>Phone Cleaner</h5>
                        <h6>Super Cleaner Studio</h6>
                        <p>Cache Clean, Android Booster Master. Make your phone cleaner!</p>
                    </a>
                </div>
            </div>

        <!--EDUCATION-->
<!--            <hr class="appHr">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-9 col-md-7 col-">-->
<!--                    <h3 class="title">EDUCATION</h3>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-5 col- d-flex flex-row-reverse">-->
<!--                    <a href="#" class="detail p-2">See more</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row mr-auto">-->
<!--                <div class="col-lg-2 col-md-4 col-sm-6 col-">-->
<!--                    <a href="#">-->
<!--                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/heFoyETxMlE0cNRdeMaJeC2LTyvWY-ikNR7POHlcPOIfbG0EeigTXmA1c3Et0XycXQ=s180-rw">-->
<!--                    </a>-->
<!--                    <a href="#" class="summary">-->
<!--                        <h5>PlantIn: Plant Identification</h5>-->
<!--                        <h6>PlantIn</h6>-->
<!--                        <p> Plant identification, disease identifier and many more!</p>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-lg-2 col-md-4 col-sm-6 col-">-->
<!--                    <a href="#">-->
<!--                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/w0s3au7cWptVf648ChCUP7sW6uzdwGFTSTenE178Tz87K_w1P1sFwI6h1CLZUlC2Ug=s180-rw">-->
<!--                    </a>-->
<!--                    <a href="#" class="summary">-->
<!--                        <h5>Google Classroom<h5>-->
<!--                        <h6>Google LLC</h6>-->
<!--                        <p>Classroom makes it easy for learners and instructors to connect – inside and outside of schools!</p>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-lg-2 col-md-4 col-sm-6 col-">-->
<!--                    <a href="#">-->
<!--                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/O4XbcESYczPA2zYZ_SpI5nD68IZcPx3dz0fNQO-N1WKLpPq9lQit-AGW4d3V7oDZAhEP=s180-rw">-->
<!--                    </a>-->
<!--                    <a href="#" class="summary">-->
<!--                        <h5>ABCmouse.com</h5>-->
<!--                        <h6>Age of Learning, Inc</h6>-->
<!--                        <p>Math and Reading for Kids 2–8.</p>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-lg-2 col-md-4 col-sm-6 col-">-->
<!--                    <a href="#">-->
<!--                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/hSyebBlYwtE2aMjzSIHasUO9cQv9HgNAw9owy6ADO0szOKYO3rDk60r7jcyXu82Fbq1M=s180-rw">-->
<!--                    </a>-->
<!--                    <a href="#" class="summary">-->
<!--                        <h5>Duolingo: Learn Languages Free</h5>-->
<!--                        <h6>Duolingo</h6>-->
<!--                        <p>Duolingo is the fun, free app for learning 35+ languages through quick, bite-sized lessons.</p>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-lg-2 col-md-4 col-sm-6 col-">-->
<!--                    <a href="#">-->
<!--                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/RZ5luCUwc5QtJP9xDn-ZCwEutT160GVyoh5K1eu4YJ5fD7v4LP5ptVdgR9mz4Hnr7A=s180-rw">-->
<!--                    </a>-->
<!--                    <a href="#" class="summary">-->
<!--                        <h5>Google Go - A fast way to search</h5>-->
<!--                        <h6>Google LLC</h6>-->
<!--                        <p>Google Go is a faster way to search and save up to 40% of your data!</p>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-lg-2 col-md-4 col-sm-6 col-">-->
<!--                    <a href="#">-->
<!--                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/DQpbp_DGd380wvngtYfSfsgBAv-H-tbIJKOotHRpuO47dg5UZRCu7GuB7MOYcMlh_PI=s180-rw">-->
<!--                    </a>-->
<!--                    <a href="#" class="summary">-->
<!--                        <h5>Phone Cleaner</h5>-->
<!--                        <h6>Super Cleaner Studio</h6>-->
<!--                        <p>Cache Clean, Android Booster Master. Make your phone cleaner!</p>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
    <!--Shopping-->
        <hr class="appHr">
        <div class="row">
            <div class="col-lg-9 col-md-7 col-">
                <h3 class="title">SHOPPING</h3>
            </div>
            <div class="col-lg-3 col-md-5 col- d-flex flex-row-reverse">
                <a href="shopping.php" class="detail p-2">See more</a>
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
        <!--PHOTOGRAPHY-->
        <hr class="appHr">
        <div class="row">
            <div class="col-lg-9 col-md-7 col-">
                <h3 class="title">PHOTOGRAPHY</h3>
            </div>
            <div class="col-lg-3 col-md-5 col- d-flex flex-row-reverse">
                <a href="photography.php" class="detail p-2">See more</a>
            </div>
        </div>
        <div class="row mr-auto">
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Details/picsArt.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/RmvBSjkThmix4S-hDIeIOknlmD67ZAah0Kfklo31ZsuMfRxni_B2oi2q01hWA_OsJw=s180-rw">
                </a>
                <a href="Details/picsArt.php" class="summary">
                    <h5>PicsArt Photo Editor</h5>
                    <h6>PicsArt</h6>
                    <p>The best all-in-one photo and video editor on mobile!</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Details/lightroom.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CQk2YGH7nnXQa4nm3_ngHzx4lc04lR2i1a2tSL0WH0pSI98d5ylmATKbfSiO3ILGy88=s180-rw">
                </a>
                <a href="Details/lightroom.php" class="summary">
                    <h5>Adobe Lightroom</h5>
                        <h6>Adobe</h6>
                        <p>A free, powerful photo editor and camera app that empowers your photography!</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Details/googlePhotos.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/ZyWNGIfzUyoajtFcD7NhMksHEZh37f-MkHVGr5Yfefa-IX7yj9SMfI82Z7a2wpdKCA=s180-rw">
                </a>
                <a href="Details/googlePhotos.php" class="summary">
                    <h5>Google Photos</h5>
                    <h6>Google LLC</h6>
                    <p>The home for all your photos and videos, automatically organized and easy to share.</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Details/Snow.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/R8-LD7m5rwQwIdAit3PwUG8QgYoDecAZBSaEuPAjhTpsG6mkqo130b-RKm9RrXBj-kI=s180-rw">
                </a>
                <a href="Details/Snow.php" class="summary">
                    <h5>Snow</h5>
                    <h6>Snow, Inc</h6>
                    <p>SNOW is a camera app used by over 200 million people around the world.</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Details/Snapseed.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Rilq4obCk7XIl2Pjb8XT-Ydh_aI3hBNeFwro9fFXrIAuC-zPxCZ4feE4rx5fZ3jHNLw=s180-rw">
                </a>
                <a href="Details/Snapseed.php" class="summary">
                    <h5>Snapseed</h5>
                    <h6>Google LLC</h6>
                    <p>A complete and professional photo editor developed by Google.</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Details/photoshopMix.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/DTMxdZ6-ITLZOYAmJFD9g_xY11QTLNlb6edmX2ccVhSSvIZ-CqFO4oy4Nfn51j53cNc=s180-rw">
                </a>
                <a href="Details/photoshopMix.php" class="summary">
                    <h5>Adobe Photoshop Mix</h5>
                    <h6>Adobe</h6>
                    <p>Cut out and combine images, change colors and enhance your photos anytime, anywhere!</p>
                </a>
            </div>
        </div>

        <div class="row mr-auto" id="footer">
            <div class="col-sm-12 w-100 d-flex justify-content-center">
                <span>This website was created by 519H0164 and 519H0291</span>
            </div>
        </div>
    </div>
    <!--Footer-->
</body>
</html>