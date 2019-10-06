<?php
    session_start();

    if(!isset($_SESSION['access_token'])){
        header('Location: login.php');
        exit();
    }
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
            <div class="col-md-3" align="center">
                <img src="" alt="">
            </div>
            <div class="col-md-9" align="center">
                <table class="table table-hover table-border">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td><?php echo $_SESSION['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Nome</td>
                            <td><?php echo $_SESSION['givenName'] ?></td>
                        </tr>
                        <tr>
                            <td>Sobrenome</td>
                            <td><?php echo $_SESSION['familyName'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $_SESSION['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Sexo</td>
                            <td><?php echo $_SESSION['gender'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>