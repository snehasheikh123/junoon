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
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Services</a>
                        <a href="privacy.php" class="nav-item nav-link">Privacy Policy</a>
                        <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->
                        <div class="nav-item dropdown">
                            <a href="Term.php" class="nav-item nav-link active"> Terms & Conditions</a>
                            <div class="dropdown-menu m-0">
                                <a href="rule.php" class="dropdown-item">Rules & Regulations</a>
                                <!-- <a href="product.html" class="dropdown-item">Our Product</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a> -->
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
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
                                    <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">Term & Conditions</h1>
                                    <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">we believe that every connection holds the potential to unlock new opportunities. Whether you’re an ambitious professional looking to advance your career, a business leader seeking to expand your network, or an entrepreneur ready to take your ideas to the next level, you’ve come to the right place.
                                    </p>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/main.jpg" class="img-fluid w-100" alt="Image">
                            <div class="carousel-caption-2">
                                <div class="carousel-caption-2-content" style="max-width: 900px;">
                                    <!-- <h4 class="text-white text-uppercase fw-bold mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">Your Gateway to Professional Growth and Business Success</h4> -->
                                    <h1 class="display-2 text-capitalize text-white mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1.3s" style="animation-delay: 1.3s;">Term & Conditions</h1>
                                    <p class="mb-5 fs-5 text-white fadeInRight animated" data-animation="fadeInRight" data-delay="1.5s" style="animation-delay: 1.5s;"> we believe that every connection holds the potential to unlock new opportunities. Whether you’re an ambitious professional looking to advance your career, a business leader seeking to expand your network, or an entrepreneur ready to take your ideas to the next level, you’ve come to the right place.
                                    </p>
                                    <!-- <div class="carousel-caption-2-content-btn fadeInRight animated" data-animation="fadeInRight" data-delay="1.7s" style="animation-delay: 1.7s;">
                                        <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Order Now</a>
                                        <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="#">Free Estimate</a>
                                    </div> -->
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

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text btn border p-3"><i class="fa fa-search text-white"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       


       
          
        
         
                <section class="departments">
                    <!-- <h2 class="dept">Other Departments at Jamia</h2><br> -->
        
                    <div class="department">
                        <center>
                            <h3>
                                TERMS AND CONDITIONS</h3><center>
                                    <br>
                       <p class="justify">These terms and conditions create a contract between you ("the user") and Infotel Services (herein after referred as "Infotel Services" or "we" or "us" "our"). Please read the Agreement carefully to confirm your understanding and acceptance of the Agreement. </p>
                    </div>
        
                    <div class="department with-image">
                        <div class="content">
                        <div>
                        <h3 style="padding: 10px;">INTRODUCTION TO OUR SERVICES</h3>
                                <p class="justify">This Agreement governs your use of Infotel Services's services ("Services"), through which you can buy, get, license, rent or subscribe to content, app ("Junoon"), and other in-app services (collectively, "Content"). Content may be offered through the Services by Infotel Services or a third party. Our Services are available to use by Indian resident only ("Home Country"). To use our Services, you need compatible hardware, software (latest version recommended and sometimes required) and Internet access (fees may apply). Our Services' performance may be affected by these factors. 
        </p>
                            </div>
                            <img src="img/introduction.jpg" alt="Tahzibul-Bayan">
                            
                        </div>
                    </div>
        
                    <div class="department with-image">
                        <div class="content">
                            <img src="img/tax1.jpg " alt="Tahzibul-Bayan">
                            <div>
                                <h3 style="padding: 5px;">PAYMENTS, TAXES, AND REFUNDS </h3>
                                <p class="justify">Infotel Services charge INR 1000 for registration and we offer 1000 coins as a registration bonus. Every 1 INR adding coins from customers equals to 2 coin for his/her account. Transaction is an electronic contract between you and Infotel Services, and/or you and the entity providing the Content on our Services. The Transactions are final. If technical problems prevent or unreasonably delay delivery of Content, your exclusive and sole remedy is either replacement of the Content or refund of the price paid, as determined by Infotel Services. From time to time, Infotel Services may refuse a refund request if we find evidence of fraud, refund abuse, or other manipulative behavior that entitles Infotel Services to a corresponding counterclaim. </p>
                            </div>
                        </div>
                    </div>
                    <div class="department with-image">
                        <div class="content">
                        <div>
                        <h3>Ecommerce Flow </h3>
                                <!-- <p class="justify"> -->
                                    
                                    <ol type=1>
                                        <p class="justify">
                             <li >users download our App: Junoo

                                              </li>
                             <li>
                          Register as a user  via short form filling. 
                                  </li>
                      <li>
                            Pay INR 1000 to complete the registration.
                          </li>
                            <li>

                       User will added after registration rewards(coins) and used to purchase via provided ecommerce link.
                                </li>
   
                                   <li>When user’s level upgrade user coins automatically increases and after prescribe coins addition user will redirected to purchase via ecommerce link through their coins provided by App. </li>
                             <li>
                               When Users level increases amount will be transferred to given account of user by Infotel Services.
                             2% TDS and 1% admin charge will be deducted.
                                       </li>

    
                                    </ol>

                                    
                            </div>
                            <!-- <img src="assets/images/pic7.jpg" alt="Tahzibul-Bayan">
                             -->
                        </div>
                    </div>
                    <div class="department with-image">
                        <div class="content">
                        <div>
                     <h3>PRICING </h3>
                                <p class="justify">
                                    In case of a process, complete the registration. After registration completing, you will receive welcome bonus coins which is added as a level upgradation. In order to participate in process you can pay India Rupee(₹) in the app through Bank card, UPI .

                                    Our coins are equivalent to rupees like two coins-for-one rupee but cannot be cashed. It is only used to purchase through provided link in App by Infotel Services.
                                    Terms & Conditions are verify, update and revised time to time by Infotel Services. 
                                </p>                                      
                                    
                                    
                            </div>
                            <!-- <img src="assets/images/pic7.jpg" alt="Tahzibul-Bayan">
                             -->
                        </div>
                    </div>
                    <div class="department with-image">
                        <div class="content">
                        <div>
                        <!-- <h3>Ecommerce Flow </h3> -->
                                <p class="justify">
                                    
                                
                                    Infotel Services ID using our Services and accessing your Content may require an Infotel Services ID. An Infotel Services ID is the account you use across Infotel Services's ecosystem. Your Infotel Services ID is valuable, and you are responsible for maintaining its confidentiality and security. Infotel Services is not responsible for any losses arising from the unauthorized use of your Infotel Services ID. Please contact Infotel Services if you suspect that your Infotel Services ID has been compromised. You must be age 18 (or equivalent minimum age in your Home Country, as set forth in the registration process) to create an Infotel Services ID and use our Services. Creation of Infotel Services IDs for persons under this age is not allowed. </p>
                            </div>

                            <!-- <img src="assets/images/pic7.jpg" alt="Tahzibul-Bayan">
                             -->
                        </div>
                        
                    </div>
                    
                </section>
            
        <style>
        .departments{
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
            /* background: #fff; */
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }
        /* main {
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        } */
        
        h2 {
            font-size: 2.5em;
            margin-bottom: 40px;
            color: #444;
           
            padding-bottom: 10px;
            letter-spacing: 2px;
        }
        
        .department {
            margin-bottom: 0px;
            padding: 40px;
            border-bottom: 1px solid #ddd;
        }
        
        .department:last-child {
            border-bottom: none;
        }
        
        h3 {
            font-family:  serif;
            font-size: 2em;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        
        p {
            line-height: 1.8;
            font-size: 17px;
            color: #555;
        }
        
        .with-image .content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }
        
        .with-image img {
            flex-shrink: 0;
            width: 400px;
            height:400px;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            margin-left: 20px;
            margin-top: 20px;
        }
        
        .with-image .content > div {
            flex: 1;
            margin-left: 20px;
        }
        
        @media (max-width: 768px) {
            .with-image .content {
                flex-direction: column;
                text-align: center;
            }
        
            .with-image img {
                margin: 20px 0;
                width: 100%;
            }
        
            h3 {
                font-size: 1.8em;
            }
        
            p {
                font-size: 1.1em;
            }
        }
        
        @media (max-width: 480px) {
            h2 {
                font-size: 1.8em;
            }
        
            h3 {
                font-size: 1.5em;
            }
        
            p {
                font-size: 1em;
            }
        
            .with-image img {
                width: 100%;
            }
        }
        .dept{
            border-bottom: 3px solid #1abc9c;
        }
        .justify{
            text-align: justify;
        }
        
        
        </style>
         
        
         
        
        
           <!-- /footer-->
           <!-- <?php include 'footer.php' ?> -->
          <!-- //footer -->
        
        
        
            <!-- Js scripts -->
            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                <span class="fas fa-level-up-alt" aria-hidden="true"></span>
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                    scrollFunction()
                };
        
                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }
        
                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- //move top -->
            <!-- Template JavaScript -->
            <script src="assets/js/jquery-3.3.1.min.js"></script>
            <script src="assets/js/theme-change.js"></script>
            <!-- disable body scroll which navbar is in active -->
            <script>
                $(function () {
                    $('.navbar-toggler').click(function () {
                        $('body').toggleClass('noscroll');
                    })
                });
            </script>
            <!-- disable body scroll which navbar is in active -->
        
            <!--/MENU-JS-->
            <script>
                $(window).on("scroll", function () {
                    var scroll = $(window).scrollTop();
        
                    if (scroll >= 80) {
                        $("#site-header").addClass("nav-fixed");
                    } else {
                        $("#site-header").removeClass("nav-fixed");
                    }
                });
        
                //Main navigation Active Class Add Remove
                $(".navbar-toggler").on("click", function () {
                    $("header").toggleClass("active");
                });
                $(document).on("ready", function () {
                    if ($(window).width() > 991) {
                        $("header").removeClass("active");
                    }
                    $(window).on("resize", function () {
                        if ($(window).width() > 991) {
                            $("header").removeClass("active");
                        }
                    });
                });
            </script>
            <!--//MENU-JS-->
            <script src="assets/js/bootstrap.min.js"></script>
        
        </body>
        </html>

        
         <!-- Testimonial Start -->
<div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Testimonials</h4>
            <h1 class="display-3 text-capitalize mb-3">Our clients reviews.</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
            <div class="testimonial-item text-center p-4">
                <p>A seamless networking app that connects professionals effortlessly, making collaboration and opportunities just a tap away.
                </p>
                <div class="d-flex justify-content-center mb-4">
                    <img src="img/client1.jpeg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                </div>
                <div class="d-block">
                    <h4 class="text-dark">Aamir Junaid Ahmad</h4>
                    <p class="m-0 pb-3">Profession</p>
                    <div class="d-flex justify-content-center text-secondary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center p-4">
                <p>An intuitive networking app that makes building professional connections and accessing opportunities simple and effective.
                </p>
                <div class="d-flex justify-content-center mb-4">
                    <img src="img/client5.jpeg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                </div>
                <div class="d-block">
                    <h4 class="text-dark">Rabqa</h4>
                    <p class="m-0 pb-3">Profession</p>
                    <div class="d-flex justify-content-center text-secondary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center p-4">
                <p>A user-friendly networking app that simplifies creating professional connections and unlocking new opportunities.
                </p>
                <div class="d-flex justify-content-center mb-4">
                    <img src="img/client3.jpeg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                </div>
                <div class="d-block">
                    <h4 class="text-dark">Zaid</h4>
                    <p class="m-0 pb-3">Profession</p>
                    <div class="d-flex justify-content-center text-secondary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center p-4">
                <p>A smart networking app that makes it easy to forge connections and discover new professional opportunities.
                </p>
                <div class="d-flex justify-content-center mb-4">
                    <img src="img/client4.jpeg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                </div>
                <div class="d-block">
                    <h4 class="text-dark">Ashwin</h4>
                    <p class="m-0 pb-3">Profession</p>
                    <div class="d-flex justify-content-center text-secondary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

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