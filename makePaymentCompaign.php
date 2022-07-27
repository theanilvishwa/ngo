<?php include("header.php");
$amount = $_GET['amount'];
//echo $amount;
?>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

<div class="container-fluid"> 	
        <div class="row mt-3" id="makePayment"> 	
            <div class="col-md-4 offset-md-4">
                <div class="login-form text-white p-4 mt-3" style="background-color:#9f814e;">
                    <form action="payment_process_compaign.php" method="post" class="row g-3">
                        <h4 align="center">OSHi MAKE COMPAIGN PAYMENT</h4>
						<div class="col-lg-12">
							<div class="form-group">
								<label for="amount" >Amount</label>
								<input type="number" name="amt" value="<?php echo $amount;?>" id="amt" class="form-control" placeholder="Enter Amount" required/>
							</div>
						</div>
                        <div class="col-lg-12">
							<div class="form-group">
								<label for="name" >Name</label>
								<input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required/>
							</div>
						</div>
                        <div class="col-lg-12">
							<div class="form-group">
								<label for="email" >Email- (Not Mondatry)</label>
								<input type="text" name="email" id="email" class="form-control" placeholder="Your Email"/>
							</div>
						</div>
                        <div class="col-lg-12">
							<div class="form-group">
								<label for="address" >Address -(Not Mondatry)</label>
								<input type="text" name="address" id="address" class="form-control" placeholder="Your Address"/>
							</div>
						</div>
						<div class="col-lg-12 mb-4">
							<div class="form-group">
								<label for="phone">Mobile Number</label>
								<input type="text" name="phone" id="phone" class="form-control" placeholder="Mobile Number" required/>
							</div>
						</div>
                        <div class="col-lg-12">
							<a type="submit" name="btn" value="Pay Now" onclick="PayNow()" class="btn btn-primary float-end">Pay Now</a>
                        </div>
					</form>
                    <hr class="mt-4">
                    <div class="col-12 ">
                        <p class="text-center mb-0">OSHI FOUNDATION CHARITY</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <BR>
     <BR>
    <?php include("footer.php");?>

    </body>    
</html>

<script>
function PayNow(){

    var amt = document.getElementById("amt").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;
     
    $.ajax({
        type: 'post',
        url: 'payment_process_compaign.php',
        data: "amt="+amt+"&name="+name+"&amt="+amt+"&name="+name+"&email="+email+"&address="+address+"&phone="+phone,
        success: function(data){
            var options = { 
            "key": "rzp_test_qinDU3KWWOqlja", 
            "amount": amt*100,
            "currency": "INR",
            "name": "Acme Corp",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "handler": function (response){
                $.ajax({
                type: 'post',
                url: 'payment_process_compaign.php',
                // data: "payment_id="+response.razorpay_payment_id,
                data: "payment_id="+response.razorpay_payment_id,
                success: function(data){
                  alert("Thanks For Complete Payment"); 
                  location.assign('viewcompaignpost.php');
                }
            });
        }
    };
   var rzp1 = new Razorpay(options);
    rzp1.open();
    }
}); 

}
 
</script>