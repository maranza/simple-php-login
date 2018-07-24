<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-System</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <h1 class="text-center">Hello Page</h1>

        <div class="mt-4 col-md-6 offset-3">

        <form action="/process.php" method="post">
            <div class="card">

                <div class="card-header">Sign In</div>

                <div class="card-body">

                    <div class="form-group">
                        <label for="username" >Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password" >Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-site">Login</button>
                </div>
            </div>
        </form>

        
            </div>
        </div>


    </div>

    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>


<?php




?>