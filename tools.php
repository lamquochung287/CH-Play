<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TOOLS</title>
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
            <h3 class="title">TOOLS</h3>
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

    <hr class="invisible">
    <div class="row">
        <div class="col-lg-9 col-md-7 col-">
            <h3 class="title"></h3>
        </div>
    </div>
    <div class="row mr-auto">
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/tomato.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/x-OkTFcwsmEAaEr_r3MPowfmUL4BBVNgbVRT_5iUaJPwhOeKxurvJBex6U_hVoHwUQ=s180-rw">
            </a>
            <a href="Details/tomato.php" class="summary">
                <h5>Free VPN Tomato</h5>
                <h6>IronMeta Studio</h6>
                <p>Fastest Free Hotspot VPN Proxy</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/word.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/9kABykeGovHPy-dN19lRxxnCp8IZK3Pkl8qLFNxrEe-hhKVZeiyhTBEIRUt6t-vhxQ=s180-rw">
            </a>
            <a href="Details/word.php" class="summary">
                <h5>Microsoft Word</h5>
                <h6>Microsoft Corporation</h6>
                <p>Edit your blog posts, write essays for class, share your resume.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/outlook.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Zk9elS0eGXDr0L4W6-Ey7YwHbRNjkyezHC8iCc8rWp64lNIjlByS8TDF9qDSZbiEWY4=s180-rw">
            </a>
                <a href="Details/outlook.php" class="summary">
                    <h5>Microsoft Outlook</h5>
                    <h6>Microsoft Corporation</h6>
                    <p>Secure email, calendars & files</p>
                </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/office.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/D6XDCje7pB0nNP1sOZkwD-tXkV0_As3ni21us5yZ71_sy0FTWv1s_MQBe1JUnHlgE94=s180-rw">
            </a>
            <a href="Details/office.php" class="summary">
                <h5>Microsoft Office</h5>
                <h6>Microsoft Corporation</h6>
                <p>Word, Excel, PowerPoint & More</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/yahoo.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/YtGn2T9ADy5Hs4cKVoDgGb7fPuMkdXVcszVE1oiozfE4AxhDNq0RkwajYs1FxcrMDpw=s180-rw">
            </a>
            <a href="Details/yahoo.php" class="summary">
                <h5>Yahoo Mail</h5>
                <h6>Yahoo</h6>
                <p>The best email app to organize your Gmail, Microsoft Outlook, AOL, AT&T and Yahoo mailboxes.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/linkedln.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/fqYJHtyzZzA4vacRzeJoB93QNvA5-mvR-8UB5oVLxdYDSTpfLp_KgYD4IqVGJUgFEJo=s180-rw">
            </a>
            <a href="Details/linkedln.php" class="summary">
                <h5>LinkedIn</h5>
                <h6>LinkedIn</h6>
                <p>Jobs, Business News & Social Networking</p>
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
            <a href="Details/fileManager.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CsKUzyo8C47ZO10jX6tTvDRoGlqVTxWU8pwnBMbs6DMkjuDbDO78a_OYPj77tVxbI5Q=s180-rw">
            </a>
            <a href="Details/fileManager.php" class="summary">
                <h5>File Manager</h5>
                <h6>Xiaomi Inc</h6>
                <p>Free, secure tool that helps you find file faster, manage files easily.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/miRemote.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Y719M-rvwhlxBAQ-1I9ESsN0aWbAZCc1oC1vZW1PCJlM4yZCwstzc2o90NSYS41qu_w=s180-rw">
            </a>
            <a href="Details/miRemote.php" class="summary">
                <h5>Mi Remote controller</h5>
                <h6>Xiaomi Inc</h6>
                <p>Control your electric appliances with your phone using Mi Remote.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/asmartRemote.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/c4ZVxAwrzSLOw9rutusvaL74A5YEcnp6AxcIgDsFW92AV4FRCOAPJWt73FPf5Sv7Igk=s180-rw">
            </a>
            <a href="Details/asmartRemote.php" class="summary">
                <h5>ASmart Remote IR</h5>
                <h6>NXRsoft</h6>
                <p>A Smart IR Universal Remote Control for Android.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/zArchiver.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/D1POO3HtYVgSW65yv3JLMrr8F7L9RcYUfEw_ug3BhMhMgN0b2fZ414cYkmSwVRr737aY=s180-rw">
            </a>
            <a href="Details/zArchiver.php" class="summary">
                <h5>ZArchiver</h5>
                <h6>ZDevs</h6>
                <p>A program for archive management.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/googleAssistant.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/ORzWxi-sIo_hCgSa6uzVvBUE4osKUqRVzHnniUUxA2WXD7BnZ95BNVpWFLUTKRyJRdU=s180-rw">
            </a>
            <a href="Details/googleAssistant.php" class="summary">
                <h5>Google Assistant</h5>
                <h6>Google LLC</h6>
                <p>Your Google Assistant is ready to help when and where you need it</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/assistTouch.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CvrAspBClfv1bbHdxw0gj5XBHenMECqVpT-0sdIX7aqnGj6CxqDKwHNLKPIzToRj7g=s180-rw">
            </a>
            <a href="Details/assistTouch.php" class="summary">
                <h5>Assistive Touch</h5>
                <h6>Assistive Touch Team</h6>
                <p>Easy touch to lock screen and open recent task!</p>
            </a>
        </div>
    </div>
</div>





</body>
</html>