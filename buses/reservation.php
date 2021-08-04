<?php
// require_once ("api.php");


if(isset($_POST['checkin'])){
    // print_r($_POST);

    $companyName = $_POST['companyName'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $numberOfSeats = $_POST['numberOfSeats'];

    $con = mysqli_connect("localhost","root","","travilo");

    $sql=  "INSERT INTO `bus`( `company name`, `from`, `to`, `checkin`, `checkout`, `number of seats`) VALUES ('$companyName','$from',' $to','$checkin','$checkout','$numberOfSeats')";

    mysqli_query($con,$sql);


    header("LOCATION: buses.html");


}
?>