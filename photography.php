<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photography</title>
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
            <h3 class="title">PHOTOGRAPHY</h3>
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

    <hr class="invisible">
    <div class="row">
        <div class="col-lg-9 col-md-7 col-">
            <h3 class="title"></h3>
        </div>
    </div>
    <div class="row mr-auto">
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/zoomFX.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/0joeOBETZnavbKIrFStov6tHvV7LIxFv7LK_YTalZ0d4DDIpUIoKwVM30PkOX1liUQ=s180-rw">
            </a>
            <a href="Details/zoomFX.php" class="summary">
                <h5>Camera ZOOM FX Premium</h5>
                <h6>androidslide</h6>
                <p>There's so much you can do: action shots, stable shot, photo filters, collage, photo composition and more.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/DSLR.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/-2Nc0eqAe8ETmqhNUiEtHf4QyTb9tf2PQAOFEmX2NWUDiB-YjXgu73qc5hpBEFbUugU=s180-rw">
            </a>
            <a href="Details/DSLR.php" class="summary">
                <h5>DSLR Photography Training</h5>
                <h6>Capture Pal</h6>
                <p>Built for beginners and experts!</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/elementOfPhotography.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/1w_uhjWQalK10ZdjxjHPz1tuZYJIO_IqKRN7rjKq_F_wgEknKuB6TvcZ0ygVEDyfQrQ=s180-rw">
            </a>
            <a href="Details/elementOfPhotography.php" class="summary">
                <h5>Elements of Photography</h5>
                <h6>Arkenstone Technologies Pvt. Ltd</h6>
                <p>The most comprehensive app on the marketplace on photography</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/photoEditor.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/fNL2p8frW7OohneKTg-PO6ahEDGrxntbEZhT-s7jONrpSaIaonPmVLfMeSRdwhjDBXE4=s180-rw">
            </a>
            <a href="Details/photoEditor.php" class="summary">
                <h5>Photo Editor Pro</h5>
                <h6>InShot Inc.</h6>
                <p>Offers everything you want to edit pictures.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/illustrator.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/k44SwXULV2C4VTmqwE6F6134gg51UipwrTU4imosHAGIhbZTjCwRuUTh_4eb-tqDPmY=s180-rw">
            </a>
            <a href="Details/illustrator.php" class="summary">
                <h5>Adobe Illustrator Draw</h5>
                <h6>Adobe</h6>
                <p>Winner of the Tabby Award for Creation, Design and Editing and PlayStore Editor’s Choice Award!</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/sweetFace.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/0YJMuAnCZrIplGduiiGvlI0_A6WjpjFRT1ilYLz8f9wj4Vpdq4qxVlPNNZkUE0EilFE=s180-rw">
            </a>
            <a href="Details/sweetFace.php" class="summary">
                <h5>Sweet Face Camera</h5>
                <h6>Sweet Snap Studio</h6>
                <p>Best FREE face App and snap camera on Google Play!</p>
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
            <a href="Details/B612.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/MZQJwhOkgsXWeR-5-dey7Ckras4a9xx2JN8ZfQ_Twz0otjKwUcT6qkPWo8OheOShWeg=s180-rw">
            </a>
            <a href="Details/B612.php" class="summary">
                <h5>B612</h5>
                <h6>SNOW, Inc.</h6>
                <p>Best all-in-one camera & photo/video editing app.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/camera360.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/8zryei6qG6-68aOww4EPtXO7Z0ZZoQ9mieU3FiQTmCnVn9QBtek-4uOabyIJm5E2YITt=s180-rw">
            </a>
            <a href="Details/camera360.php" class="summary">
                <h5>Camera360</h5>
                <h6>PinGuo Inc.</h6>
                <p>Downloaded by over 1 billion people from around the world!</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/youCam.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/hNvGWK4YaxqpqIrgdC1xRYudLFI_0rkPdxRKxYHKUR2uwEFtbofl85sEmpd0JFkzWBw=s180-rw">
            </a>
            <a href="Details/youCam.php" class="summary">
                <h5>YouCam Perfect</h5>
                <h6>Perfect Mobile Corp.</h6>
                <p>Best Photo Editor & Selfie Camera.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/soda.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/tJuaMUqC-JAgH8T_-rdch9JkfgUrX84Z66nQ2TAQYYlV0ymLxM5RAujebfQ7NUNJiUnn=s180-rw">
            </a>
            <a href="Details/soda.php" class="summary">
                <h5>SODA </h5>
                <h6>SNOW, Inc.</h6>
                <p>The selfie camera that everyone's been waiting for.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/faceArt.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/aJXV51ox6eClM1l1saopyU8-DtcjwqkYm9giWIMMS9YnJ-ULk831wS7L_J7p0UqYXhU=s180-rw">
            </a>
            <a href="Details/faceArt.php" class="summary">
                <h5>FaceArt Selfie Camera</h5>
                <h6>Lyrebird Studios</h6>
                <p>Photo Filters and Effects.</p>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-">
            <a href="Details/vsCo.php">
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/VrSAPsppGQ82MFcP-aVIB38ZgT7XOFs9jZC7xGQPaDuCy637Tz4NCn4-NsKyKs_hfZQ=s180-rw">
            </a>
            <a href="Details/vsCo.php" class="summary">
                <h5>VSCO</h5>
                <h6>VSCO</h6>
                <p>We offer creative photo and video editing tools, inspiration, and a place for you to be you.</p>
            </a>
        </div>
    </div>
</div>





</body>
</html>