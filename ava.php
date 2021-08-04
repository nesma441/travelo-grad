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
                    header("location:http://localhost/project%20travelo%20-%20Copy/Day%20Use/day%20use%20page/Pharaonic%20Village/Pharaonic%20Village.php");
                } elseif ($dbhotel == "Romance Hotel") {
                    header("location:http://localhost/project%20travelo%20-%20Copy/Day%20Use/day%20use%20page/Romance%20Hotel/Romance%20Hotel.php");
                } elseif ($dbhotel == "Rayyan Valley Fayoum") {
                    header("location:http://localhost/project%20travelo%20-%20Copy/Day%20Use/day%20use%20page/Rayyan%20Valley%20Fayoum/Rayyan%20Valley%20Fayoum.php");
                } elseif ($dbhotel == "Swiss Inn Dome Marine") {
                    header("location:http://localhost/project%20travelo%20-%20Copy/Day%20Use/day%20use%20page/Swiss%20Inn%20Dome%20Marine/Swiss%20Inn%20Dome%20Marine.php");
                }
                elseif ($dbhotel == "Sheikh Ali Resort") {
                    header("location:home/Dahab/homeDahab.html");
                } 
                elseif ($dbhotel == "Tropitel Sahl Hasheesh") {
                    header("location:home/Hurghada/homeHurghada.html");
                }
                 elseif ($dbhotel == "Marina Resort") {
                    header("location:home/North Coast/homeNorth Coast.html");
                }
                
                elseif ($dbhotel == "Steigenberger Nile Palace") {
                    header("location:home/Luxor/homeLuxor.html");
                }
                elseif ($dbhotel == "Tulip") {
                    header("location:home/Aswan/homeAswan.html");
                }

            } else {
                $_SESSION['errorDU'] = "this date isn't availble";
                header("location:travelo.php");
            }
        } else {
            $_SESSION['errorDU'] = "this date isn't availble";
            header("location:travelo.php");
        }
    } else {
        $_SESSION['errorDU'] = "this location isn't availble";
        header("location:travelo.php");
    }
}else{
    echo '####################';
}
