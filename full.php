 <?php 
include("./include/header.php");
?> 

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
  
    
       <?php 
include("./include/topbar.php");
?> 
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        
       
         <?php
      include("./include/navbar.php");
      ?>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">FULL DAY SAFARI</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">About</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    
       <!-- Blog Start -->
       <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="img/tour/full.jpg" alt="">
                        <h1 class="mb-4">FULL DAY SAFARI FROM ZANZIBAR ISLAND TO MIKUMI NATIONAL PARK</h1>
                        <p>

  Early in the morning our driver will pick you up from your home in Zanzibar and take you to the
  Airport to catch your flight to Mikumi which departs at 07:00 and arrives at Mikumi Park at 08:10.  
  Arriving at Mikumi, you will meet your driver/guide and start a jeep/4x4 landcruiser safari, you will break for breakfast around 10am, 
  then continue the journey until 1pm for lunch inside the park,  then finish the safari.  At the end of a safari, our guide will assist you 
  to the airstrip where you will meet your flight back to Zanzibar.  Arrive in Zanzibar and the driver will be ready to pick you up from your hotel.
<p> 🦒END OF SERVICES🦓</p>
<p> #DATES AVAILABLE</p>
<p>  $ INCLUDED</p>
<p>  ✅ Hotel pickup and drop-off</p>
 
 
<p>  ✅ starters</p>
<p>  ✅return plane tickets
    </p>
    <p>  ✅meals/drinks</p>

  <p>  ✅driver's guide</p> 
                        
                    </div>
                    <!-- Blog Detail End -->
     <!-- Comment Form Start -->
 
       <?php
      include("./include/booking.php");
      ?>
    <!-- Comment Form End -->
</div>

<!-- Sidebar Start -->
<div class="col-lg-4">
  
    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
        <div class="section-title section-title-sm position-relative pb-3 mb-4">
            <h3 class="mb-0">Other Destinations</h3>
        </div>
        <div class="d-flex rounded overflow-hidden mb-3">
            <img class="img-fluid" src="img/tour/mnemba1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
            <a href="snork.php" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">STARFISH TRIP
            </a>
        </div>
        <div class="d-flex rounded overflow-hidden mb-3">
            <img class="img-fluid" src="img/tour/prison1.PNG" style="width: 100px; height: 100px; object-fit: cover;" alt="">
            <a href="prison.php" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">PRISON ISLAND
            </a>
        </div>
        <div class="d-flex rounded overflow-hidden mb-3">
            <img class="img-fluid" src="img/tour/tumbat.PNG" style="width: 100px; height: 100px; object-fit: cover;" alt="">
            <a href="tumbat.php" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">TUMBATU ISLAND
            </a>
        </div>
        <div class="d-flex rounded overflow-hidden mb-3">
            <img class="img-fluid" src="img/tour/dolphin.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
            <a href="dolphin.php" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">DOLPHINS TOUR
            </a>
        </div>
        <div class="d-flex rounded overflow-hidden mb-3">
            <img class="img-fluid" src="img/tour/cave.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
            <a href="maalum.php" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Maalum Cave
            </a>
        </div>
        
    </div>
    <!-- Recent Post End -->

    <!-- Image Start -->
    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
        <img src="img/tour/mbug.jpeg" alt="" class="img-fluid rounded">
    </div>
    <!-- Image End -->

       
    
</div>
<!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <?php
      include("./include/whatsap.php");
      ?>
      
      
     <!-- Footer Start -->
       <?php
      include("./include/footer.php");
      ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>