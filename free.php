<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Free Apps</title>
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
            <h3 class="title">TOP FREE APPS</h3>
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
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/AmongUs.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/VHB9bVB8cTcnqwnu0nJqKYbiutRclnbGxTpwnayKB4vMxZj8pk1220Rg-6oQ68DwAkqO=s180-rw">
            </a>
            <a href="Details/AmongUs.php" class="summary">
                <h5>Among Us</h5>
                <h6>Innersloth LLC</h6>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/Snow.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/R8-LD7m5rwQwIdAit3PwUG8QgYoDecAZBSaEuPAjhTpsG6mkqo130b-RKm9RrXBj-kI=s180-rw">
            </a>
            <a href="Details/Snow.php" class="summary">
                <h5>Snow</h5>
                <h6>Snow, Inc</h6>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/genshin.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/So91qs_eRRralMxUzt_tkj4aBXvVSYqWiEJrzrk_LBd5071mSMv_gBKslyulIOrPsiQ=s180-rw">
            </a>
            <a href="Details/genshin.php" class="summary">
                <h5>Genshin Impact</h5>
                <h6>miHoYo Limited</h6>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/Snapseed.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Rilq4obCk7XIl2Pjb8XT-Ydh_aI3hBNeFwro9fFXrIAuC-zPxCZ4feE4rx5fZ3jHNLw=s180-rw">
            </a>
            <a href="Details/Snapseed.php" class="summary">
                <h5>Snapseed</h5>
                <h6>Google LLC</h6>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/Snapseed.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/8cEUhwDnG7TUQiOnMB2c0ZTFtXQ025rorUtNmyBUQOiX5ayUJq2nU-5llM8RBcvLxh8=s180-rw">
            </a>
            <a href="Details/Snapseed.php" class="summary">
                <h5>Dragonscapes</h5>
                <h6>Century Games Pte. Ltd</h6
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
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/wildDarkness.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/cekAj4xsGkKxEzQIUGF0Mur24G27Vjaol-cmMFxKD17tPX5yVzcGpqlu_sc8Zsn11kQ=s180-rw">
            </a>
            <a href="Details/wildDarkness.php" class="summary">
                <h5>The Wild Darkness</h5>
                <h6>PoPeyed Inc</h6>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/minecraft.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/VSwHQjcAttxsLE47RuS4PqpC4LT7lCoSjE7Hx5AW_yCxtDvcnsHHvm5CTuL5BPN-uRTP=s180-rw">
                <a href="Details/minecraft.php" class="summary">
                    <h5>Minecraft</h5>
                    <h6>Mojang</h6>
                </a>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/freeFire.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/NE5J766YoDwc3a76vBcF-DLRHSzrzpAscPv8Uez26HxgEOCPFDzsDKITQ3_oImWCvSg=s180-rw">
            </a>
            <a href="Details/freeFire.php" class="summary">
                <h5>Garena Free Fire</h5>
                <h6>Garena International</h6>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/callOfDuty.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/9Y-xblw8XUBtnjdS5OM2v93_XQ2i0dQtWXzbjnR0XMl3hpTfeZAZL-hllTH5loBjdoo=s180-rw">
            </a>
            <a href="Details/callOfDuty.php" class="summary">
                <h5>Call of Duty®</h5>
                <h6>Activision Publishing, Inc</h6>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/CandyCrush.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/fGj6a1tnCkwON-QdR-Kek4ZMjUzxxO0J1CcUBuafe0o_YycFNu9nnfIcAn49KxD7Vg=s180-rw">
            </a>
            <a href="Details/CandyCrush.php" class="summary">
                <h5>Candy Crush Soda Saga</h5>
                <h6>King</h6>
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
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/marvel.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Ql3xzeRYVEqsOleQEltZSpK2bxo63VUn51iLllfdTk3BqSV7fkkrAbD4v_x0tdvTVSk=s180-rw">
            </a>
            <a href="Details/marvel.php" class="summary">
                <h5>MARVEL Strike Force </h5>
                <h6>Scopely</h6>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/googleGo.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/RZ5luCUwc5QtJP9xDn-ZCwEutT160GVyoh5K1eu4YJ5fD7v4LP5ptVdgR9mz4Hnr7A=s180-rw">
            </a>
            <a href="Details/googleGo.php" class="summary">
                <h5>Google Go - A fast way to search</h5>
                <h6>Google LLC</h6>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/AgeOfZ.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/wivd244D4FPhKLn4MGx3GOLXCXxR7_fu4Vz9FD_n-6CalutI-8PfVB8wLGUiz3NkNX2T=s180-rw">
            </a>
            <a href="Details/AgeOfZ.php" class="summary">
                <h5>Age of Z Origins</h5>
                <h6>Camel Games Limited</h6>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/fantasyXV.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/G5cS8kqZnNdAdZEbxl7WZT1ZUD66fQYb-c-EyMprbTqtY9_ivrhJ53qGxKVhpP4oiw=s180-rw">
            </a>
            <a href="Details/fantasyXV.php" class="summary">
                <h5>Final Fantasy XV</h5>
                <h6>Epic Action LLC</h6>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/holaVPN.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CTqc1bZ8SOOj9IjVWNIvl8K8W7bKiWaU_3oRtnqC_jmZvHVfHkaAR9FM6V0xPtm78xwh=s180-rw">
            </a>
            <a href="Details/holaVPN.php" class="summary">
                <h5>Hola VPN Proxy Plus</h5>
                <h6>Hola VPN Ltd</h6>
            </a>
        </div>
    </div>
</div>





</body>
</html>