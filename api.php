 <?php
require_once ("home/Aswan/reservation.php");

$response =array();
// $con = null;
$con = mysqli_connect("localhost", "root", "", "travilo");

if($con){
    $sql = 'SELECT * FROM `offers` ORDER BY location';
    $result = mysqli_query($con,$sql);
    if($result){
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['location'] = $row ['location'];
            $response[$i]['Date'] = $row ['Date'];
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
    
header('Content-Type: application/json');

}
else{
    echo "database connection failed";
}
?> 