<?php
    session_start();
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'account_db';


    $_SESSION['isSuccess'] = FALSE; #this variable is for the submit process if save data to database success return TRUE else FALSE
    $_SESSION['Error'] = FALSE;
    $_SESSION['String'] = '';
    $connection = mysqli_connect($host,$user,$pass, $dbname);
    //    header('Content-Type: text/html; charset=UTF-8'); # use for show the character vietnamese
    if(isset($_POST['register'])){

    # take the data from the file dangky.php
    $username   = addslashes($_POST['txtUsername']);
    $password   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
    $fullname   = addslashes($_POST['txtFullname']);
    #$birthday   = addslashes($_POST['txtBirthday']);
    #$gender     = addslashes($_POST['txtGender']);
    //Check the information is not empty
    if (!$username || !$password || !$email || !$fullname)
    {
        $_SESSION['Error'] = TRUE;
        $_SESSION['String'] = 'Please enter all information';
        echo "<meta http-equiv='refresh' content='0.25;url=register.php'>";
        exit;
    }

    // Use the md5 to make sure the secure password
    $password = md5($password);
    $sql_checkUsername = "SELECT username FROM profile WHERE username='$username'";

    // Check the username is exists or not
    if (mysqli_num_rows(mysqli_query($connection,$sql_checkUsername)) > 0){
        $_SESSION['Error'] = TRUE;
        $_SESSION['String'] = 'Your username is exists. Please enter another username';
        echo "<meta http-equiv='refresh' content='0.25;url=register.php'>";
        exit;
    }

    //Check the email with form @gmail.com
    $pattern = '/@gmail.com/';
    if (!preg_match($pattern, $email))
    {
        $_SESSION['Error'] = TRUE;
        $_SESSION['String'] = 'Your email is valid. Please enter another email with @gmail.com';
        echo "<meta http-equiv='refresh' content='0.25;url=register.php'>";
        exit;
    }

    // Check the email is exit or not
    $sql_checkEmail = "SELECT email FROM profile WHERE email='$email'";
    if (mysqli_num_rows(mysqli_query($connection,$sql_checkEmail)) > 0)
    {
        $_SESSION['Error'] = TRUE;
        $_SESSION['String'] = 'Your email is exists. Please enter another email';
        echo "<meta http-equiv='refresh' content='0.25;url=register.php'>";
        exit;
    }


    //Save all data to the database
    @$addmember = mysqli_query($connection,"
        INSERT INTO profile(
            username,
            password,
            email,
            fullname
        )
        VALUE(
            '{$username}',
            '{$password}',
            '{$email}',
            '{$fullname}'
            )
        ");

    //Proccess save and notify register
    if ($addmember){
        $_SESSION['isSuccess'] = TRUE;
        echo "<meta http-equiv='refresh' content='0.25;url=register.php'>";
        $_SESSION['String'] = "Register is success. Let login <meta http-equiv='refresh' content='1;url=login.php'>";
    }
        
    else{
        $_SESSION['isSuccess'] = FALSE;
        echo "<meta http-equiv='refresh' content='0.25;url=register.php'>";
        $_SESSION['String'] = "Register is not success. Let register again<meta http-equiv='refresh' content='1;url=register.php'>";
    }
}
?>