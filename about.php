<?php
   include("header.php");
   include("slide-section.php");
    
   include("admin/config.php");
   
   $selectQuery = "SELECT * FROM about";
   $con = dbConnection();
   $result = runQuery($con,$selectQuery);
   //print_r ($result);
  $res = array();
  while($row = mysqli_fetch_assoc($result)){
  array_push($res,$row);
}
//print_r($res["content2"]);
foreach($res as $a){
//print_r ($a['content1']);
}
 //echo $a['heading1'];  
?>

<section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About OSHI Foundation</h2>
          <p>
            OSHI Foundation, an Indian social development organization, is directly benefitting over 15 lakh children and their families every year. We have more than 400 live welfare projects on education, healthcare, livelihood, and women’s empowerment in over 2,000 remote villages and urban slums across 25 states of India.
          </p>
        </div>
       
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="./admin/about_img/<?php echo $a['img1'];?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php echo $a['heading1'];?></h3>
            <?php echo $a['content1'];?>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Us Section -->
    
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <h3><?php echo $a['heading2'];?></h3>
            <?php echo $a['content2'];?>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <img src="./admin/about_img/<?php echo $a['img2'];?>" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>
     
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>OSHI Foundation Services</h2>
          <p>Areas of work can include emergency relief, international health education, women's rights, children's rights, economic development, environmental advocacy, disaster preparation
          process of improving the quality of life and economic well-being of people living in rural areas, often relatively isolated and sparsely populated areas
          </p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex">
            <div class="icon-box">
              <img src="./admin/about_img/<?php echo $a['img3'];?>" alt="">
              <h4><a href=""><?php echo $a['heading3'];?></a></h4>
              <p><?php echo $a['content3'];?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex">
            <div class="icon-box">
              <img src="./admin/about_img/<?php echo $a['img4'];?>" alt="">
              <h4><a href=""><?php echo $a['heading4'];?></a></h4>
              <p><?php echo $a['content4'];?></p>
            
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex">
            <div class="icon-box">
              <img src="./admin/about_img/<?php echo $a['img5'];?>" alt="">
              <h4><a href=""><?php echo $a['heading5'];?></a></h4>
              <p><?php echo $a['content5'];?></p>
            </div>
          </div>
        </div>
    </div>
  </section>
 
<?php
   include("footer.php");
?>
