<?php

session_start();

?>
<!DOCTYPE html>
    <meta charset="UTF-8" />
    <title>travelo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--css font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
     <!--bootstrap-->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
     integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
     integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
     integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <link rel="stylesheet" href="css/travelo.css" />
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/all.min.css">
     <link rel="shortcut icon" href="images/Capture-removebg-preview (1).png" />
<head>
</head>
<body>

<?php require_once('inc/nav.php');?>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/pexels-photo-1738536.jpg" class="d-block w-100" style="height: 100vh;" alt="..."> <!-- remove w - 100 -->
          <div class="carousel-caption d-none d-md-block">
            <h5>Hi There!</h5>
            <p>Where would you like to go?</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/pexels-photo-2184177.jpg" class="d-block w-100"  style="height: 100vh;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Hi There!</h5>
            <p>Where would you like to go?</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="our-site">
      <div class="container">
        <h1>Our Site</h1>
        <div class="line"><span class="m-line"></span></div>
        <div class="our-site-content">
          <div class="row">
            <div class="col-6">
              <h1 class="header-site">Egypt Tourism</h1>
              <h3 class="tagline-site">The World's Leading Museum of
                Histrory & Culture.</h3>
              <p class="our-site-pra">The idea of ​​the project on internal tourism for example, if I need to reserve
              a journey and do not know the place or any tourist programs,
              this website facilities the search for the website  journey for my needs, timing and program.
              This website has a range of companies that provide tours with all places with suitable hotels.
              Each company have database for all users to get his journey with easy way to anywhere.</p>
            </div>
            <div class="col-6">
              <div class="img-box">
                <div class="first-img">
                  <img src="images/pexels-rahul-pandit-6040171.jpg" width="350px" height="250px" alt="">
                </div>
                <div class="second-img">
                  <img src="images/pexels-photo-3319218.jpg"  width="350px" height="250px" alt="">
                </div>
               
               
              </div>
              
            </div>
          </div>
        </div>  
      </div>
    </div> <!-- ./our-site-->
    <div class="card">
      <div class="card-img-overlay">
      <p>Love where you're going</p>
      <div>
        <div>
          <i class="fas fa-dollar-sign fa-4x"></i>
          <h3>Competitive Pricing</h3>
          <p>With 500+ suppliers and the purchasing power of 300 million members, mytravel.com can save you more!</p>
        </div>
        <div>
          <i class="fas fa-medal fa-4x"></i>
          <h3>Award-Winning Service</h3>
          <p>Travel worry-free knowing that we're here if you needus, 24 hours a day</p>
        </div>
        <div>
          <i class="fas fa-globe-americas fa-4x"></i>
          <h3>Worldwide Coverage</h3>
          <p>Over 1,200,000 hotels in more than 200 countries and regions & flights to over 5,000 cities</p>
        </div>
       
      </div>
      
      </div> <!--./card-img-overlay-->
    </div> <!-- ./card-->
    <section class="important-trip">
      <h2>Offers</h2>
      <div class="line"><span class="m-line"></span></div>
      <div class="box">
        <img src="images/pexels-photo-2034684.jpeg" alt="images" width="335px" height="340px">
        <div class="trip-span">
          <span>Luxor</span>
          <span>Steigenberger Nile Palace Hotel</span>
        </div>
        <div class="trip-span">
          <span>4 days / 3 nights.</span>
          <span>1500 EGP</span>
        </div>
       <button class="btn-click" onclick="document.location.href='home/Luxor/homeLuxor.php'">More</button>
      </div>
      <div class="box">
        <img src="images/pexels-photo-1755390.jpeg" alt="images" width="335px" height="340px">
        <div class="trip-span">
          <span>Aswan</span>
          <span>Tulip Hotel (formerly Helnan)</span>
        </div>
        <div class="trip-span">
          <span> 4 days / 3 nights.</span>
          <span> 2550 EGP</span>
        </div>
        <button class="btn-click" onclick="document.location.href='home/Aswan/homeAswan.php'">More</button>
      </div>
      <div class="box">
        <img src="images/nevaga_2-1024x1024-370x370.jpg" alt="images" width="335px" height="340px">
        <div class="trip-span">
          <span>Hergada</span>
        <span>Tropitel Sahl Hasheesh</span>
        </div>
        <div class="trip-span">
          <span>4 days / 3 nights.</span>
        <span>2400 EGP</span>
        </div>
        <button class="btn-click" onclick="document.location.href='home/Hurghada/homeHurghada.php'">More</button>
      </div>
      <div class="box">
        <img src="images/pexels-photo-3827576.jpeg" alt="images" width="335px" height="100%">
        <div class="trip-span">
          <span>Dahab</span>
        <span>Sheikh Ali Resort.</span>
        </div>
        <div class="trip-span">
          <span>4 days / 3 nights.</span>
        <span>1430 EGP</span>
        </div>
        <button class="btn-click" onclick="document.location.href='home/Dahab/homeDahab.php'">More</button>      </div>
      <div class="box">
        <img src="images/pexels-photo-1540108.jpeg" alt="images" width="335px" height="100%">
        <div class="trip-span">
          <span>Sharm El Shekh</span>
        <span>Grand Rotana Resort</span>
        </div>
        <div class="trip-span">
          <span> 4 days / 3 nights.</span>
        <span>1200 EGP</span>
        </div> 
        <button class="btn-click" onclick="document.location.href='home/Sharm El-Shaikh/homeSharm El-Shaikh.php'">More</button>      </div>
      <div class="box">
        <img src="images/131273365_849632279127931_5242121350027144087_n.jpg" alt="images" width="335px" height="100%">
        <div class="trip-span">
          <span>North Coast</span>
          <span>Porto Marina Resort</span>
        </div>
        <div class="trip-span">
          <span>3 days / 2 nights.</span>
          <span> 1665 EGP</span>
        </div>
        <button class="btn-click" onclick="document.location.href='home/North Coast/homeNorth Coast.php'">More</button>      </div>
    </section> <!--./important-trip-->

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
              <form action="ava.php" method="post">
              <div class="form-group" >
                <span class="form-label">Your Destination</span>
                <input class="form-control" type="text" placeholder="Enter a destination or hotel name" name="locHot">
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
<script src="js/script.js"></script>
</body>
</html>