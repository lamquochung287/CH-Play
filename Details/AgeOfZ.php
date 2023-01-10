<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Age Of Z</title>
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
            <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/wivd244D4FPhKLn4MGx3GOLXCXxR7_fu4Vz9FD_n-6CalutI-8PfVB8wLGUiz3NkNX2T=s180-rw">
        </div>
        <div class="col-lg-8 col-md-9 col- d-flex justify-content-center">
            <h2 class="title">
                Age Of Z
                <br>
                <p class="d-flex justify-content-end author">Camel Games Limited &nbsp&nbsp Strategy</p>

            </h2>
        </div>
    </div>
    <div class="row mr-auto mb-3 d-flex justify-content-center">
        <iframe class="embed-responsive-item" width="854" height="480" src="https://www.youtube.com/embed/IeGhx8ImE2g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="row mb-3">
        <div class=" col-md-12 mb-2  col- d-flex justify-content-center">
            <a >
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/AEw9gxC_a6ssf5BfbCPxnHPfWoNnbzkn7LxLgykdr8twQ8mTnO7eVePqgk6zugNydXg=w720-h310-rw">
            </a>
        </div>
        <div class=" col-md-12 col- d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Tc2czEf285xMhQUBJ0NyleNSiPyM0eal_LxhwxAv6Y6MOzJyc_yuuuAvLEGH3Pu30Bkw=w720-h310-rw">
            </a>
        </div>

    </div>
    <div class="row mr-auto mb-3">
        <b>Kill zombies, form alliances, and lead human civilization back from the brink of doom in this zombie strategy MMO!</b>
        <p>The zombie apocalypse threw humanity into the dark ages. Now, YOU are the light in the darkness. SURVIVE by raising massive armies of machines, explosives, and gritty human soldiers. REVIVE civilization by slaying the zombie hoards, rebuilding your city, rescuing refugees, and bringing new global prosperity. THRIVE by forming alliances with other commanders from around the world, crushing your rivals, and seizing the Capital so YOU may lead the new age of humanity!</p>
        <b class="w-100">SURVIVE</b>
        <p>- Recruit, innovate, and slay! Build massive armies of human grunts, killer machine guns, and high-tech laser cannons. <br>
            - Heroes win the day! Recruit unique characters to lead your army, including a sexy international spy, a mad scientist, an honorable sheriff, and more! <br>
            - Fight the many faces of death! Mutant Zombies, Zombie Bears, Death Mothers and other gruesome dead creatures await your challenge. <br>
            - REAL TOPOGRAPHY! You must march and expand strategically up, down, and around a REAL 3D map of lakes and mountains! The right route is the difference between life and death!
        </p>
        <b class="w-100">REVIVE</b>
        <p>- Clear the zombies hoards! Reclaim your city block by block, rebuilding hospitals, housing, and farmlands alongside tech and and weapon centers! <br>
            - Scavenge for loot and rescue Refugees to increase Prosperity and keep your city growing! <br>
            - Watch the World Map change before your very eyes! You’ll unlock new Prosperity Phases for a more developed world, bigger bonuses, and new gameplay!</p>


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