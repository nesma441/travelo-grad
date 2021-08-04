<?php

if(isset($_POST['name'])){
    // print_r($_POST);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $NumberOfIndividuals = $_POST['NumberOfIndividuals'];
    $NumberOfRooms = $_POST['NumberOfRooms'];
    $comment = $_POST['comment'];

    $con = mysqli_connect("localhost", "root", "", "travilo");

    $sql = "INSERT INTO `offers`(`location` ,`name`, `email`, `telephone`, `NumberOfIndividuals`, `NumberOfRooms`,`comment`) VALUES ( 'Sharm El-Shaikh' ,'$name','$email','$telephone','$NumberOfIndividuals','$NumberOfRooms','$comment')";

    mysqli_query($con,$sql);

    header("LOCATION: homeSharm El-Shaikh.html");

}
?>