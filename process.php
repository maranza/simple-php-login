<?php
session_start();


if (isset($_POST['submit'])) {
    include_once 'includes/config.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //error handler
    //check for empty fields

    if (empty($username) || empty($password)) {
        
        header("Location: login.php?login=empty");
        exit();
    }else{
        //check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $username) || !preg_match("/^[a-zA-Z]*$/", $password)) {
        
            header("Location: login.php?login=invalid-inputs");
            exit();
        
        } else {
            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck < 1) {
                header("Location: login.php?login=no-match");
                exit();
            }else{
                if ($row = mysqli_fetch_assoc($result)) {
                    
                    if ($password === $row['password']) {
                        $_SESSION['session_username'] = $row['username'];
                        header("Location: welcome.php?login=login-success");
                        exit();
                    }
                    else {
                        header("Location: login.php?login=wrong-password");
                        exit();
                    }

                } else {
                    header("Location: login.php?login=wrong-password");
                    exit();
                }
            }
        }
        
    }

}
else{
    header("Location:login.php");
    exit();
}





