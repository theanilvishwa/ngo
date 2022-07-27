<?php
include("admin/config.php");
include("header.php");
include("slide-section.php");


  $selectQuery = "SELECT * FROM compaign"; 
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
          <h2>OSHI Foundation Working Compaign</h2>
          <p>Areas of work can include emergency relief, international health education, women's rights, children's rights, economic development, environmental advocacy, disaster preparation
          </p>
        </div>
        <div class="row">
          
          <?php foreach($res as $a) { ?>
            <div class="col-lg-4 col-md-12">
              <div class="icon-box">
                <img src="admin/compaign_img/<?php echo $a['img'];?>">
                <br>
                <h4><?php echo $a['heading'];?></h4>
                <br>
                <div class="col-md-12 bg-primary text-white rounded-circle">
                      <label>Rs.<?php echo $a['amount'];?>.00 /only</label>
                  </div>
                <BR> 
                <a href="<?php echo $a['link'];?>?id=<?php echo $a['id'];?>" class="btn btn-primary">Donate Now</a> 
              </div>
            </div>
          <?php } ?>

          <!-- <div class="col-lg-4 col-md-12">
            <div class="icon-box">
              <img src="assets/img/serviceImg/b.png">
              <br>
              <h4>Water Relief Rural Area</h4>
              <br>
              <div class="col-md-12">
                    <label>Rs.</label>
                    <input type="text" value="500" style="width: 50%;border: 1px solid #d6d4d4;padding: 10px 0px 10px 15px;">
              </div>
              <br>
              <a href="viewcompaignpost_Pay.php" class="btn btn-primary">Donate Now</a>
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-12">
            <div class="icon-box">
              <img src="assets/img/serviceImg/d.png">
              <br>
              <h4>Livelihood Welfare</h4>
              <br>
              <div class="col-md-12">
                    <label>Rs.</label>
                    <input type="text" value="500" style="width: 50%;border: 1px solid #d6d4d4;padding: 10px 0px 10px 15px;">
              </div>
              <br>
              <a href="viewcompaignpost_Pay.php" class="btn btn-primary">Donate Now</a> 
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-12">
            <div class="icon-box">
              <img src="assets/img/serviceImg/d.png">
              <br>
              <h4>Livelihood Welfare</h4>
              <br>
              <div class="col-md-12">
                    <label>Rs.</label>
                    <input type="text" value="500" style="width: 50%;border: 1px solid #d6d4d4;padding: 10px 0px 10px 15px;">
              </div>
              <br>
              <a href="viewcompaignpost_Pay.php" class="btn btn-primary">Donate Now</a> 
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-12">
            <div class="icon-box">
              <img src="assets/img/serviceImg/d.png">
              <br>
              <h4>Livelihood Welfare</h4>
              <br>
              <div class="col-md-12">
                    <label>Rs.</label>
                    <input type="text" value="500" style="width: 50%;border: 1px solid #d6d4d4;padding: 10px 0px 10px 15px;">
              </div>
              <br>
              <a href="viewcompaignpost_Pay.php" class="btn btn-primary">Donate Now</a>
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-12">
            <div class="icon-box">
              <img src="assets/img/serviceImg/d.png">
              <br>
              <h4>Livelihood Welfare</h4>
              <br>
              <div class="col-md-12">
                    <label>Rs.</label>
                    <input type="text" value="500" style="width: 50%;border: 1px solid #d6d4d4;padding: 10px 0px 10px 15px;">
              </div>
              <br>
              <a href="viewcompaignpost_Pay.php" class="btn btn-primary">Donate Now</a>
            </div>
          </div>     -->
        </div>
    </div>
  </section>


<?php
  include("footer.php");
?>