<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elements of Photography</title>
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
            <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/1w_uhjWQalK10ZdjxjHPz1tuZYJIO_IqKRN7rjKq_F_wgEknKuB6TvcZ0ygVEDyfQrQ=s180-rw">
        </div>
        <div class="col-lg-8 col-md-9 col- d-flex justify-content-center">
            <h2 class="title">
                Elements of Photography
                <br>
                <p class="d-flex justify-content-end author">Arkenstone Technologies  &nbsp&nbsp Photography</p>

            </h2>
        </div>
    </div>
    <div class="row mr-auto mb-3 d-flex justify-content-center">
        <iframe class="embed-responsive-item" width="854" height="480" src="https://www.youtube.com/embed/lsIzXZSVbZE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="row mb-5">
        <div class="col-lg-6 mb-2 col-md-12 d-flex justify-content-center">
            <a >
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/kipwqeZ34SflAnmTYegs2OjXMhpZSTj9316p5MqJ_Np49r8TWnJW5oZmCzXUjlTYAQ=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-6 mb-2 col-md-12 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/wzhyofcxBVD8iddeZ83iGkoSbMHIDB1VksqcJY5zx2-Mf7xqSJfaHM6K0eggrZ_O_fs=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-6 col-md-12 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/l8qhWAV4Hrtx4qrlX4t5tGOOc_oxl2n9OxY0C1fG-DOImTRZ4NLEtMr294bcBOsxjMk=w720-h310-rw">
            </a>
        </div>
        <div class="col-lg-6 col-md-12 d-flex justify-content-center">
            <a>
                <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/1Vz4F8tol4cX0Iijxn9vHmEufAKEiPmffVy9W2bKu92R26cAr_raSa5VD-yRo69JC55z=w720-h310-rw">
            </a>
        </div>


    </div>
    <div class="row mr-auto mb-3">
        <p>Elements of Photography (EoP) is the most comprehensive app on the marketplace on photography. Instead of boggling down with huge amount of text or long boring videos, EoP uses targeted small chunks of text backed by beautiful full screen HD photos.
        </p>
        <p>EoP includes chapters, tools, quiz and tips – designed in a way to help amateur and budding photographers understand the elements of photography and not let the camera become a technological barrier between the cameraman and the subject. The tools and tips are always close at hand for reference. The quiz section is included to check your understanding of the photography concepts. Chapters are organized with a smooth inclination making it easy for the absolute beginner to understand the basics of photography. Starting from the very basic topics like focal length, shutter speed etc. to more advanced topics like metering, exposure triangle and flash photography. EoP is the complete reference available right at your fingertip.</p>
        <b>NOTE: APP IS NATIVELY AVAILABLE IN ENGLISH. ALL TRANSLATION BY GOOGLE TRANSLATE - PLS DON'T EXPECT HIGH QUALITY TRANSLATIONS.</b>
        <br>
    </div>
    <div class="row mr-auto mb-3">
        <h3 class="pt-5">Similar Tools</h3>
        <div class="row mr-auto">
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="picsArt.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/RmvBSjkThmix4S-hDIeIOknlmD67ZAah0Kfklo31ZsuMfRxni_B2oi2q01hWA_OsJw=s180-rw">
                </a>
                <a href="picsArt.php" class="summary">
                    <h5>PicsArt Photo Editor</h5>
                    <h6>PicsArt</h6>
                    <p>The best all-in-one photo and video editor on mobile!</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="lightroom.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/CQk2YGH7nnXQa4nm3_ngHzx4lc04lR2i1a2tSL0WH0pSI98d5ylmATKbfSiO3ILGy88=s180-rw">
                </a>
                <a href="lightroom.php" class="summary">
                    <h5>Adobe Lightroom</h5>
                    <h6>Adobe</h6>
                    <p>A free, powerful photo editor and camera app that empowers your photography!</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="googlePhotos.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/ZyWNGIfzUyoajtFcD7NhMksHEZh37f-MkHVGr5Yfefa-IX7yj9SMfI82Z7a2wpdKCA=s180-rw">
                </a>
                <a href="googlePhotos.php" class="summary">
                    <h5>Google Photos</h5>
                    <h6>Google LLC</h6>
                    <p>The home for all your photos and videos, automatically organized and easy to share.</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Snow.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/R8-LD7m5rwQwIdAit3PwUG8QgYoDecAZBSaEuPAjhTpsG6mkqo130b-RKm9RrXBj-kI=s180-rw">
                </a>
                <a href="Snow.php" class="summary">
                    <h5>Snow</h5>
                    <h6>Snow, Inc</h6>
                    <p>SNOW is a camera app used by over 200 million people around the world.</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="Snapseed.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Rilq4obCk7XIl2Pjb8XT-Ydh_aI3hBNeFwro9fFXrIAuC-zPxCZ4feE4rx5fZ3jHNLw=s180-rw">
                </a>
                <a href="Snapseed.php" class="summary">
                    <h5>Snapseed</h5>
                    <h6>Google LLC</h6>
                    <p>A complete and professional photo editor developed by Google.</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-">
                <a href="photoshopMix.php">
                    <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/DTMxdZ6-ITLZOYAmJFD9g_xY11QTLNlb6edmX2ccVhSSvIZ-CqFO4oy4Nfn51j53cNc=s180-rw">
                </a>
                <a href="photoshopMix.php" class="summary">
                    <h5>Adobe Photoshop Mix</h5>
                    <h6>Adobe</h6>
                    <p>Cut out and combine images, change colors and enhance your photos anytime, anywhere!</p>
                </a>
            </div>
        </div>
        <div class="row mr-auto mb-3">
            <h3 class="pt-5">From the same Developer</h3>
            <div class="row mr-auto">
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="Snapseed.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Rilq4obCk7XIl2Pjb8XT-Ydh_aI3hBNeFwro9fFXrIAuC-zPxCZ4feE4rx5fZ3jHNLw=s180-rw">
                    </a>
                    <a href="Snapseed.php" class="summary">
                        <h5>Snapseed</h5>
                        <h6>Google LLC</h6>
                        <p>A complete and professional photo editor developed by Google.</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="Snapseed.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Rilq4obCk7XIl2Pjb8XT-Ydh_aI3hBNeFwro9fFXrIAuC-zPxCZ4feE4rx5fZ3jHNLw=s180-rw">
                    </a>
                    <a href="Snapseed.php" class="summary">
                        <h5>Snapseed</h5>
                        <h6>Google LLC</h6>
                        <p>A complete and professional photo editor developed by Google.</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="Snapseed.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Rilq4obCk7XIl2Pjb8XT-Ydh_aI3hBNeFwro9fFXrIAuC-zPxCZ4feE4rx5fZ3jHNLw=s180-rw">
                    </a>
                    <a href="Snapseed.php" class="summary">
                        <h5>Snapseed</h5>
                        <h6>Google LLC</h6>
                        <p>A complete and professional photo editor developed by Google.</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="Snapseed.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Rilq4obCk7XIl2Pjb8XT-Ydh_aI3hBNeFwro9fFXrIAuC-zPxCZ4feE4rx5fZ3jHNLw=s180-rw">
                    </a>
                    <a href="Snapseed.php" class="summary">
                        <h5>Snapseed</h5>
                        <h6>Google LLC</h6>
                        <p>A complete and professional photo editor developed by Google.</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="Snapseed.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Rilq4obCk7XIl2Pjb8XT-Ydh_aI3hBNeFwro9fFXrIAuC-zPxCZ4feE4rx5fZ3jHNLw=s180-rw">
                    </a>
                    <a href="Snapseed.php" class="summary">
                        <h5>Snapseed</h5>
                        <h6>Google LLC</h6>
                        <p>A complete and professional photo editor developed by Google.</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-">
                    <a href="Snapseed.php">
                        <img class="image-responsive appImg" src="https://play-lh.googleusercontent.com/Rilq4obCk7XIl2Pjb8XT-Ydh_aI3hBNeFwro9fFXrIAuC-zPxCZ4feE4rx5fZ3jHNLw=s180-rw">
                    </a>
                    <a href="Snapseed.php" class="summary">
                        <h5>Snapseed</h5>
                        <h6>Google LLC</h6>
                        <p>A complete and professional photo editor developed by Google.</p>
                    </a>
                </div>
            </div>
        </div>


    </div>
</div>





</body>
</html>