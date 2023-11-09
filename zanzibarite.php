<?php 
include("./include/header.php");
?> 
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
   
    <!-- Topbar Start -->
    <!--<div class="container-fluid bg-dark px-5 d-none d-lg-block">-->
    <!--    <div class="row gx-0">-->
    <!--        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">-->
    <!--            <div class="d-inline-flex align-items-center" style="height: 45px;">-->
    <!--                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Nungwi, Zanzibar, Tz</small>-->
    <!--                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+255 772 754 417</small>-->
    <!--                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>zanzibarafricomtours@gmail.com</small>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-4 text-center text-lg-end">-->
    <!--            <div class="d-inline-flex align-items-center" style="height: 45px;">-->
    <!--                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.tripadvisor.com/Attraction_Review-g8055401-d26183252-Reviews-Zanzibar_Africom_Tour-Zanzibar_City_Zanzibar_Island_Zanzibar_Archipelago.php"><i class="fab fa-tripadvisor fw-normal"></i></a>-->

    <!--                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>-->
    <!--                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/Medynungwisafari?mibextid=b06tZ0"><i class="fab fa-facebook-f fw-normal"></i></a>-->
    <!--                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
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
                    <h1 class="display-4 text-white animated zoomIn">de cuisine
zanzibarite</h1>
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
                        <img class="img-fluid w-100 rounded mb-5" src="img/tour/zan.png" alt="">
                        <h1 class="mb-4">Le cours de cuisine
zanzibarite</h1>
                        <p>
                        Nous vous proposons un petit cours de cuisine locale.
Après une visite au marché pour acheter la nourriture, les épices, les fruits et
tous les ingrédients nécessaires pour la préparation des plats, rendez-vous
chez une famille zanzibarite avec qui vous préparerez les plats choisis.
Et pour parachever l’expérience, une dégustation en famille est bien sûr prévue !

</p>
                        
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

       
    <!-- Plain Text Start -->
    <!-- <div class="wow slideInUp" data-wow-delay="0.1s">
        <div class="section-title section-title-sm position-relative pb-3 mb-4">
            <h3 class="mb-0">Plain Text</h3>
        </div>
        <div class="bg-light text-center" style="padding: 30px;">
            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
            <a href="" class="btn btn-primary py-2 px-4">Read More</a>
        </div>
    </div> -->
    <!-- Plain Text End -->
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