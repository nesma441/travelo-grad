<?php
// require_once ("api.php");


if(isset($_POST['name'])){
    // print_r($_POST);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $NumberOfIndividuals = $_POST['NumberOfIndividuals'];
    $NumberOfRooms = $_POST['NumberOfRooms'];
    $comment = $_POST['comment'];

    $con = mysqli_connect("localhost", "root", "", "travilo");

    $sql = "INSERT INTO `trip`(`location` ,`name`, `email`, `telephone`, `NumberOfIndividuals`, `NumberOfRooms`,`comment`) VALUES ( 'Ecotel Dahab Bay View Resort' ,'$name','$email','$telephone','$NumberOfIndividuals','$NumberOfRooms','$comment')";

    mysqli_query($con,$sql);


    header("LOCATION: Ecotel Dahab Bay View Resort.html");


}
?>