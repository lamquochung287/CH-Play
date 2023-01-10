<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Google Assistant</title>
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
<div class="container" id="appContent">
    <div class="row mr-0">
        <div class="col-lg-4 detailsImg mb-2 mr-0">
            <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/ORzWxi-sIo_hCgSa6uzVvBUE4osKUqRVzHnniUUxA2WXD7BnZ95BNVpWFLUTKRyJRdU=s180-rw">
        </div>
        <div class="col-lg-8 col-md-9 col- d-flex justify-content-center">
            <h2 class="title">
                Google Assistant
                <br>
                <p class="d-flex justify-content-end author">Google LLC &nbsp&nbsp Productivity</p>

            </h2>
        </div>
    </div>
    <div class="row mr-auto mb-3 d-flex justify-content-center">
    </div>
    <div class="row mb-5">
        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
            <a >
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/8pTJB_pDn8utHuwTe6dAIzY6yJeEH-bgcg_wJqlwo2n7hkrAFVfx9zvIBR3sC03HSR2n=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/g5mcDYsLo-Ajm-xzBSWR7998a7Uov8tJleWgxu17P9MGvmkMDKxld6w3TOCqRE2GO-I=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/b4MiRuGtxpavlflCmhjcRudWOy4CkZXblzXYBXnEwVSEojN2eoZdqE2M8Ldgv1ZfmRc=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/aMaaoZCrAo-rdSRqmncfyNaYeXpeiaxqWpaMrbNXfbAtHNeTFSVymqTlEWbXvyk2c-E=w720-h310-rw">
            </a>
        </div>
    </div>
    <div class="row mr-auto mb-3">
        <b class="w-100">Get the Google Assistant for hands-free help</b>
        <p>Your Google Assistant is ready to help when and where you need it. Manage your schedule , get help with everyday tasks, control smart home devices, enjoy your entertainment, and much more.

            <Br><b>Just start with: "Hey Google"</b></p>
        <p> <b>Play music and videos with your voice</b> <br>

            Find music based on a genre, play your favorite songs, playlists, podcasts, and music videos, or find the perfect tunes for activities like cooking, studying, or working out. You can also skip songs and adjust the volume.<br>

            "Play workout music" <br>
            "Play my Discover Weekly on Spotify" <br>
            "Set volume to 5" <br>
        </p>
        <p>
            <b>Stay in touch with hands-free calls, texts, and emails</b> <br>

            Your Assistant makes it fast and easy to stay connected to those who matter most. Make calls, send text messages, and draft emails to your contacts. <br>

            "Read my unread texts" <br>
            "Call Carly" <br>
            "Text Sam 'On my way'" <br>

            <b>Get quick directions and local info</b> <br>

            Quickly find answers about businesses, restaurants, and attractions, including business hours, traffic info, and Google Maps directions. You can also book a ride with your favorite rideshare company, or find parking lots near your destination. <br>

            "How's the traffic to work?" <br>
            "Where's the nearest coffee shop?" <br>
            "Give me directions to the airport" <br>

            <b>Get convenient help throughout the day </b>

            Stay on top of your schedule and manage your calendar so you don't forget important appointments and meetings. Set reminders and get alerts so you can check off your daily to-dos. Your Assistant makes it easy to take notes, set timers, add items to your shopping list, and set alarms. <br>

            "Remind me to drink water every morning" <br>
            "Add eggs and bread to my shopping list" <br>
            "Set an alarm for 7 AM" <br>
        </p>
    </div>
    <div class="row mr-auto mb-3">
        <h3 class="pt-5">Similar Tools</h3>
        <div class="row mr-auto">
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="moveiOS.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/TVVIZnPw3rAi9o1DfCRH97UbbSRGqLo7fFKoDIYhQZ2j1B2T-fOQkDuLlCqki-gYKg=s180-rw">
                </a>
                <a href="moveiOS.php" class="summary">
                    <h5>Move to iOS</h5>
                    <h6>Apple Inc</h6>
                    <p>No need to save your stuff elsewhere before switching from Android!</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="holaVPN.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CTqc1bZ8SOOj9IjVWNIvl8K8W7bKiWaU_3oRtnqC_jmZvHVfHkaAR9FM6V0xPtm78xwh=s180-rw">
                </a>
                <a href="holaVPN.php" class="summary">
                    <h5>Hola VPN Proxy Plus</h5>
                    <h6>Hola VPN Ltd</h6>
                    <p>Unblock websites, apps and content. Secure and private browsing!</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="nordVPN.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/X8hJVUEzH6Q5N0g5npd0gz4rYPmvSek1ScQL8cmnIa8bLtXeAcRQJbLaoBAL-4YXIQ=s180-rw">
                </a>
                <a href="nordVPN.php" class="summary">
                    <h5>NordVPN</h5>
                    <h6>Nord Security</h6>
                    <p>Best VPN Fast, Secure & Unlimited</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="rar.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/K4ZQnK2FafXDnaAu5TPWWEDVR-ZhR9AiriJ-nUuMUy-9LHafa8VwJhY_UJLRPJzGbmKh=s180-rw">
                </a>
                <a href="rar.php" class="summary">
                    <h5>RAR</h5>
                    <h6>RARLAB</h6>
                    <p>An all-in-one, original, free, simple, easy and quick compression program, archiver...</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="googleGo.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/RZ5luCUwc5QtJP9xDn-ZCwEutT160GVyoh5K1eu4YJ5fD7v4LP5ptVdgR9mz4Hnr7A=s180-rw">
                </a>
                <a href="googleGo.php" class="summary">
                    <h5>Google Go - A fast way to search</h5>
                    <h6>Google LLC</h6>
                    <p>Google Go is a faster way to search and save up to 40% of your data!</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="phoneCleaner.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/DQpbp_DGd380wvngtYfSfsgBAv-H-tbIJKOotHRpuO47dg5UZRCu7GuB7MOYcMlh_PI=s180-rw">
                </a>
                <a href="phoneCleaner.php" class="summary">
                    <h5>Phone Cleaner</h5>
                    <h6>Super Cleaner Studio</h6>
                    <p>Cache Clean, Android Booster Master. Make your phone cleaner!</p>
                </a>
            </div>
        </div>
        <div class="row mr-auto mb-3">
            <h3 class="pt-5">From the same Developer</h3>
            <div class="row mr-auto">
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="holaVPN.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CTqc1bZ8SOOj9IjVWNIvl8K8W7bKiWaU_3oRtnqC_jmZvHVfHkaAR9FM6V0xPtm78xwh=s180-rw">
                    </a>
                    <a href="holaVPN.php" class="summary">
                        <h5>Hola VPN Proxy Plus</h5>
                        <h6>Hola VPN Ltd</h6>
                        <p>Unblock websites, apps and content. Secure and private browsing!</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="holaVPN.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CTqc1bZ8SOOj9IjVWNIvl8K8W7bKiWaU_3oRtnqC_jmZvHVfHkaAR9FM6V0xPtm78xwh=s180-rw">
                    </a>
                    <a href="holaVPN.php" class="summary">
                        <h5>Hola VPN Proxy Plus</h5>
                        <h6>Hola VPN Ltd</h6>
                        <p>Unblock websites, apps and content. Secure and private browsing!</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="holaVPN.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CTqc1bZ8SOOj9IjVWNIvl8K8W7bKiWaU_3oRtnqC_jmZvHVfHkaAR9FM6V0xPtm78xwh=s180-rw">
                    </a>
                    <a href="holaVPN.php" class="summary">
                        <h5>Hola VPN Proxy Plus</h5>
                        <h6>Hola VPN Ltd</h6>
                        <p>Unblock websites, apps and content. Secure and private browsing!</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="holaVPN.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CTqc1bZ8SOOj9IjVWNIvl8K8W7bKiWaU_3oRtnqC_jmZvHVfHkaAR9FM6V0xPtm78xwh=s180-rw">
                    </a>
                    <a href="holaVPN.php" class="summary">
                        <h5>Hola VPN Proxy Plus</h5>
                        <h6>Hola VPN Ltd</h6>
                        <p>Unblock websites, apps and content. Secure and private browsing!</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="holaVPN.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CTqc1bZ8SOOj9IjVWNIvl8K8W7bKiWaU_3oRtnqC_jmZvHVfHkaAR9FM6V0xPtm78xwh=s180-rw">
                    </a>
                    <a href="holaVPN.php" class="summary">
                        <h5>Hola VPN Proxy Plus</h5>
                        <h6>Hola VPN Ltd</h6>
                        <p>Unblock websites, apps and content. Secure and private browsing!</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="holaVPN.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CTqc1bZ8SOOj9IjVWNIvl8K8W7bKiWaU_3oRtnqC_jmZvHVfHkaAR9FM6V0xPtm78xwh=s180-rw">
                    </a>
                    <a href="holaVPN.php" class="summary">
                        <h5>Hola VPN Proxy Plus</h5>
                        <h6>Hola VPN Ltd</h6>
                        <p>Unblock websites, apps and content. Secure and private browsing!</p>
                    </a>
                </div>
            </div>
        </div>


    </div>
</div>





</body>
</html>