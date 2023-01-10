<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rise Of Kingdom</title>
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
        <div class="col-lg-4 detailsImg mb-2">
            <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/OmRFgoSS-iZDwzkMpygYEjbBkpY-_fpE2CEiEgj2KG0yoj2DcP01fbGMutWEf8ip2tiv=s180-rw">
        </div>
        <div class="col-lg-8 col-md-9 col- d-flex justify-content-center">
            <h2 class="title">
                Rise Of Kingdom
                <br>
                <p class="d-flex justify-content-end author">LilithGames &nbsp&nbsp Strategy</p>

            </h2>
        </div>
    </div>
    <div class="row mr-auto mb-3 d-flex justify-content-center">
        <iframe class="embed-responsive-item" width="854" height="480" src="https://www.youtube.com/embed/vK_hgicsn_M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    </div>
    <div class="row mb-3">
        <div class=" col-lg-6 col-md-12  col- d-flex justify-content-center">
            <a >
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/n9DtaP5Fm-red1O5_QcsIgDb7ZvMTlfrbuT6UN_o6NMir-CVhxtzrgPL10hLV6Kw06E=w720-h310-rw">
            </a>
        </div>
        <div class=" col-lg-6 col-md-12 col- d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/ogUmqfETm8Z_WuN_1EZt1fHXORAvfcopu1kLkz5W7q_5MWvWTRObh44yMMydru6jAE8=w720-h310-rw">
            </a>
        </div>

    </div>
    <div class="row mr-auto mb-3">
        <b>11 Civilizations, 34 Heroes, Real Warfare</b>
        <p>From the depths of obscurity to the peaks of legend, you will be the author of your civilization's history. Will you launch epic wars and conquer the entire world? Or rise up as a virtuous leader renowned for your sagacity? Will you set off to explore the unknown as a pioneer? Or dedicate yourself to helping your own people?</p>
        <b>**Features**</b>
        <b>Real-Time Battles</b>
        <p>Battles are not pre-calculated but happen in real time on the map. Anyone can join or leave a battle at any time, allowing true RTS gameplay. See an ally being attacked right in your backyard? Send some troops to help your buddy out, or launch a surprise counterattack on the attacker’s city.</p>
        <b>Seamless World Map</b>
        <p>All in-game action takes place on a single, enormous map inhabited by players and NPC characters. No isolated bases or separate battle screens. Never before seen on mobile “infinite zoom” feature allows you to transition freely between the world view and individual cities or barbarian outposts. Map features include natural obstructions such as rivers and mountain ranges and strategic passes that must be captured to gain entrance to neighboring regions.</p>
        <b>Exploration & Investigation</b>
        <p>The world of Rise of Kingdoms is covered in thick fog. Dispatch scouts to explore this mysterious land and uncover the hidden treasure within. Investigate lost temples, barbarian fortresses, mysterious caves, and tribal villages, gather intelligence on your enemies, and prepare yourself for the ultimate clash!</p>
        <b>Unrestricted Troop Movements</b>
        <p>New orders can be issued to troops at any time, offering limitless strategic possibilities. Launch a feint at an enemy city, then circle back and meet up with your alliance army to capture a pass. Dispatch troops to collect lumber from a nearby forest and have them pick off a few barbarian clans along the way. Forces can also be split up between multiple commanders so that you can engage in multiple actions simultaneously.</p>
        <br>
    </div>
    <div class="row mr-auto mb-3">
        <h3 class="pt-5">Similar Games</h3>
        <div class="row mr-auto">
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="bandicoot.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/D5cIl0bz9miRWcDyBNHk2VnRi9vNfsI7321ZCdK6lYvDjMqcAtfmiTlZGsjDhy4bRUpS=s180-rw">
                </a>
                <a href="bandicoot.php" class="summary">
                    <h5>Bandicoot</h5>
                    <h6>King</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="AmongUs.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/VHB9bVB8cTcnqwnu0nJqKYbiutRclnbGxTpwnayKB4vMxZj8pk1220Rg-6oQ68DwAkqO=s180-rw">
                </a>
                <a href="AmongUs.php" class="summary">
                    <h5>Among Us</h5>
                    <h6>Innersloth LLC</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="snake.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/SCq3fvRfILZKpMpVEbNYj_kRsnAt--KzZqO78JeQnfv7F00adEC72JgPXfnD5fZpblbr=s180-rw">
                </a>
                <a href="snake.php" class="summary">
                    <h5>Snake</h5>
                    <h6>Kooapps Games</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="genshin.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/So91qs_eRRralMxUzt_tkj4aBXvVSYqWiEJrzrk_LBd5071mSMv_gBKslyulIOrPsiQ=s180-rw">
                </a>
                <a href="genshin.php" class="summary">
                    <h5>Genshin Impact</h5>
                    <h6>miHoYo Limited</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="pokemon.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/nK_-VeI5OLlQYOucqEMOjsmAa_xgkxyZw4QKWDI4jk0crWYuZyi4wxhcqrGgc14E7g=s180-rw">
                </a>
                <a href="pokemon.php" class="summary">
                    <h5>Pokémon GO</h5>
                    <h6>Niantic, Inc</h6>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="dragon.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/8cEUhwDnG7TUQiOnMB2c0ZTFtXQ025rorUtNmyBUQOiX5ayUJq2nU-5llM8RBcvLxh8=s180-rw">
                </a>
                <a href="dragon.php" class="summary">
                    <h5>Dragonscapes</h5>
                    <h6>Century Games Pte. Ltd</h6>
                </a>
            </div>
        </div>
        <div class="row mr-auto mb-3">
            <h3 class="pt-5">From the same Developer</h3>
            <div class="row mr-auto">
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="genshin.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/So91qs_eRRralMxUzt_tkj4aBXvVSYqWiEJrzrk_LBd5071mSMv_gBKslyulIOrPsiQ=s180-rw">
                    </a>
                    <a href="genshin.php" class="summary">
                        <h5>Genshin Impact</h5>
                        <h6>miHoYo Limited</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="genshin.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/So91qs_eRRralMxUzt_tkj4aBXvVSYqWiEJrzrk_LBd5071mSMv_gBKslyulIOrPsiQ=s180-rw">
                    </a>
                    <a href="genshin.php" class="summary">
                        <h5>Genshin Impact</h5>
                        <h6>miHoYo Limited</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="genshin.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/So91qs_eRRralMxUzt_tkj4aBXvVSYqWiEJrzrk_LBd5071mSMv_gBKslyulIOrPsiQ=s180-rw">
                    </a>
                    <a href="genshin.php" class="summary">
                        <h5>Genshin Impact</h5>
                        <h6>miHoYo Limited</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="genshin.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/So91qs_eRRralMxUzt_tkj4aBXvVSYqWiEJrzrk_LBd5071mSMv_gBKslyulIOrPsiQ=s180-rw">
                    </a>
                    <a href="genshin.php" class="summary">
                        <h5>Genshin Impact</h5>
                        <h6>miHoYo Limited</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="genshin.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/So91qs_eRRralMxUzt_tkj4aBXvVSYqWiEJrzrk_LBd5071mSMv_gBKslyulIOrPsiQ=s180-rw">
                    </a>
                    <a href="genshin.php" class="summary">
                        <h5>Genshin Impact</h5>
                        <h6>miHoYo Limited</h6>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="genshin.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/So91qs_eRRralMxUzt_tkj4aBXvVSYqWiEJrzrk_LBd5071mSMv_gBKslyulIOrPsiQ=s180-rw">
                    </a>
                    <a href="genshin.php" class="summary">
                        <h5>Genshin Impact</h5>
                        <h6>miHoYo Limited</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>





</body>
</html>