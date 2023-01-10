<?php
    session_start();
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'account_db';
    $connection = mysqli_connect($host,$user,$pass, $dbname);
    $_SESSION['isSuccess'] = FALSE; #this variable is for the submit process if save data to database success return TRUE else FALSE
    $_SESSION['Error'] = FALSE;
    $_SESSION['String'] = '';

    $username = $_SESSION['username'];
    if(isset($_POST['Done'])){
        $email = addslashes($_POST['txtEmail']);
        $fullname = addslashes($_POST['txtFullname']);
        

    
        #check this is empty or not
        if(!$email || !$fullname){
            $_SESSION['Error'] = TRUE;
            $_SESSION['String'] = 'Please enter all information';
            echo "<meta http-equiv='refresh' content='0.25;url=editAccount.php'>";
            exit;
        }

        $pattern = '/@gmail.com/';
        if (!preg_match($pattern, $email))
        {
            $_SESSION['Error'] = TRUE;
            $_SESSION['String'] = 'Your email is valid. Please enter another email with @gmail.com';
            echo "<meta http-equiv='refresh' content='0.25;url=editAccount.php'>";
            exit;
        }

        $sql_checkEmail = "SELECT email FROM profile WHERE email='$email' and username='$username'";
        if (mysqli_num_rows(mysqli_query($connection,$sql_checkEmail)) > 0)
        {
            $_SESSION['Error'] = TRUE;
            $_SESSION['String'] = 'Your email is exists. Please enter another email';
            echo "<meta http-equiv='refresh' content='0.25;url=editAccount.php'>";
            exit;
        }

        $sqlEmail = "UPDATE profile Set email = '$email'Where username = '$username'";
        $updateEmail = mysqli_query($connection,$sqlEmail);
        $sqlFullname = "UPDATE profile Set fullname = '$fullname'Where username = '$username'";
        $updateFullname = mysqli_query($connection,$sqlFullname);

        if($updateEmail && $updateFullname){
            $_SESSION['isSuccess'] = TRUE;
            echo "<meta http-equiv='refresh' content='0.25;url=editAccount.php'>";
            $_SESSION['String'] = "Edit profile is success. Let check new profile <meta http-equiv='refresh' content='1;url=accountManagement.php'>";
        }
        else{
            $_SESSION['isSuccess'] = FALSE;
            echo "<meta http-equiv='refresh' content='0.25;url=editAccount.php'>";
            $_SESSION['String'] = "Edit profile is not success. Let do it again<meta http-equiv='refresh' content='1;url=editAccount.php'>";
        }

    }
?>