<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HOMLAND-GROUP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Playfair+Display:400,700,900 " rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
   <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.php" class="mb-0"><img class="img-fluid" src="images/logohomeland.jpg"></a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#properties-section" class="nav-link">Properties</a></li>
                <!-- <li><a href="#agents-section" class="nav-link">Management</a></li> -->
                <li><a href="#agents-section" class="nav-link">About</a></li>
                <li><a href="#news-section" class="nav-link">Offers</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
    
    <div class="site-blocks-cover overlay" style="background-image: url(images/offer4homeland.jpg);" data-aos="fade" id="home-section">


      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-lg-5 text-center">
            <h1 style="color: #f69314; height: 300px; "><img style=" height: 400px;" src="images/Homland_Logo.png" class="img-fluid"></h1>
            <h1>Buy and sell real estate properties</h1>
            <h2 class="" style="color:#f69314; font-family:cursive; text-shadow:2px 1px black;"> where comfort meets luxury.</h2>
            
          </div>
        </div>
      </div>

      <a href="#properties-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>  

    
   <!--  <div class="py-5 bg-light site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3">How It Works</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-house text-primary"></span>
              <h3 class="text-dark">Find Property.</h3>
              <p>We Help You Find a Property From Our Arrays of Estate Properties in Favourable Locations To Suit Your Very Desire</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-coin text-primary"></span>
              <h3 class="text-dark">Buy Property.</h3>
              <p>Buy a Property From Our Arrays of Estate Properties in Favourable Locations To Suit Your Very Desire.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-home text-primary"></span>
              <h3 class="text-dark">Make Investment.</h3>
              <p>A Property From Homeland is an Investment For The Future as Your Property Appreciates In Value The Very Day You Make Payment.</p>
            </div>
          </div>
        </div>
      </div>  
    </div> -->

    <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row mb-2 align-items-center">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb">Our Best Selling</h2>
          </div>
         
        </div>

        <div class="owl-carousel nonloop-block-13 mb-5">


          <?php
          include_once "homland/admin.php";
          //create object 

          $obj = new Admin();
          //reference
          $prop =$obj->Prop();

          //check if there are products
          if (count($prop)> 0) {
            // loop through 

            foreach ($prop as $key => $value) {
              // code...

              $propid = $value['PROP_ID'];

              $proptitle = $value['TITLE'];
          


          ?>


          <div class="property">
            <form method="post" action="property-single.php?title<?php echo $value['TITLE']?> " id="">
            <button type="submit" id="btn" name="image" class="" style="border-color: transparent; border: 1px ;">
              <img src="images/<?php echo $value['PICTURES']?>" alt="Image" class="img-fluid">
            </button>
            <div class="prop-details p-3">
              <div><bold class="price"><?php echo $value['TITLE']?></bold></div>
              <div><strong class="price"><b>&#8358</b><?php echo number_format ($value['PRICE'])?></strong></div>
              <div class="mb-2 d-flex justify-content-between">
                <span class="w border-r">Selling</span> 
                <span class="w border-r">Per-Plot</span>
                <span class="w"><?php echo $value['SIZE']?></span>
              </div>
              <div><i class="flaticon-location text-primary"></i> <?php echo $value['LOCATION']?></div>
            </div>
              <input type="hidden" name="propid" value="<?php echo $value['PROP_ID']?>">
            <input type="hidden" name="title" value="<?php echo $value['TITLE']?>">
              <input type="hidden" name="picture" value="<?php echo $value['PICTURES']?>">
                <input type="hidden" name="price" value="<?php echo $value['PRICE']?>">
                  <input type="hidden" name="size" value="<?php echo $value['SIZE']?>">
                    <input type="hidden" name="location" value="<?php echo $value['LOCATION']?>">
                      <input type="hidden" name="description" value="<?php echo $value['DESCRIPTION']?>">

          </form>
          </div>
          <?php

            }

          }


          ?>
         

         



        </div>
            <div class="col-md-5 text-left text-md-right">
            <div class="custom-direction">
              <a href="#" class="custom-prev1">Prev</a><a href="#" class="custom-next1">Next</a>
            </div>
          </div>

      <!--   <div class="row justify-content-center">
          <div class="col-md-4">
            <a href="listings.html" class="btn btn-primary btn-block">View All Property</a>
          </div>
        </div> -->
      </div>
    </div>

    
    <section class="site-section border-bottom" id="agents-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">Management-Board</h2>
            <p class="lead">Meet Our Team Of Professionals.</p>
          </div>
        </div>
        <div class="row">
          

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/CEOHOMELAND.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3 class="mb-2">Nelson Nwamara</h3>
                <span class="position">CEO</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/offer6homeland (3).jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3 class="mb-2">Celebrity Realtor</h3>
                <span class="position">Director</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/realtor.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3 class="mb-2">Celebrity Realtor</h3>
                <span class="position">Estate Agent</span>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </section>


    <section class="site-section" id="about-section">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-6">

            <div class="owl-carousel slide-one-item-alt">
              <img src="images/offer2homeland.jpg" alt="Image" class="img-fluid">
              <img src="images/offer3homeland.jpg" alt="Image" class="img-fluid">
              <img src="images/offer4homeland.jpg" alt="Image" class="img-fluid">
              <img src="images/offer5homeland.jpg" alt="Image" class="img-fluid">
              <!-- <img src="images/offer6homeland (1).jpg" alt="Image" class="img-fluid"> -->
            </div>
            <div class="custom-direction">
              <a href="#" class="custom-prev">Prev</a><a href="#" class="custom-next">Next</a>
            </div>

          </div>
          <div class="col-lg-6 ml-auto">
            
            <h2 class="section-title mb-3">HOMLAND Is The Best Selling RealEstate Company</h2>
                <p class="lead">THIS IS FOR DESCRIPTION.THIS IS FOR DESCRIPTION, THIS IS FOR DESCRIPTION</p>
                <p>THIS IS FOR FUTHER DESCRIPTION, THIS IS FOR FURTHER DESCRIPTION THIS IS FOR FURTHER DESCRIPTION THIS IS FOR FURTHER DESCRIPTION
                THIS IS FOR FURTHER DESCRIPTION
              THIS IS FOR FURTHER DESCRIPTION</p>

                <ul class="list-unstyled ">
                  <li><i class="fa-solid fa-road-circle-check"></i> Good Roads</li>
                  <li><i class="fa-solid fa-lamp-street"></i> Street Lights</li>
                  <li><i class="fa-solid fa-pipe-valve"></i> Good Drainage</li>
                  <li><i class="fa-solid fa-fence"></i> Perimeter Fencing</li>
                  <li><i class="fa-solid fa-plug-circle-check"></i> Electricity</li>
                  <li><i class="fa-solid fa-camera-security"></i> 100% Security</li>

                </ul>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                <div class="p-4 mb bg-white">
              <p class="mb-0 font-weight-bold">Head Office</p>
              <p class="mb-4"><i class="flaticon-location" style="color:#f69314"></i> SUITE 19, TONIMAS PlAZA IFITE, IFITE AWKA,NIGERIA, 420112</p>

                <p class="mb-0 font-weight-bold">Branch Office</p>
              <p class="mb-4"><i class="flaticon-location" style="color:#f69314"></i> SUITE AB, DAN ALEX PLAZA BESIDE FRSC, ASABA,DELTA STATE</p>

                <p class="mb-0 font-weight-bold"> SITE INSPECTION </p>
              <p class="mb-4">SITE INSPECTION TAKES PLACE TUE-SAT | <span style="color:#f69314">1AM-3PM</span></p>



              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+234 8063 53 9271</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">curious@homlandgroup.com</a></p>

            </div>
            
          </div>
      
          
        </div>
      </div>
    </section>

    

    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Our Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-house"></span></div>
              <div>
                <h3>Search Property</h3>
               <p>We Help You Find a Property From Our Arrays of Estate Properties in Favourable Locations To Suit Your Very Desire</p>
                <!-- <p><a href="#">Learn More</a></p> -->

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-coin"></span></div>
              <div>
                <h3>Buy Property</h3>
               <p>Buy a Property From Our Arrays of Estate Properties in Favourable Locations To Suit Your Very Desire.</p>

                <!-- <p><a href="#">Learn More</a></p> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-home"></span></div>
              <div>
                <h3>Invest in Home</h3>
             <p>A Property From Homeland is an Investment For The Future as Your Property Appreciates In Value The Very Day You Make Payment.</p>

                <!-- <p><a href="#">Learn More</a></p> -->
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>

  <!--   <section class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">People Says...</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Christine Aguilar</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Robert Spears</p>
              </figure>

              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>

        </div>
    </section> -->

    
    <section class="site-section" id="news-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Offers &amp; Events</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/offer5homeland.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.php" class="text-dark">20+ Real Properties for Realtors</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">Offer</a></div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.php"><img src="images/offer2homeland.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.php" class="text-dark">20+ Real Properties for Realtors</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.php">Offer</a></div>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.php"><img src="images/offer3homeland.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.php" class="text-dark">20+ Real Properties for Realtors</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.php">Offer</a></div>
            </div> 
          </div>
          
        </div>
      </div>
    </section>

   


    <section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <!-- <h3 class="section-sub-title">Get</h3> -->
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

             

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
     <!--      <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Head Office</p>
              <p class="mb-4"><i class="flaticon-location" style="color:#f69314"></i> SUITE 19, TONIMAS PlAZA IFITE, IFITE AWKA,NIGERIA, 420112</p>

                <p class="mb-0 font-weight-bold">Branch Office</p>
              <p class="mb-4"><i class="flaticon-location" style="color:#f69314"></i> SUITE AB, DAN ALEX PLAZA BESIDE FRSC, ASABA,DELTA STATE</p>

                <p class="mb-0 font-weight-bold"> SITE INSPECTION </p>
              <p class="mb-4">SITE INSPECTION TAKES PLACE TUE-SAT | <span style="color:#f69314">1AM-3PM</span></p>



              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+234 8063 53 9271</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">curious@homlandgroup.com</a></p>

            </div>
            
          </div> -->
        </div>
      </div>
    </section>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About <span style="color:#f69314">HOMLAND</span></h2>
                <p>This Section is For About Homland</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section">About Us</a></li>
                  <li><a href="#services-section">Services</a></li>
                  <!-- <li><a href="#">Testimonials</a></li> -->
                  <li><a href="#contact-section">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-4">
              <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>  
            </div>
            
            <div class="">
              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <span style="color:#f69314  ">HOMLAND</span>-<span style="color:black">Group</span>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>