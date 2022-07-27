<?php 
include("header.php");
include("admin/config.php");

$id = $_GET['id'];

$selectQuery = "SELECT * FROM compaign WHERE id = '$id'"; 
$con = dbConnection();
$result = mysqli_query($con,$selectQuery);
$res = array();
while($row = mysqli_fetch_assoc($result)){
array_push($res,$row);

}
foreach($res as $a){

}



?>
<!DOCTYPE html>
<html>
  <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
<body>
  <div class="container">
    <BR>
    <BR>
    <div class="row">
        <div class="col-md-4">
            <img  src="admin/compaign_img/<?php echo $a['img'];?>">
        </div>
        <div class="col-md-4">
            <img  src="assets/img/qr-sample.png">
            <BR>
            <BR>
            <BR>
            <p style="font-size:15px;"><i>Note: you can also pay here</i></p>
        </div>
            <div class="col-md-4">
              <div class="row">
                  <div class="col-md-12">
                      <div class="contribute">
                          Raised funds can feed children/year
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <BR>
                    <h6 >Start Date<br><span class="startEnd"><?php echo $a['startdate'];?></span></h6>
                  </div>
                  <div class="col-sm-6" style="text-align:right;float:right;">
                    <BR>
                    <h6>End Date<br><span class="startEnd"><?php echo $a['enddate'];?></span></h6>
                  </div>
            </div>
            <br>    
            <div class="col-md-12">
              <input type="hidden" name="campaign_id">
                  <h4 class="contribute">Contribute Your Donation Evetyone</h4>
                  <p>&nbsp;</p>
                  <label>Total Donation Amount.</label>
                  <input value="<?php echo $a['amount'];?>" style="width: 50%;border: 3px solid red;padding: 10px 0px 10px 15px;">
            </div>
            <div class="col-sm-12" style="text-align: center;padding:15px 0 0px 0 ;">
              <a href="makePaymentCompaign.php?amount=<?php echo $a['amount'];?>" name="" class="btn btn-primary">Continue Donation</a>
            </div>
              <BR>
              <p style="font-size:15px;width:100%;text-align: center;"><i>Note: Rs. 1100 can feed a child for a year</i></p>
          </div>
      </div>
    </div>
  </div>

<div class="container pt-10px">
  <div class="row">

    <div class="col-sm-8 col-xs-12">
      <BR>
      <div style="background-color:#a58d51"><h4 class="text-white" style="font-weight:900;padding:10px;">ABOUT CAMPAIGN ::- <?php echo $a['heading'];?></h4></div>
      <BR>
      <p><?php echo $a['content'];?></p>
    </div>
    <div class="col-sm-4 col-xs-12">
      <BR>
      <div style="background-color:#a58d51"><h4 class="text-white" style="font-weight:900;padding:10px;">CAMPAIGN DONORS</h4></div>
      <BR>
         <ul class="ul">
           <li><span stype="padding:5px;">Raju Vishwakarma</span></li>
           <li><span stype="padding:5px;">Raju Vishwakarma</span></li>
          </ul>  
    </div>
  </div>
</div>

<?php include("footer.php");?>

</body>
</html>

<style>
.ul li{
  margin: 0;
    list-style: none;
    padding: 15px 0 15px 25px;
    font: 400 13px/16px 'Open Sans',sans-serif;
    border-bottom: 1px dashed #ddd;
    box-sizing: border-box;
    text-transform: capitalize;
  
}

.ul{
  max-height: 378px;
    min-height: auto;
    overflow-y: auto;
}

.ul{
  float: left;
    width: 100%;
}


.circle {
    margin: 15px auto;
    display: inline-block;
    position: relative;
    text-align: center;
    line-height: 1.2;
    border:12px solid #ffb703;
    border-radius: 50%;
    width: 240px;
}

.circle-area {
    margin: 0 auto;
    text-align: center;
}

.contribute{
    font: 700 14px/14px 'Open Sans',sans-serif;
    color: #fff;
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
    padding: 9px 5px;
    background: #ffb703;
    border-radius: 50px;
}
.startEnd{
    color: #005a89;
    font: 900 14px/16px 'Open Sans',sans-serif;
    letter-spacing: .5px;
    text-transform: uppercase;
}
</style>


