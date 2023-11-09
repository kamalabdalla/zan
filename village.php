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
                    <h1 class="display-4 text-white animated zoomIn">CULTURAL VILLAGE TOUR</h1>
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
                        <img class="img-fluid w-100 rounded mb-5" src="img/tour/villag.png" alt="">
                        <h1 class="mb-4">CULTURAL VILLAGE TOUR</h1>
                        <p> 
                        Direction le nord de l’île pour découvrir la vie des pêcheurs locaux : entretien
ou mise à l’eau des bateaux de pêche, fabrication des clous ou réparation des
filets etc.
Après la visite du village, vous passerez l’après-midi à la plage et vous pouvez
également profiter si vous le souhaitez de quelques activités nautiques sur
place.
                    </p>
                        
                    </div>
                    <!-- Blog Detail End -->
     <!-- Comment Form Start -->
    <!-- <div class="bg-light rounded p-5">-->
    <!--    <div class="section-title section-title-sm position-relative pb-3 mb-4">-->
    <!--        <h3 class="mb-0">Leave Your Comments</h3>-->
    <!--    </div>-->
    <!--    <form>-->
    <!--        <div class="row g-3">-->
    <!--            <div class="col-12 col-sm-6">-->
    <!--                <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">-->
    <!--            </div>-->
    <!--            <div class="col-12 col-sm-6">-->
    <!--                <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">-->
    <!--            </div>-->
    <!--            <div class="col-12">-->
    <!--                <input type="text" class="form-control bg-white border-0" placeholder="Service" style="height: 55px;">-->
    <!--            </div>-->
    <!--            <div class="col-12">-->
    <!--                <textarea class="form-control bg-white border-0" rows="5" placeholder="Descriptions"></textarea>-->
    <!--            </div>-->
    <!--            <div class="col-12">-->
    <!--                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Message</button>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </form>-->
    <!--</div>-->
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