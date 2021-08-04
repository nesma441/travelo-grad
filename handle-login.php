<?php
session_start();
require_once('inc/db-connection.php');
if (isset($_POST['submit'])) // submit button in form 
{
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    $query = "select * from customer where email='$email'";
    $run_query = mysqli_query($conn, $query);
    //echo mysqli_num_rows($run_query);


    if (mysqli_num_rows($run_query) > 0) { // email
        $user = mysqli_fetch_assoc($run_query);
        $strpass = $user['password'];
        $isCorrect = password_verify($password, password_hash($strpass, PASSWORD_DEFAULT));

        if ($isCorrect) // password 
        {
            $_SESSION['email'] = $email;

            $quaryname = "SELECT  `firstName`,`lastName` FROM `customer` WHERE `email`='$email'";
            $result = mysqli_query($conn, $quaryname);
            $customer = mysqli_fetch_row($result);
            $_SESSION['name'] = $customer[0];
            $_SESSION['lastname'] = $customer[1];



            $quarynum = "SELECT `phoneNo` FROM `customer` WHERE `email`='$email'";
            $resultnum = mysqli_query($conn, $quarynum);
            $customerNum = mysqli_fetch_row($resultnum);
            $_SESSION['mobNum'] = $customerNum[0];


            $quaryLoc = "SELECT `location`FROM `offers` WHERE `email`='$email'";
            $resultLoc = mysqli_query($conn, $quaryLoc);
            $customerr = mysqli_fetch_assoc($resultLoc);
            print_r($customerr['location']);
            if (mysqli_num_rows($resultLoc) > 0) {
                $_SESSION['location'] = $customerr['location'];
            } else {
                $_SESSION['location'] = "There is no Reservation";
            }

            $quaryDU = "SELECT `location`FROM `day_use` WHERE `email`='$email'";
            $resultDU = mysqli_query($conn, $quaryDU);
            $customerrDU = mysqli_fetch_assoc($resultDU);
            //print_r($customerrDU);
            if (mysqli_num_rows($resultLoc) > 0) {
                $_SESSION['locDU'] = $customerrDU['location'];
            } else {
                $_SESSION['locDU'] = "There is no Reservation";
            }


            header("location:travelo.php");
        } else {
            $_SESSION['errors'] = 'Password is not correct';
            header("location:login.php");
        }
    } else {
        $_SESSION['errors'] = "Email is not Found";
        header("location:login.php");
    }
} else {
    header("location:login.php");
}
