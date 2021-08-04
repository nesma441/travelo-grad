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


    $query =  "select * from availiblty where location = '$locHot'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $json = mysqli_fetch_assoc($result);


        $dbcheckIn = $json['checkIn'];
        $dbcheckOut = $json['checkOut'];
        $dbhotel = $json['hotel'];
        //print_r($json);
        //header("location:availble.php");
        if ($checkIn >= $dbcheckIn) {
            //print_r($dbhotel);

            if ($checkOut <= $dbcheckOut) {

                if ($dbhotel == "Pharaonic Village") {
                    header("location: day use page/Pharaonic Village/Pharaonic Village.html");
                } elseif ($dbhotel == "Romance Hotel") {
                    header("location: day use page/Rayyan Valley Fayoum/Rayyan Valley Fayoum.html");
                } elseif ($dbhotel == "Rayyan Valley Fayoum") {
                    header("location: day use page/Romance Hotel/Romance Hotel.html");
                } elseif ($dbhotel == "Swiss Inn Dome Marine") {
                    header("location: day use page/Swiss Inn Dome Marine/Swiss Inn Dome Marine.html");
                }
                elseif ($dbhotel == "Sheikh Ali Resort") {
                    header("location:../home/Dahab/homeDahab.php");
                } 
                elseif ($dbhotel == "Tropitel Sahl Hasheesh") {
                    header("location:../home/Hurghada/homeHurghada.php");
                }
                 elseif ($dbhotel == "Marina Resort") {
                    header("location:../home/North Coast/homeNorth Coast.php");
                }
                
                elseif ($dbhotel == "Steigenberger Nile Palace") {
                    header("location:../home/Luxor/homeLuxor.php.php");
                }
                elseif ($dbhotel == "Tulip") {
                    header("location:../home/Aswan/homeAswan.php");
                }

            } else {
                $_SESSION['errorDU'] = "this date isn't availble";
                header("location:Day Use.php");
            }
        } else {
            $_SESSION['errorDU'] = "this date isn't availble";
            header("location:Day Use.php");
        }
    } else {
        $_SESSION['errorDU'] = "this location isn't availble";
        header("location:Day Use.php");
    }
}
