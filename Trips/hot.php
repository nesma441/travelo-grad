<?php
session_start();
//require('./home/');
$serverName = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'travilo';
$conn = mysqli_connect($serverName, $dbUser, $dbPassword, $dbName);


if (isset($_POST['submit'])) // submit button in form 
{
$locHot = strtolower($_POST['locHot']);
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];
$hotel = $_POST['hotelH'];


    //echo $hotel;
    $query = "select * from availiblty where location = '$locHot'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $json = mysqli_fetch_assoc($result);

        $dbcheckIn = $json['checkIn'];
        $dbcheckOut = $json['checkOut'];
        $dbhotel = $json['hotel'];

        if ($locHot == "cairo") {
            if ($hotel == "Ramses Hilton Hotel & Casino") {
               header("location:cairo/trip1/Ramses Hilton Hotel & Casino.html");
            } elseif ($hotel == "Pyramisa Suites Hotel Cairo") {
               header("location:cairo/trip2/Pyramisa Suites Hotel Cairo.html");
            }
        } 
    
        elseif($locHot == "north coast") {
            if ($hotel == "Porto Marina Resort") {
               header("location:north coast/trip1/Porto Marina Resort.html");
            } elseif ($hotel == "Tolip North Coast Hotel") {
               header("location:north coast/trip2/Tolip North Coast Hotel.html");
            }
        } 
        elseif($locHot == "luxor") {
            if ($hotel == "Sonesta St. George Luxor") {
                header("location:luxor/trip1/Sonesta St. George Luxor.html");
            } elseif ($hotel == "Hilton Luxor Resort & Spa") {
                header("location:luxor/trip2/Hilton Luxor Resort & Spa.html");
            }
        }     elseif($locHot == "dahab") {
            if ($hotel == "Tropitel Dahab Oasis") {
                header("location:dahab/trip1/Tropitel Dahab Oasis.html");
            } elseif ($hotel == "Ecotel Dahab Bay View Resort") {
                header("location:dahab/trip2/Ecotel Dahab Bay View Resort.html");
            }
        } 
        
        elseif($locHot == "aswan") {
            if ($hotel == "Citymax Hotel Aswan") {
                header("location:aswan/trip1/Citymax Hotel Aswan.html");
            } elseif ($hotel == "Movenpick Resort Aswan") {
                header("location:aswan/trip2/Movenpick Resort Aswan.html");
            }
        } 
        elseif($locHot == "Alexandria") {
            if ($hotel == "Sunrise Alex Avenue Hotel") {
                header("location:Alexandria/trip1/Sunrise Alex Avenue Hotel.html");
            } elseif ($hotel == "Steigenberger Cecil Hotel Alexandria") {
                header("location:Alexandria/trip2/Steigenberger Cecil Hotel Alexandria.html");
            }
        }
          elseif($locHot == "Hurghada") {
            if ($hotel == "AMC Royal Resort") {
                header("location:Hurghada/trip1/AMC Royal Resort.html");
            } elseif ($hotel == "Kempinski Hotel Soma Bay") {
                header("location:Hurghada/trip2/Kempinski Hotel Soma Bay.html");
            }
        } 
        
        else {
            $_SESSION['errorDU'] = "this location isn't availble";
            header("location:Trips.php");
        }
    
    }
}
