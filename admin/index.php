<?php include("config.php");  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>OSHI FOUNDATION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
<body>
    <div class="container"> 	
        <div class="row" style="margin-top: 10%; color:white">
            <div class="col-md-6 offset-md-3">
            <h1 style="text-align:center; color:black">OSHI FOUNDATION CARITY NGO</h1>
                <div class="login-form bg-primary mt-4 p-4 t-margin-top:40px">
                    <form action="admin-login.php" id="form" onSubmit="return valideForm();" method="post" class="row g-3">
                        <h4>ADMINISTRATION LOGIN</h4>
                       <div class="col-lg-12">
							<div class="form-group">
								<label for="username" >Admin ID:</label>
							    <input type="text" name="username" id="username" class="form-control">
						        <span class="error" id="usernameError" style="display:none">Please Enter Valid UserName</span> 
                            </div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label for="password">Password :</label>
								<input type="password" name="password" id="password" class="form-control">
							    <span class="error" id="passwordError" style="display:none">Please Enter Valid UserName</span>
                            </div>
						</div>
                    		<div class="col-12">
								<button type="submit" class="btn btn-success float-end">Submit</button>
							</div>
					</form>
                    <hr class="mt-4">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</html>

<style>
    .error{
        color: red;
    }
</style>

<script>
    
function isUsername() {
    console.log("inside Username....");
    var username = $('#username').val();

    if( username != null && username != ''){
            return true;
        } else {
            $('#usernameError').show();
            $('#passwordError').html("Please enter valid Password");
            return false;
        }
     else {
        console.log("asdasd");

        $('#usernameError').show();
        return false;
    }


}

function isPasswordValid() {
  console.log("inside isPasswordValid");

  var password = $('#password').val();
  if(password != null && password != ''){
      return true;
  } else {
      $('#passwordError').show();
      return false;
  }
  
}

function valideForm(){
    if(isEmail() && isPasswordValid()){
        $(".error").hide();

        return true;
    } else {
        return false;
    }
  
}

</script>