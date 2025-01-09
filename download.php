<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Acuas - Drinking Water Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
         
            .box {
                max-width: 1000px;
                margin: auto;
                padding: 20px;
                border: 2px solid #ccc;
                border-radius: 10px;
                text-align: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
    
            .screenshot {
                display: flex;
                justify-items: center;
                justify-content: space-between;
                padding: 20px;
            }
    
            .screenshot img {
                border-radius: 5px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
    
            .download-btn {
                display: inline-block;
                padding: 10px 20px;
                font-size: 20px;
                width: 250px;
                color: #fff;
                background-color: #007bff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                text-decoration: none;
                transition: background-color 0.3s ease;
            }
    
            .download-btn:hover {
                background-color: #0056b3;
            }
    
            @media (max-width: 600px) {
                .box {
                    padding: 15px;
                }
    
                .screenshot {
                    flex-direction: column;
                }
    
                .screenshot img {
                    max-width: 100%;
                }
    
                .download-btn {
                    width: 100%;
                    padding: 15px;
                }
            }
            .down{
                padding: 80px;
            }
            .diff{
                display: flex;
                
            }
            .user{
                border: 1px solid #ddd;
            }
            .box2 {
                max-width: 1000px;
                margin: auto;
                padding: 20px;
                border: 2px solid #ccc;
                border-radius: 10px;
                text-align: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            @media (max-width: 600px) {
               
                .down{
                    padding: 10px;
                }
                .user{
                    padding: 5px;
                }
            }
        </style>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
           <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary"></i><img src="img/Logo.png"></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Services</a>
                        <a href="privacy.php" class="nav-item nav-link">Privacy Policy</a>
                        <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->
                        <div class="nav-item dropdown">
                            <a href="Term.html" class="nav-item nav-link"> Terms & Conditions</a>
                            <div class="dropdown-menu m-0">
                                <a href="rule.html" class="dropdown-item">Rules & Regulations</a>
                                <!-- <a href="product.html" class="dropdown-item">Our Product</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a> -->
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <!-- <div class="d-none d-xl-flex me-3">
                        <div class="d-flex flex-column pe-3 border-end border-primary">
                            <span class="text-body">Get Free Delivery</span>
                            <a href="tel:+4733378901"><span class="text-primary">Free: + 0123 456 7890</span></a>
                        </div>
                    </div> -->
                    <button class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                    <a href="download.php" class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Get App</a>
                </div>
            </nav>

            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="img/main.jpg" class="img-fluid w-100" alt="Image">
                            <div class="carousel-caption-1">
                                <div class="carousel-caption-1-content" style="max-width: 900px;">
                                    <!-- <h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">Importance life</h4> -->
                                    <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">Download the <br>app now</h1>
                                    <!-- <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">The Privacy Policy is designed to explain how Infotel Services”we”, “Junoon”） deal with User’s personal information when the User use any Junoon’s service. We are committed to protecting User’s privacy.  -->
                                    </p>
                                    <div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
                                        <!-- <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Order Now</a>
                                        <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="#">Free Estimate</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/main.jpg" class="img-fluid w-100" alt="Image">
                            <div class="carousel-caption-2">
                                <div class="carousel-caption-2-content" style="max-width: 900px;">
                                    <!-- <h4 class="text-white text-uppercase fw-bold mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">Your Gateway to Professional Growth and Business Success</h4> -->
                                    <h1 class="display-2 text-capitalize text-white mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1.3s" style="animation-delay: 1.3s;">Download the <br>app now</h1>
                                    <!-- <p class="mb-5 fs-5 text-white fadeInRight animated" data-animation="fadeInRight" data-delay="1.5s" style="animation-delay: 1.5s;">We will never sell or otherwise pass on User’s privacy information to a third party without User’s consent besides when it is required to provide User the service User is using. Junoon is required to use the personal data of all the Users in accordance with the applicable laws of the land where the games are being played by the Users.  -->
                                    </p>
                                    <div class="carousel-caption-2-content-btn fadeInRight animated" data-animation="fadeInRight" data-delay="1.7s" style="animation-delay: 1.7s;">
                                        <!-- <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Order Now</a>
                                        <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="#">Free Estimate</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"> <i class="fa fa-angle-left fa-3x"></i></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fa fa-angle-right fa-3x"></i></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->


    <section class="down">
        <div class="department">
            <center>
                <h3>
                   App Reviews </h3><center>
                        <br>
           
        </div>
        <div class="box">
            <div>
                <button class="download-btn">Download Apk 
                
                (<?php
                       // include 'header.php';
                        include 'config.php';
                        //It will increment the value by 1 Table visitors and column is visit
                        //update visitors set visit=visit + 1
                        $sql="update download set counters=counters + 1";
                        $conn->query($sql);

                   
                    
                            $sql="select counters from download";
                            $result=$conn->query($sql);
                            $row=$result->fetch_assoc();
                            $cnt=$row['counters'];
                            echo $cnt;
                ?>)
                   </button>
            </div>
            <div class="screenshot">
                <img src="img/down1.jpg" class="img-fluid rounded " style="object-fit: cover; height: 400px; width: 300px" alt="">
                <img src="img/down2.jpg" class="img-fluid rounded " style="object-fit: cover;" alt="">
                <img src="img/down3.jpg" class="img-fluid rounded " style="object-fit: cover;" alt="">                
            </div>
            <div class="screenshot">
                <img src="img/snap4.jpg" class="img-fluid rounded " style="object-fit: cover;" alt="">
                <img src="img/snap5.jpg" class="img-fluid rounded"  style="object-fit: cover;" alt="">
                <img src="img/snap6.jpg" class="img-fluid rounded " style="object-fit: cover;" alt="">                
            </div>
            <div class="screenshot">
                <img src="img/snap7.jpg" class="img-fluid rounded " style="object-fit: cover;" alt="">
                <img src="img/snap8.jpg" class="img-fluid rounded " style="object-fit: cover;" alt="">
                <img src="img/snap9.jpg" class="img-fluid rounded " style="object-fit: cover;" alt="">                
            </div>
            <div class="screenshot">
                <img src="img/snap10.jpg" class="img-fluid rounded " style="object-fit: cover;" alt="">
                <img src="img/snap11.jpg" class="img-fluid rounded " style="object-fit: cover;" alt="">
                <img src="img/snap12.jpg" class="img-fluid rounded " style="object-fit: cover;" alt="">                
            </div>
            
        </div>
       
    </section>  
<hr>
    
    <section class="down">
        
        <div class="box2">
            <div class="department" style="padding: 20px;">
                <center><h2 > Junoon process ( How to join and how it works) </h2><center>
            </div>
            
            <div class="diff">
                <div class="user">
                    <h3 style="padding: 25px;">“STEPS TO DO BY NEW USER”</h3>
                    <ul class="list">
                        <li>	Download the “Junoon” app from play store in your mobile.</li>
                        <li>	First page shows the video of whole process to join and a “Login” button to click to move ahead.</li>
                        <li>	New user in Junoon click on “New user”.</li>
                        <li>	 Fill the information as per given field like Your Name, Referral Id(123456), your user name, password and after accepting the Terms & conditions click the “sign up” button.</li>
                        <li>	When payment successfully done your Referral ID generated and now you are registered in Junoon.</li>
                        <li>	Send your Referral ID to three person through SMS, whatsapp etc who also want to earn handsome income like you from this smart process.</li>
                        <li>	With your Referral ID three Down-line also need to join, till then you have not stop.</li>
                        <li>	When three joins in your Down-line means your level is one-up and your income will start. </li>
                        <li>	Now sit back and see only the dashboard and get the income on every level up.</li>
                    </ul>            
                </div>
                <div class="user">
                    <h3 style="padding: 10px;">“STEPS TO DO BY NEW USER”( WHO HAS REFERRED BY SOMEONE)</h3>
                    <ul class="list">
                        <li>	Download the “Junoon” app from play store in your mobile.</li>
                        <li>	First page shows the video of whole process to join and a “Login” button to click to move ahead. </li>
                        <li>	New user in Junoon click on “New user”.</li>
                        <li>	 Fill the information as per given field like Your Name, Referral Id(Referral ID given by someone), your user name, password and after accepting the Terms & conditions click the “sign up” button.</li>
                        <li>	When payment successfully done your Referral ID generated and now you are registered in Junoon.</li>
                        <li>	Send your Referral ID to three person through SMS, whatsapp etc who also want to earn handsome income like you from this smart process.</li>
                        <li>	With your Referral ID three Down-line also need to join, till then you have not stop.</li>
                        <li>	When three joins in your Down-line means your level is one-up and your income will start. </li>
                        <li>	Now sit back and see only the dashboard and get the income on every level up.</li>
                    </ul>       
                </div>
            </div>  
        </div>
       
    </section>
     <!-- Footer Start -->
     <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5 mb-5 align-items-center">
                <div class="col-lg-7">
                    <div class="position-relative mx-auto">
                        <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Email address to Subscribe">
                        <button type="button" class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <div class="footer-item">
                            <h3 class="text-white mb-4"><i ><img src="img/Logo.png" height="40px" width="150px"></i></h3>
                            <p class="mb-3" style="text-align: justify;" >We offer modern solutions for growing your incomes. We are team of talented designers who making services with e-Commerce to Boost-up solutions for every struggling Indians.</p>
                        </div>
                        <div class="position-relative">
                            <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                            <button type="button" class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Home</h4>
                        <!-- <a href="#"><i class="fas fa-angle-right me-2"></i> 
                            Who We Are</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> 
                            Our Purpose</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> What We Offer</a>
                        
                       -->
                       <a href="index.php"><i class="fas fa-angle-right me-2"></i>Home</a>
                           <a href="about.php"><i class="fas fa-angle-right me-2"></i>About</a>
                            <a href="service.php"><i class="fas fa-angle-right me-2"></i>Services</a>
                            <a href="privacy.php"><i class="fas fa-angle-right me-2"></i>Privacy</a>
                            <a href="Term.php"><i class="fas fa-angle-right me-2"></i>Term & Conditions</a>
                            <a href="contact.php"><i class="fas fa-angle-right me-2"></i>Contact</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Business Hours</h4>
                        <div class="mb-3">
                            <h6 class="text-muted mb-0">Mon - Friday:</h6>
                            <p class="text-white mb-0">09.00 am to 05.00 pm</p>
                        </div>
                        <!-- <div class="mb-3">
                            <h6 class="text-muted mb-0">Saturday:</h6>
                            <p class="text-white mb-0">10.00 am to 05.00 pm</p>
                        </div> -->
                        <div class="mb-3">
                            <!-- <h6 class="text-muted mb-0">Vacation:</h6> -->
                            <!-- <p class="text-white mb-0">All Sunday is our vacation</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <a href="#"><i class="fa fa-map-marker-alt me-2"></i>Patna , Bihar</a>
                        <!-- <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> info@example.com</a> -->
                        <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> Infotelservices.pat@gmail.com</a>
                        <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i> +91 9431074601</a>
                        <!-- <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Junoon</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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