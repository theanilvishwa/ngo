<?php 
  include("admin/config.php");
  $selectQuery = "SELECT * FROM portfolio"; 
  $con = dbConnection();
  $result = mysqli_query($con,$selectQuery);
  $res = array();
  while($row = mysqli_fetch_assoc($result)){
  array_push($res,$row);

}
?>
<section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>OSHI Foundation Portfolio</h2>
          <p>Areas of work can include emergency relief, international health education, women's rights, children's rights, economic development, environmental advocacy, disaster preparation
          process of improving the quality of life and economic well-being of people living in rural areas, often relatively isolated and sparsely populated areas
          </p>
        </div>
        <div class="row">
          <?php foreach($res as $a) { ?>
          <div class="col-lg-3 col-md-6 d-flex">
            <div class="icon-box">
              <img src="assets/img/serviceImg/<?php echo $a['img'];?>">
              <h4><a href=""><?php echo $a['heading'];?></a></h4>
              <p><?php echo $a['title'];?></p>
              <br>
              <a href="<?php echo $a['link'];?>" class="btn btn-success">DONATE NOW</a> 
            </div>
          </div>
          <?php } ?> 
        </div>
    </div>
  </section>
    <!-- End Services Section -->

    
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="background-color:#9f814e">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>OSHI FOUNDATION - MAKE YOUR OWN DAY OF CHARITY</h3>
            <p> Add goodwill to your special occasions by spreading joy among those who need your care and support the most.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Donate Now</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
