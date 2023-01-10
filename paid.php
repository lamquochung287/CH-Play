<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paid Apps</title>
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
            <h3 class="title">TOP PAID APPS</h3>
        </div>
    </div>
    <div class="row mr-auto">
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/outlook.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Zk9elS0eGXDr0L4W6-Ey7YwHbRNjkyezHC8iCc8rWp64lNIjlByS8TDF9qDSZbiEWY4=s180-rw">
            </a>
            <a href="Details/outlook.php" class="summary">
                <h5>Microsoft Outlook</h5>
                <h6>Microsoft Corporation</h6>
                <p>$2</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/holaVPN.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CTqc1bZ8SOOj9IjVWNIvl8K8W7bKiWaU_3oRtnqC_jmZvHVfHkaAR9FM6V0xPtm78xwh=s180-rw">
            </a>
            <a href="Details/holaVPN.php" class="summary">
                <h5>Hola VPN Proxy Plus</h5>
                <h6>Hola VPN Ltd</h6>
                <p>$1.5</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/nordVPN.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/X8hJVUEzH6Q5N0g5npd0gz4rYPmvSek1ScQL8cmnIa8bLtXeAcRQJbLaoBAL-4YXIQ=s180-rw">
            </a>
            <a href="Details/nordVPN.php" class="summary">
                <h5>NordVPN</h5>
                <h6>Nord Security</h6>
                <p>$1.8</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/rar.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/K4ZQnK2FafXDnaAu5TPWWEDVR-ZhR9AiriJ-nUuMUy-9LHafa8VwJhY_UJLRPJzGbmKh=s180-rw">
            </a>
            <a href="Details/rar.php" class="summary">
                <h5>RAR</h5>
                <h6>RARLAB</h6>
                <p>$0.95</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/office.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/D6XDCje7pB0nNP1sOZkwD-tXkV0_As3ni21us5yZ71_sy0FTWv1s_MQBe1JUnHlgE94=s180-rw">
            </a>
            <a href="Details/office.php" class="summary">
                <h5>Microsoft Office</h5>
                <h6>Microsoft Corporation</h6>
                <p>$8</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/MafiaCity.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/S3iMlApnxAcakc8TUwK21Q-TiQPt0ug_xnGLAEayan6uVICyGVtPDURMRS8GczqJOg=s180-rw">
            </a>
            <a href="Details/MafiaCity.php" class="summary">
                <h5>Mafia City</h5>
                <h6>YottaGame</h6>
                <p>$2.5</p>
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
            <a href="Details/dots.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/otyseWqG-5T4w16JQWtE54xdjrpVDt5pLTr_P8k1TUkMt-MxD9-e4ojQ5vzjYlxnbQ=s180-rw">
            </a>
            <a href="Details/dots.php" class="summary">
                <h5>Dots & Co</h5>
                <h6>PlayDots</h6>
                <p>$5</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/wildDarkness.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/cekAj4xsGkKxEzQIUGF0Mur24G27Vjaol-cmMFxKD17tPX5yVzcGpqlu_sc8Zsn11kQ=s180-rw">
            </a>
            <a href="Details/wildDarkness.php" class="summary">
                <h5>The Wild Darkness</h5>
                <h6>PoPeyed Inc</h6>
                <p>$3.5</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/minecraft.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/VSwHQjcAttxsLE47RuS4PqpC4LT7lCoSjE7Hx5AW_yCxtDvcnsHHvm5CTuL5BPN-uRTP=s180-rw">
                <a href="Details/minecraft.php" class="summary">
                    <h5>Minecraft</h5>
                    <h6>Mojang</h6>
                    <p>$5.4</p>
                </a>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/word.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/9kABykeGovHPy-dN19lRxxnCp8IZK3Pkl8qLFNxrEe-hhKVZeiyhTBEIRUt6t-vhxQ=s180-rw">
            </a>
            <a href="Details/word.php" class="summary">
                <h5>Microsoft Word</h5>
                <h6>Microsoft Corporation</h6>
                <p>$3</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/callOfDuty.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/9Y-xblw8XUBtnjdS5OM2v93_XQ2i0dQtWXzbjnR0XMl3hpTfeZAZL-hllTH5loBjdoo=s180-rw">
            </a>
            <a href="Details/callOfDuty.php" class="summary">
                <h5>Call of Duty®</h5>
                <h6>Activision Publishing, Inc</h6>
                <p>$4</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/faceArt.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/aJXV51ox6eClM1l1saopyU8-DtcjwqkYm9giWIMMS9YnJ-ULk831wS7L_J7p0UqYXhU=s180-rw">
            </a>
            <a href="Details/faceArt.php" class="summary">
                <h5>FaceArt Selfie Camera</h5>
                <h6>Lyrebird Studios</h6>
                <p>$1.5</p>
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
            <a href="Details/riseKingdom.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/OmRFgoSS-iZDwzkMpygYEjbBkpY-_fpE2CEiEgj2KG0yoj2DcP01fbGMutWEf8ip2tiv=s180-rw">
            </a>
            <a href="Details/riseKingdom.php" class="summary">
                <h5>Rise of Kingdoms</h5>
                <h6>LilithGames</h6>
                <p>$0.5</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/marvel.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Ql3xzeRYVEqsOleQEltZSpK2bxo63VUn51iLllfdTk3BqSV7fkkrAbD4v_x0tdvTVSk=s180-rw">
            </a>
            <a href="Details/marvel.php" class="summary">
                <h5>MARVEL Strike Force </h5>
                <h6>Scopely</h6>
                <p>$1.2</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/vsCo.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/VrSAPsppGQ82MFcP-aVIB38ZgT7XOFs9jZC7xGQPaDuCy637Tz4NCn4-NsKyKs_hfZQ=s180-rw">
            </a>
            <a href="Details/vsCo.php" class="summary">
                <h5>VSCO</h5>
                <h6>VSCO</h6>
                <p>$2.5</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/AgeOfZ.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/wivd244D4FPhKLn4MGx3GOLXCXxR7_fu4Vz9FD_n-6CalutI-8PfVB8wLGUiz3NkNX2T=s180-rw">
            </a>
            <a href="Details/AgeOfZ.php" class="summary">
                <h5>Age of Z Origins</h5>
                <h6>Camel Games Limited</h6>
                <p>$0.7</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/fantasyXV.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/G5cS8kqZnNdAdZEbxl7WZT1ZUD66fQYb-c-EyMprbTqtY9_ivrhJ53qGxKVhpP4oiw=s180-rw">
            </a>
            <a href="Details/fantasyXV.php" class="summary">
                <h5>Final Fantasy XV</h5>
                <h6>Epic Action LLC</h6>
                <p>$1.2</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/zArchiver.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/D1POO3HtYVgSW65yv3JLMrr8F7L9RcYUfEw_ug3BhMhMgN0b2fZ414cYkmSwVRr737aY=s180-rw">
            </a>
            <a href="Details/zArchiver.php" class="summary">
                <h5>ZArchiver</h5>
                <h6>ZDevs</h6>
                <p>$0.95</p>
            </a>
        </div>
    </div>
</div>





</body>
</html>