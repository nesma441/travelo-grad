<?php
session_start();
if (isset($_SESSION['email'])) {
    header("location:travelo.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Simple Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .login-page {
            background-image: url('./images/log.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
            background-position: center center;

        }

        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;

        }

        .login-form form {
            margin-bottom: 15px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
            background-color: rgba(0, 0, 0, .2);
        }

        .login-form h2 {
            margin: 0 0 15px;
            color: white;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body class="login-page">
    <div class="login-form">
        <form action="handle-login.php" method="post">
            <h2 class="text-center">Log in</h2>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            <a href="signup.php" class="text-white "> I don't have account! Sign Up</a>
        </form>

       

        <?php if (isset($_SESSION['errors'])) { ?>
        <div class="alert alert-secondary " role="alert">
            <h4 class="alert-heading">Error!</h4>
            <p><?php echo $_SESSION['errors'] ?></p>
        </div>
        <?php } ?>
        <?php unset($_SESSION['errors']) ?>
    </div>
</body>

</html>