<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Genshin Impact</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
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
            <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/So91qs_eRRralMxUzt_tkj4aBXvVSYqWiEJrzrk_LBd5071mSMv_gBKslyulIOrPsiQ=s180-rw">
        </div>
        <div class="col-lg-8 col-md-9 col- d-flex justify-content-center">
            <h2 class="title">
                Genshin Impact
                <br>
                <p class="d-flex justify-content-end author">miHoYo Limited &nbsp&nbsp Adventure</p>

            </h2>
        </div>
    </div>
    <div class="row mr-auto mb-3 d-flex justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-4 col-">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="854" height="480" src="https://www.youtube.com/embed/7uWA8cbzVng" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6 col-md-12 d-flex justify-content-center">
            <a >
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/R7fg_CqoWBjlrbmTaQfWXlR4gBY_je_-g5Aj5h-aTEKY-01anVF_axXmyV7gLKOmEg=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-6 col-md-12 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/0WVcYvgX3yuIcEbe-uguQ1lT4uOvdfrGp4rbcn7GGBUBuhGvgoZ8dlpQlyQqAeAJ_So=w720-h310-rw">
            </a>
        </div>

    </div>
    <div class="row mr-auto mb-3">
        <b><p>Step into Teyvat, a vast world teeming with life and flowing with elemental energy.</p></b>
        <p>You and your sibling arrived here from another world. Separated by an unknown god, stripped of your powers, and cast into a deep slumber, you now awake to a world very different from when you first arrived.</p>
        <p>Thus begins your journey across Teyvat to seek answers from The Seven — the gods of each element. Along the way, prepare to explore every inch of this wondrous world, join forces with a diverse range of characters, and unravel the countless mysteries that Teyvat holds...</p>
        <b><p>MASSIVE OPEN WORLD</p></b>
        <p>Climb any mountain, swim across any river, and glide over the world below, taking in the jaw-dropping scenery each step of the way. And if you stop to investigate a wandering Seelie or strange mechanism, who knows what you might discover?</p>
        <b><p>ELEMENTAL COMBAT SYSTEM</p></b>
        <p>Harness the seven elements to unleash elemental reactions. Anemo, Electro, Hydro, Pyro, Cryo, Dendro, and Geo interact in all sorts of ways, and Vision wielders have the power to turn this to their advantage.</p>
        <b><p>BEAUTIFUL VISUALS</p></b>
        <p>Feast your eyes on the world around you, with a stunning art style, real-time rendering, and finely tuned character animations delivering you a truly immersive visual experience. Lighting and weather all change naturally over time, bringing every detail of this world to life.</p>
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
                    <a href="snake.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/SCq3fvRfILZKpMpVEbNYj_kRsnAt--KzZqO78JeQnfv7F00adEC72JgPXfnD5fZpblbr=s180-rw">
                    </a>
                    <a href="snake.php" class="summary">
                        <h5>Snake</h5>
                        <h6>Kooapps Games</h6>
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
                    <a href="snake.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/SCq3fvRfILZKpMpVEbNYj_kRsnAt--KzZqO78JeQnfv7F00adEC72JgPXfnD5fZpblbr=s180-rw">
                    </a>
                    <a href="snake.php" class="summary">
                        <h5>Snake</h5>
                        <h6>Kooapps Games</h6>
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
                    <a href="snake.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/SCq3fvRfILZKpMpVEbNYj_kRsnAt--KzZqO78JeQnfv7F00adEC72JgPXfnD5fZpblbr=s180-rw">
                    </a>
                    <a href="snake.php" class="summary">
                        <h5>Snake</h5>
                        <h6>Kooapps Games</h6>
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
            </div>
        </div>
    </div>
</div>





</body>
</html>