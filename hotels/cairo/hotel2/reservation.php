<?php
// require_once ("api.php");


if(isset($_POST['checkin'])){
    // print_r($_POST);

    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $room = $_POST['room'];

    $con = mysqli_connect("localhost","root","","travilo");

    $sql = "INSERT INTO `hotel`( `location`, `CheckIn`, `CheckOut`, `Adults`, `Children`, `Room`) VALUES ('BAYT ZAINA - Nubian Hospitality House','$checkin', '$checkout', '$adults', '$children', '$room')";

    mysqli_query($con,$sql);


    header("LOCATION: Double Room With Sea View.html");


}
?>