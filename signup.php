<?php
session_start();
require_once('inc/db-connection.php');
if (isset($_SESSION['submit'])) {
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
            width: 60%;
            margin: 60px auto;
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

        .form-control
         {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
            width:30%;
            margin:auto;
            
        }
    </style>
</head>

<body class="login-page">
<div class="login-form">

<form action="handle-signup.php" method="POST">
    <h2 class="text-center">Registeration</h2>
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="First Name..." required="required">
    </div>
    <div class="form-group">
        <input type="text" name="secondname" class="form-control" placeholder="Last Name..." required="required">
    </div>
    <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="Email" required="required">
    </div>
    <div class="form-group">
        <input type="text" name="mobileNum" class="form-control" placeholder="Mobile Number" required="required">
    </div>
    <div class="form-group">
        <input name="password" type="password" class="form-control" placeholder="Password" required="required">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Register</button>
    </div>
   
</form>
</div>
</body>


</html>