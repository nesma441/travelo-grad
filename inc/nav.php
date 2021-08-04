<?php

//require_once('Day Use/availble.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/travelo.css" />

    
</head>
<body>


<header>
  <nav class="navbar">
   <div class="nav-left">
    <img src="images/Capture.PNG3-removebg-preview.png" alt="Capture">
     </div>
    <!-- ./nav-center-->
    <div>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" onclick="document.location.href='travelo.php'">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" onclick="document.location.href='Trips/Trips.php'">Trips</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " onclick="document.location.href='Day Use/Day Use.php'">Day use</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " onclick="document.location.href='hotels/hotels.php'">Hotels</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " onclick="document.location.href='buses/buses.html'">Buses</a>
        </li>
        <?php if (!isset($_SESSION['email'])){  ?>
          <li class="nav-item">
            <a class="nav-link " href="login.php">login</a>
          </li>
          <?php }?>
          <?php if (isset($_SESSION['email'])){  ?>
            <div class="my_account">
              <li class="nav-item">
                  <a class="nav-link "><i class="far fa-user mr-3"></i><?php print_r($_SESSION['name']);?></a>
              </li>
          </div>
          <li class="nav-item">
            <a class="nav-link " href="logout.php">Logout</a>
          </li>
          <?php }?>
        <li class="nav-item">
            <a class="nav-link " onclick="document.location.href='contact us/contactus.html'">Contact Us</a>
        </li>
       
    </ul>
</div>
</nav>
    <div class="model" active="open">
        <div class="container h-100">
            <div class="d-flex justify-content-between h-100">
                <div class="reservations_header col-6">
                    <div>
                    <h1> All Reservations </h1>
                        <div>Hi, <?php print_r($_SESSION['name']." ". $_SESSION['lastname']) ?></div>
                        <div>Email: <?php print_r($_SESSION['email'])?></div>
                        <div>Mobile: <?php print_r($_SESSION['mobNum'])?></div>

                    </div>
                </div>
                <!-- <form action=""> -->
                <div class="list_reservations col-5 d-flex align-items-center">
                    <nav class="h-75">
                        <ul class="h-100 d-flex flex-column justify-content-between">
                            <div class="new item">
                            <div class="now " >
                            <li onclick="document.location.href='home/Luxor/homeLuxor.php'" ><i class="fas fa-dot-circle"></i><?php print_r($_SESSION['location']); ?> </li>
                            </div>
                            <div class="mm">
                            <li class="onlyme"> <form action="POST"> <input type="button" class="delBtn" value="Delete"> </form> </li>
                            </div>
                            </div>
                           
                            <!-- <li><i class="fas fa-dot-circle"></i><?php print_r($_SESSION['locDU']); ?></li> -->
                            <div class="new">
                                <div class="now">
                                <li class="item" onclick="document.location.href='Day Use/day use page/Romance Hotel/Romance Hotel.php'"><i class="fas fa-dot-circle"></i> Gaunna Romance Hotel (Day Use)</li>
                                </div>
                                <div class="mm">
                                <li class="onlyme"> <form action="POST"> <input type="button" class="delBtn" value="Delete"> </form> </li>
                                </div>
                            
                            </div>
                            <div class="new">
                                <div class="now">
                                <li class="item" onclick="document.location.href='home/Dahab/homeDahab.php'"><i class="fas fa-dot-circle"></i> Dahab Sheikh Ali Resort. (offers)</li>
                                </div>
                                <div class="mm">
                                <li class="onlyme"> <form action="POST"> <input type="button" class="delBtn" value="Delete"> </form> </li>
                                </div>
                            </div>
                            <div class="new">
                                <div class="now">
                                <li class="item"  onclick="document.location.href='home/Dahab/homeDahab.php'"><i class="fas fa-dot-circle"></i> Bus from (Cairo) to (Dahab)</li> 
                                </div>
                                <div class="mm">
                                <li class="onlyme"> <form action="POST"> <input type="button" class="delBtn" value="Delete"> </form> </li>
                                </div>
                            </div>
                        </ul> 
                    </nav>
                </div>
                <!-- </form> -->
           
            </div>
        </div>
    </div>
</header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- <script src="./js/script.js"></script> -->

</body>
</html>