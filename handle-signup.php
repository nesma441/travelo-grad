<?php
session_start();
require_once('inc/db-connection.php');
if (isset($_POST['name'])) // submit button in form 
{
    $name = htmlspecialchars(trim($_POST['name']));

    $secondname = htmlspecialchars(trim($_POST['secondname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $mobNum = htmlspecialchars(trim($_POST['mobileNum']));


    // $query=" INSERT INTO `users` (`name`, `email`, `mobNum`, `password`) VALUES ('$name','$email','$mobNum','$password')";
    $query = "INSERT INTO `customer`( `firstName`, `lastName`, `email`, `phoneNo`, `password`) VALUES
     ('$name','$secondname','$email','$mobNum','$password')";
    $run_query = mysqli_query($conn, $query);
    $check = mysqli_affected_rows($conn);
    if ($check) {

        $_SESSION['name'] = $name;
        $_SESSION['lastname'] = $secondname;
        $_SESSION['email'] = $email;
        $_SESSION['mobNum'] = $mobNum;
        $quaryLoc = "SELECT `location`FROM `offers` WHERE `email`='$email'";
        $resultLoc = mysqli_query($conn, $quaryLoc);
        $customerr = mysqli_fetch_assoc($resultLoc);
        print_r($customerr['location']);
        if (mysqli_num_rows($resultLoc) > 0) {
            $_SESSION['location'] = $customerr['location'];
        } else {
            $_SESSION['location'] = "There is no Reservation";
        }

        header("location:travelo.php");
    }
} else {
    header("location:signup.php");
}
