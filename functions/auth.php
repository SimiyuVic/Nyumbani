<?php

session_start();

include('../config/db_config.php');

if(isset($_POST['submit']))
{
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);

    if($password == $cpassword){
        $sql_check_email = "SELECT * FROM users WHERE email = '$email' ";
        $sql_check_email_check = mysqli_query($connection, $sql_check_email);

        if(mysqli_num_rows($sql_check_email_check) > 0 )
        {
            $_SESSION['message'] = "Email already exists";
            header('Location: ../register.php');
        }else{
            $sql_insert = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password') ";
            $sql_insert_check = mysqli_query($connection, $sql_insert);

            if($sql_insert_check)
            {
                $_SESSION['message'] = "Registration Successfull";
                header('Location: ../login.php');
            }else{
                $_SESSION['message'] = "Something went wrong";
                header('Location : ../register.php');
            }
        }
    }else{
        $_SESSION['message'] = "Passwords do not Match";
        header('Location: ../register.php');
    }
}

if(isset($_POST['login']))
{
    
}


?>