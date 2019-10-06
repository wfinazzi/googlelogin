<?php
    require_once "config.php";

    if(isset($_SESSION['access_token'])){
        header('Location: index.php');
        exit();
    }

    $loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login with Google</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">
                <form action="">
                    <input type="text" name="email" class="form-control"><br>
                    <input type="password" name="password" class="form-control">
                    <button type="submit" class="btn btn-primary" value="Login">Login</button>
                    <button type="button" onclick="window.location = '<?php echo $loginURL ?>'" class="btn btn-danger" value="Login with Google">Login with Google</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>