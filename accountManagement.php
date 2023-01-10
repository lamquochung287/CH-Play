<?php
    session_start();
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'account_db';
    $connection = mysqli_connect($host,$user,$pass, $dbname);

    $username = $_SESSION['username'];
    $sql = mysqli_query($connection,"SELECT * from profile WHERE username = '$username'"); #get data from database
    $output = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Management</title>
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
                                if(isset($_SESSION['isLogin']) === TRUE && $_SESSION['isLogin'] === TRUE && $_SESSION['username'] != 'admin'){
                                    echo'<li><a class="dropdown-item" href="logout.php"><i class="bi bi-file-lock" type="button"></i> Log out</a>';
                                    echo '<li><a class="dropdown-item" href="accountManagement.php"><i class="bi bi-gear"></i> Management</a></li>';
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
    <h3 class="d-flex justify-content-center">Enter your account information</h3>
    <form>
        <table class="table table-borderless">
            <tr>
                <td class="w-25 p-0">Username: </td>
                <td class="w-50 pt-0"><p name="txtUsername"><?php
                        echo $username;
                    ?></p></td> <!--Display username here in tag <p name="txtUsername"></p>-->
                    
            </tr>
            <tr>
                <td class="w-25 p-0">Password: </td>
                <td class="w-50 pt-0"><input disabled="disabled" class="border-0" type="password"name="txtPassword" value="
                <?php
                    echo '•';
                    ?>"></td> <!--Display password here in tag <p name="txtPassword"></p>-->
            </tr>
            <tr>
                <td class="w-25 p-0">Full name: </td>
                <td class="w-50 pt-0"><p name="txtFullname">
                    <?php
                        echo $output['fullname'];
                    ?>
                </p></td> <!--Display fullname here in tag <p name="txtFullname"></p>-->
            </tr>
            <tr>
                <td class="w-25 p-0">Email: </td>
                <td class="w-50 pt-0"><p name="txtEmail">
                    <?php
                        echo $output['email'];
                    ?>
                </p></td> <!--Display email here in tag <p name="txtEmail"></p>-->
            </tr>
            <tr>
                <td></td>
                <td><a href="editAccount.php" class="btn btn-primary">Edit Information</a></td>
            </tr>
        </table>
    </form>
</div>
<hr>





</body>
</html>