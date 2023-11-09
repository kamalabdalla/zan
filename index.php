
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

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/tour/lango.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome Zanzibar</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Zanzibar African Tour's</h1>
                            <a href="transfer.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Request Services</a>
                            <a href="contact.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/tour/lango1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Zanzibar Island</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn"></h1>
                            <a href="transfer.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Request Services</a>
                            <a href="contact.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy our Tours</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">25000</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Packages</h5>
                            <h1 class="mb-0" data-toggle="counter-up">130</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Destinations</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">201</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-2">
                        <h5 class="fw-bold text-primary text-uppercase">Africom Tours</h5>
                        <h1 class="mb-0">
                            100% Satisfaction With Our Services</h1>
                    </div>
                    <p class="mb-4">Welcome to Africom Tours and safar, your trusted Zanzibar tour 
                        operator. We are dedicated to providing exceptional travel experiences that ensure
                         100% satisfaction for our clients. With our extensive knowledge and expertise
                          in Zanzibar and its surrounding different areas, 
                        we offer a wide range of services tailored to meet your travel needs.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Reliable Tour Package</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+255 777 641 126</h4>
                        </div>
                    </div>
                    <a href="transfer.php" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Services</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/tour/pwan.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-1 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <!-- <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1> -->
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>

                            </div>
                            <h4>We Are Trusted Tour Operator</h4>
                            <p class="mb-0">
                                100% Trust worthy Tour Operator, Satisfaction & trust. Reliable for unforgettable experiences.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>

                            </div>
                            <h4>Tour Guide</h4>
                            <p class="mb-0">We have enough experiance and knowledges of quiding tours in different areas</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/tour/car2.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Professional Guides</h4>
                            <p class="mb-0">
                                Professional 
                                Expert guides enrich your trip with unmatched knowledge and passion</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p class="mb-0">We provide full suport, any time can call us, we are waiting you and to give our suport</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

     <!-- Blog Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/tour/blue1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="safarblue.php">Book Now</a>
                        </div>
                        <div class="p-4">
                           
                            <h4 class="mb-3">Safar Blue</h4>
                            <p>Safari blue is a whole day trip that starts from Fumba, the perfect starting point to explore Menai Bay...</p>
                            <a class="text-uppercase" href="safarblue.php">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/tour/mnemba1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="mnemba.php">Book Now</a>
                        </div>
                        <div class="p-4">
 
                            <h4 class="mb-3">Mnemba Island</h4>
                            <p>If you made a choice to Snorkeling on Zanzibar, Mnemba Atoll is obviously a must! It is the most famous Conservation area</p>
                            <a class="text-uppercase" href="mnemba.php">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/tour/spice1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="spice.php">Book Now</a>
                        </div>
                        <div class="p-4">
                            
                            <h4 class="mb-3">Spices Tours</h4>
                            <p>On this full day, you will get to have quite the experience. You will start your tour in the beautiful city of Stone Town...</p>
                            <a class="text-uppercase" href="spice.php">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/tour/sand1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="sandbank.php">Book Now</a>
                        </div>
                        <div class="p-4">
                             
                            <h4 class="mb-3">SandBank Nakupenda</h4>
                            <p>After a pickup at your hotel, you’ll start this fun day with a visit to Prison island Also Known As Changuu Island...</p>
                            <a class="text-uppercase" href="sandbank.php">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/tour/aquarium.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="baraka.php">Book Now</a>
                        </div>
                        <div class="p-4">
                            
                            <h4 class="mb-3">Baraka Natural Aquarium</h4>
                            <p>Your program will start in the morning as soon as you finish your breakfast at 9:30 am you will be picked from the hotel...</p>
                            <a class="text-uppercase" href="baraka.php">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/tour/cave1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="cave.php">Book Now</a>
                        </div>
                        <div class="p-4">
                            
                            <h4 class="mb-3">Kuza Cave Culture</h4>
                            <p>Get adventure experiance ,snorkling diving and swimming ,the cave is 50 metre round sink hole in the middle of...</p>
                            <a class="text-uppercase" href="cave.php">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Blog Start -->
    

    <!-- Service Start -->
    <div class="container-fluid py-1 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Packages</h5>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                           <a href="holiday.php"><i class="fa fa-search text-white"></i></a> 
                        </div>
                        <h4 class="mb-3">Zanzibar Holidays</h4>
                        <p class="m-0">4 Days Zanzibar Holidays packages</p>
                        <a class="btn btn-lg btn-primary rounded" href="holiday.php">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                         <a href="mikum1.php"><i class="fa fa-search text-white"></i></a>
                        </div>
                        <h4 class="mb-3">Mikumi National Park</h4>
                        <p class="m-0">2 days 1 night in mikumi national park</p>
                        <a class="btn btn-lg btn-primary rounded" href="mikum1.php">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                           <a href=""> <i class="fa fa-search text-white"></i></a>
                        </div>
                        <h4 class="mb-3">Serengeti & Ngorongoro Crater</h4>
                        <p class="m-0">3 Days Serengeti & Ngorongoro Crater</p>
                        <a class="btn btn-lg btn-primary rounded" href="Serengeti.php">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                           <a href="deep.php"> <i class="fa fa-search text-white"></i></a>
                        </div>
                        <h4 class="mb-3">DEEP SEA FISHING</h4>
                        <p class="m-0">Our Half Day Zanzibar Fishing Charter</p>
                        <a class="btn btn-lg btn-primary rounded" href="deep.php">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                           <a href="jozan.php"><i class="fa fa-search text-white"></i></a> 
                        </div>
                        <h4 class="mb-3">JOZANI FOREST</h4>
                        <p>Jozan Forest And The Rock Restaurant</p>
                        <a class="btn btn-lg btn-primary rounded" href="jozan.php">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                           <a href="baraka.php"> <i class="fa fa-search text-white"></i></a>
                        </div>
                        <h4 class="mb-3">Turtles Natural Aquarimu</h4>
                        <p class="m-0">Zanzibar is the best turtles aquarium to enjoy </p>
                        <a class="btn btn-lg btn-primary rounded" href="baraka.php">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
    <!-- Service End -->

 

<!-- 
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Faverity Destinations</h5>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-2">
                        <img class="img-fluid rounded" src="img/tour/blue1.jpg" style="width: 100%; height: 100%;" >
                        
                     
                </div>
                
                <div class="testimonial-item bg-light my-2">
                        <img class="img-fluid rounded" src="img/tour/aquarium.jpg" style="width: 100%; height: 100%;" >
                        
                     
                </div>
                <div class="testimonial-item bg-light my-2">
                        <img class="img-fluid rounded" src="img/tour/pungume1.jpg" style="width: 100%; height: 100%;" >
                        
                     
                </div>
                <div class="testimonial-item bg-light my-2">
                        <img class="img-fluid rounded" src="img/tour/mnemba1.jpg" style="width: 100%; height: 100%;" >
                        
                     
                </div>
                
            </div>
        </div>
    </div> -->
 
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