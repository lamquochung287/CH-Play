<?php
session_start(); # khai bao bien session de luu username sau khi login dung session hien thi ten username o phan account


    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'account_db';
    $connection = new mysqli($host , $user,$pass);
    if ($connection-> error){
        die("Connection failed: " . $connection->error);
    }

    #create database if not exist 
    mysqli_query($connection,"CREATE DATABASE IF NOT EXISTS $dbname");
    
    # select database and create table profile for normal user if not exist
    $connection->select_db($dbname);
    $sql = 'create table if not exists profile(
        username varchar(255) not null,
        password varchar(255) not null,
        email varchar(255) not null,
        fullname varchar(255) not null)';

    $sql2 = 'create table if not exists adminprofile(
        username varchar(255) not null,
        password varchar(255) not null)';
    if($connection->query($sql) === FALSE){
        die('Create table profile failed'.$connection->error);
    }
    if($connection->query($sql2) === FALSE){
        die('Create table adminprofile failed'.$connection->error);
    }

    $admin = 'admin';
    $admin_pass = 'tdtu';
    $admin_pass = md5($admin_pass);
    $connection = mysqli_connect($host,$user,$pass, $dbname);
    #add admin account to the database
    $check = mysqli_query($connection,"SELECT * FROM adminprofile WHERE username = 'admin'");

    if(mysqli_num_rows($check) == 0){
        @$addmember = mysqli_query($connection,"INSERT adminprofile Value('$admin','$admin_pass')");
    }



if (isset($_POST['login'])) 
{
    //Connect to the database
    $connection = mysqli_connect($host,$user,$pass,$dbname);

    //Get the input data
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
    
    //Check username and password is not valid?
    if (!$username || !$password) {
        $_SESSION['Error'] = TRUE;
        $_SESSION['String'] = 'Please enter your username and password';
        echo "<meta http-equiv='refresh' content='0.25;url=login.php'>";
        exit;
    }
    
    // use md5 to secure password
    $password = md5($password);
    
    //Check normal username is exists in profile or not
    $query = mysqli_query($connection,"SELECT username, password FROM profile WHERE username='$username'");
    if (mysqli_num_rows($query) == 0) { # if normal username is not exists in profile let check username in adminprofile is exists?
        $query = mysqli_query($connection,"SELECT username, password FROM adminprofile WHERE username='$username'");
        if (mysqli_num_rows($query) == 0) {
            $_SESSION['Error'] = TRUE;
            $_SESSION['String'] = 'Username is not exists';
            echo "<meta http-equiv='refresh' content='0.25;url=login.php'>";
            exit;
        }
        else{
            $row = mysqli_fetch_array($query); # Get the password from database in adminprofile if username is exists in adminprofile
        }
    }
    else{ # Else get the password from database in profile for normal user if username is exists in profile
        $row = mysqli_fetch_array($query);
    }
    
    
    //Check the password input is correct with the password which save in database
    if ($password != $row['password']) {
        $_SESSION['Error'] = TRUE;
        $_SESSION['String'] = 'Your password is incorrect. Please check your password again';
        echo "<meta http-equiv='refresh' content='0.25;url=login.php'>";
        exit;
    }
    
    //Save username
    $_SESSION['isLogin'] = TRUE;
    $_SESSION['username'] = $username;
    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button">
                    <i class="bi bi-person" id="account"></i> Account
                </a>
                <ul class="dropdown-menu" >
                    <li><a class="dropdown-item" href="register.php"><i class="bi bi-file-lock" type="button"></i> Register</a>
                    <li><a class="dropdown-item" href="login.php"><i class="bi bi-key"></i> Login</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Management</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<hr>
<div class="container" id="appContent">
    <h3 class="d-flex justify-content-center">Enter your account information</h3>
    <form action="login.php?do=login" method='POST'>
        <table class="table table-borderless">
            <tr>
            <td>Username: </td>
            <td><input type="text" name="txtUsername"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="txtPassword"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name='login' class="btn btn-primary">LOG IN</button></td>
            </tr>
        </table>
        <?php
            if(isset($_SESSION['Error']) && $_SESSION['Error'] === TRUE){
                echo $_SESSION['String'];
                $_SESSION['Error'] = FALSE;
                $_SESSION['String'] = '';
            }
        ?>
    </form>
</div>
<hr>





</body>
</html>