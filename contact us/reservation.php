<?php
// require_once ("api.php");


if(isset($_POST['name'])){
    // print_r($_POST);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $message = $_POST['message'];

    $con = mysqli_connect("localhost","root","","travilo");

    $sql=  "INSERT INTO `contact_us`( `name` ,`email`, `contactNo`, `message`) VALUES ( '$name' ,'$email','$contactNo','$message')";

    mysqli_query($con,$sql);


    header("LOCATION: contactus.html");


}
?>