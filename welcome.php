<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>welcome  <?php if (isset($_SESSION['session_username'])) { echo $_SESSION['session_username']; } else{
            header("Location: login.php");
            exit();
        }  ?>  </h1>
        <br>
        <form action="logout.php" method="post">
            <button type="submit" name="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>    

</body>
</html>