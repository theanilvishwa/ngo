<?php include("header.php");?>
<body>
  <!-- ======= start Header ======= -->
  <!-- End Header -->
  <!-- ======= Hero Section ======= -->
   <?php include("slide-section.php");?>
  <!-- End Hero -->
<main id="main">
<section id="featured-services" class="featured-services section-bg" style="background-color:#f3c677">
    <!-- ======= Featured Services Section ======= -->
      <div class="container-fluid">
         <marquee behavior="alternate" direction="left" style="color:white; background-color:black;">Appeal: Focused welfare for major areas – child education for poor children, healthcare for families, skills training and livelihood for you..              
         </marquee>
        <div class="row no-gutters text-center">
          <div class="col-lg-3 col-md-6">
            <div class="icon-box">
            <a href="viewcompaignpost.php"><h5><img src="assets/img/denote.png">Donate</h5></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="icon-box">
            <a href="signup.php" id="signup"> <h5><img src="assets/img/contact.png"> Sign Up</h5></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6">
            <div class="icon-box">
            <a href="#" data-toggle="modal" data-target="#shareModal"><h5> <img src="assets/img/involve.png">Spread the Word</h5></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="icon-box">
            <a href="contactus.php"><h5><img src="assets/img/contact.png">Contact Us</h5></a>
            </div>
          </div>
         
        </div>
      </div>
    </section><!-- End Featured Services Section -->
     
    <!-- ======= About Us Section ======= -->
    <?php include("about-section.php");?>
    <!-- End Our Clients Section -->

    <!-- ======= Services Section Start ======= -->
    <?php include("portfolio-section.php");?> 
    <!-- ======= Services Section End======= --> 
    
    <!-- =======Start  Portfolio Section ======= -->
    <?php include("gallery-section.php");?> 
    <!-- ======= End Portfolio Section ======= -->
    

    <!-- =======Start Team Section ======= -->
    <?php include("ourteam-section.php");?>
    <!-- End Team Section -->

    <!-- ======Start Contact Section ======= -->
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- =======start Footer ======= -->
  <?php include("footer.php");?>
  <!-- End Footer -->
  
</body>

</html>