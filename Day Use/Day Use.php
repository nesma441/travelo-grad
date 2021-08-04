<?php

session_start();

?>


<!DOCTYPE html>
    <meta charset="UTF-8" />
    <title>Day Use</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--css font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
     <!--bootstrap-->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
     integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
     integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
     integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <link rel="stylesheet" href="css/Day Use.css" />
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/all.min.css">
     <link rel="stylesheet" href="../css/travelo.css" />
     <link rel="shortcut icon" href="images/Capture-removebg-preview (1).png" />
     
<head>
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
            <a class="nav-link active" onclick="document.location.href='../travelo.php'">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" onclick="document.location.href='../Trips/Trips.php'">Trips</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " onclick="document.location.href='Day Use/Day Use.php'">Day use</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " onclick="document.location.href='../hotels/hotels.php'">Hotels</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " onclick="document.location.href='../buses/buses.html'">Buses</a>
        </li>
        <?php if (!isset($_SESSION['email'])){  ?>
          <li class="nav-item">
            <a class="nav-link " href="../login.php">login</a>
          </li>
          <?php }?>
          <?php if (isset($_SESSION['email'])){  ?>
            <div class="my_account">
              <li class="nav-item">
                  <a class="nav-link "><i class="far fa-user mr-3"></i><?php print_r($_SESSION['name']);?></a>
              </li>
          </div>
          <li class="nav-item">
            <a class="nav-link " href="../logout.php">Logout</a>
          </li>
          <?php }?>
        <li class="nav-item">
            <a class="nav-link " onclick="document.location.href='../contact us/contactus.html'">Contact Us</a>
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
    <section class="home-ha">
        <div class="overlay-ha">
        <div class="creative-ha">
            <h1 class="we-ha">Greatest Collection of</h1> <!-- ./we-ha-->
            <h2 class="way-ha">Egyptian Artifacts</h2> <!-- ./way-ha-->
            <h3 class="waya-ha">Egypt is the world’s leading museum of history & culture, housing a permanent collection of over 2.3 million objects.</h3>
        </div> <!-- ./creative-ha-->
        </div> <!-- ./overlay-ha-->
    </section> <!-- ./home-ha-->
    <div class="awesome-ha">
      <h3 class="agency-ha">we are <span class="simple-ha">awesome</span> <!-- ./simple-ha-->agency.</h3> <!-- ./agency-ha-->
      <p class="lorem-ha">Lorem Ipsum is simply dummy text of the printing and type setting industry.
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
         when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> <!-- ./lorem-ha-->
  </div> <!-- ./awesome-->
    <div class="mission-ha">
      <div class="cover-ha">
          <div class="shine-ha">
              <div class="ipsum-ha"><span class="line-ha"></span> <!-- ./line-ha--></div> <!-- ./ipsum-ha-->
              <p class="digital-ha">Our <span class="printer-ha">Site</span> <!-- ./printer-ha--></p> <!-- ./digital-->
          </div> <!-- ./shine-ha-->
          <p class="comfort-ha">The idea of ​​the project on internal tourism for example, if I need to reserve a journey and do not know the place or any tourist programs, this website facilities the search for the website journey for my needs, timing and program. This website has a range of companies that provide tours with all places with suitable hotels. Each company have database for all users to get his journey with easy way to anywhere.</p> <!-- ./comfort-ha-->
              <span class="succeed-ha"><i class="fas fa-caret-right fa-3x"></i></span> <!-- ./succeed-ha-->
              <p class="watch-ha">Watch Our Story</p><!-- ./watch-ha-->       
      </div> <!-- ./cover-ha-->
      <div class="other-ha">
          <div class="web-ha">
              <p class="want-ha">Web Design</p> <!-- ./want-ha-->
              <div class="full-ha"><span></span></div> <!-- ./full-ha-->
          </div> <!-- ./web-ha-->
          <div class="graphic-ha">
              <p class="gra-ha">Graphic Design</p> <!-- ./gra-ha-->
              <div class="phic-ha"><span></span></div> <!-- ./phic-ha-->
          </div> <!-- ./graphic-ha-->
          <div class="development-ha">
              <p class="deve-ha">Development</p> <!-- ./deve-ha-->
              <div class="lopment-ha"><span></span></div> <!-- lopment-ha-->
          </div> <!-- ./development-ha-->
      </div> <!-- ./other-ha-->
  </div> <!-- ./mission-ha-->
  

    <section class="important-trip">
        <h2>Day Use</h2>
        <div class="line"><span class="m-line"></span></div>
        <div class="box">
          <img src="images/Pharaonic Village3.jpeg" alt="images" width="335px" height="340px">
          <div class="trip-span">
            <span>Cairo.</span>
            <span>Pharaonic Village</span>
          </div>
          <div class="trip-span">
            <span>150 EGP for person</span>
          </div>
          <button class="btn-click" onclick="document.location.href='day use page/Pharaonic Village/Pharaonic Village.php'">More</button>
        </div>
        <div class="box">
          <img src="images/Romance Hotel (1).jpg" alt="images" width="335px" height="340px">
          <div class="trip-span">
            <span>Gouna.</span>
            <span>Romance Hotel</span>
          </div>
          <div class="trip-span">
            <span> 400 EGP for person.</span>
          </div>
          <button class="btn-click" onclick="document.location.href='day use page/Romance Hotel/Romance Hotel.php'">More</button>
        </div>
        <div class="box">
          <img src="images/Swiss Inn Dome Marine.jpg" alt="images" width="335px" height="250px">
          <div class="trip-span">
            <span>Ain Sokhna.</span>
          <span>Swiss Inn Dome Marine</span>
          </div>
          <div class="trip-span">
            <span>400 EGP for person</span>
          </div>
          <button class="btn-click" onclick="document.location.href='day use page/Swiss Inn Dome Marine/Swiss Inn Dome Marine.php'">More</button>
        </div>
        <div class="box">
          <img src="images/wady elrayan.jpg" alt="images" width="335px" height="250px">
          <div class="trip-span">
            <span>Fayoum.</span>
          <span>Rayyan Valley Fayoum</span>
          </div>
          <div class="trip-span">
            <span>200 EGP for person</span>
          </div>
          <button class="btn-click" onclick="document.location.href='day use page/Rayyan Valley Fayoum/Rayyan Valley Fayoum.php'">More</button>
        </div>
    </section>
    <div id="booking" class="section">
      <div class="section-center">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-md-push-5">
              <div class="booking-cta">
                <h1>Make your reservation</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
                  ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
                  Perspiciatis.
                </p>
              </div>
            </div>
            <div class="col-md-4 col-md-pull-7">
              <div class="booking-form">
                <form action="availble.php" method="post">
                  <div class="form-group" >
                    <span class="form-label">Your Destination</span>
                    <input class="form-control" type="text" placeholder="Enter a destination " name="locHot">
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <span class="form-label">Check In</span>
                        <input class="form-control" type="date" name="checkIn" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <span class="form-label">Check out</span>
                        <input class="form-control" type="date" name="checkOut" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <span class="form-label">Rooms</span>
                        <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <span class="form-label">Adults</span>
                        <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <span class="form-label">Children</span>
                        <select class="form-control">
                          <option>0</option>
                          <option>1</option>
                          <option>2</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-btn">
                    <button class="submit-btn" value="submit" name="submit">Check availability</button>
                  </div>
                </form>
                
        <?php if (isset($_SESSION['errorDU'])) { ?>
        <div class="alert alert-secondary " role="alert">
            <h4 class="alert-heading">Error !</h4>
            <p><?php echo $_SESSION['errorDU'] ?></p>
        </div>
        <?php } ?>
        <?php unset($_SESSION['errorDU']) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>







    <footer class="log-footer">
      <div class="container">
        <div class="footer_logo">
          <img src="images/footer-removebg-preview.png" alt="">
        </div>

        <div class="footer_container">
          <div class="row">
              <div class="left-footer col-4">
                <div class="footer-icon1">
                  <div><i class="fas fa-phone-alt "></i>01142929022</div>
                  <div><i class="fas fa-envelope"></i>hello@travelo.com</div>
                </div>
                <div class="footer-icon2">
                  <span class="face"><i class="fab fa-instagram"></i></span> <!-- ./face-->
                  <span class="face"><i class="fab fa-facebook-f"></i></span> <!-- ./face-->
                </div>
               
              </div> <!-- ./left-footer-->
              <div class="footer-content-sh col-4">
                <h4 class="footer-title-sh">About Unifox</h4>
                <div class="line-footer-sh"> </div>
                <div class="footer-container-sh">
                  <p class="footer-text-sh"> The idea of ​​the project on internal tourism for example,
                     if I need to reserve a journey and do not know the place or any tourist programs.</p>
                </div>
    
              </div>
              <div class="footer-right col-4">
                <h4 class="footer-title-sh">Galary</h4>
                <div class="line-footer-sh"> </div>
                <div class="footer-container-sh">
                  <img src="images/1 (1).jpg" alt="">
                  <img src="images/1 (2).jpg" alt="">
                  <img src="images/1.jpg" alt="">
                  <img src="images/2.jpg" alt="">
                  <img src="images/3 (3).jpg" alt="">
                </div>
    
              </div>
          </div>
         
        </div>
        <div class="footer-footer-content">
          <div class="row">
            <div class="col-6">
              <div class="footer-container-1">
                <p> Travelo © 2020 All Right Resived made with <i class="fa fa-heart" aria-hidden="true"></i> By <span class="special-sh"> Monisterthemes </span>  </p>
              </div>
            </div>
            <div class="col-6">
              <ul class="footer-list">
                <li> Home </li>
                <li> Trips </li>
                <li> Day Use </li>
                <li> Hotels </li>
                <li> Buses </li>
                <li> Contact Us </li>
              </ul>
            </div>
          </div>  
        </div>

      </div>

      
      
    </footer> <!--./log-footer-->
    <div id="to-top" title="back to top"><i class="fas fa-chevron-up"></i></div>
    <script src="js/jsquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="../js/script.js"></script>
</body>