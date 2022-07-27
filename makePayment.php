<?php include("header.php");?>
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
                    <form action="payment_process.php" method="post" class="row g-3">
                        <h4 align="center">Make Payment</h4>
						<div class="col-lg-12">
							<div class="form-group">
								<label for="name" >Name</label>
								<input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required/>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label for="amount" >Amount</label>
								<input type="text" name="amt" id="amt" class="form-control" placeholder="Enter Amount" required/>
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
     
    </body>    
</html>

<script>
function PayNow(){
    var name = document.getElementById("name").value;
    var amt = document.getElementById("amt").value;
    $.ajax({
        type: 'post',
        url: 'payment_process.php',
        data: "amt="+amt+"&name="+name,
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
                url: 'payment_process.php',
                data: "payment_id="+response.razorpay_payment_id,
                success: function(data){
                  alert("Thanks For Complete Payment");
                  location.assign("index.php");                
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


<?php include("footer.php");?>
    