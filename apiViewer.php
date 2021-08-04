<?php
// require_once ("api.php");


?>

<?php
require_once ('home/Aswan/reservation.php');
$response =array();
// $con = null;

if($con){
    $sql = 'SELECT * FROM `offers` ORDER BY location';
    $result = mysqli_query($con,$sql);
    if($result){
        $i=0;
        // $location = null;
        // $date = null;
        // $name = null;
        // $email = null;
        // $telephone = null;
        // $NumberOfIndividuals = null;
        // $NumberOfRooms = null;
        // $comment = null;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['location'] = $row ['location'];
            $response[$i]['date'] = $row ['date'];
            $response[$i]['name'] = $row ['name'];
            $response[$i]['email'] = $row ['email'];
            $response[$i]['telephone'] = $row ['telephone'];
            $response[$i]['NumberOfIndividuals'] = $row ['NumberOfIndividuals'];
            $response[$i]['NumberOfRooms'] = $row ['NumberOfRooms'];
            $response[$i]['comment'] = $row ['comment'];
            $i++;
        }
        echo json_encode($response , JSON_PRETTY_PRINT);
    }
}

else{
    echo "database connection failed";
}


?>