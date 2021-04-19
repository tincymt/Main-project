
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Register</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <link href="../../css/bootstrap.min.css" rel="stylesheet">
 <link href="../../css/mdb.min.css" rel="stylesheet">
  <style>
   html,
  body,
  header,
  .view {
    height: 100%;
  }
  body
 {
   margin: 0;
   padding: 0;
   background: url("p998.jpg");
   background-repeat: no-repeat;
   background-size: cover;
   background-position: center;
   font-family: sans-serif;
   height: 150%;
 }


  .card {
    background-color:rgb(255, 255, 255,0.6);
	 
  }


input[type=submit] {
  background-color:#e0a800 ;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}
input[type=reset] {
  background-color: #e0a800;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

  </style>
</head>
<body>
	<header>
	  <div class="view" style="background-image: url('p118.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	  
	   <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
	   <div class="container">
	    <div class="row mt-5">
	      <div class="col-md-6 col-xl-5 mb-4">
              <!--Form-->
              <div class="card wow fadeInRight" data-wow-delay="0.3s">
                <div class="card-body">
                  <!--Header-->
                  <div class="text-center">
                    <h3 class="white-text">
                      <i class="fas fa-user white-text"></i> Register:</h3>
                    <hr class="hr-light">
                  </div>
                  <div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fas fa-user prefix white-text active"></i>
											</span>
										</div>
										<input type="text" required class="form-control" id="nam" name="name" placeholder="Your name" onblur="validname()">
									</div>
				 
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-home"></i>
											</span>
										</div>
										<textarea cols='25' rows='4' required class="form-control" name="address"id="comment" placeholder="address"></textarea>
									</div>
				
									
									  
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> 
											<i class="fa fa-phone"></i>
											</span>
										</div>
										 <input type='number' required class="form-control" placeholder="number" id="phno" name="phone" onblur="validate2()"required> 
										
									</div> 
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-envelope-square" aria-hidden="true"></i>
											</span>
										</div>
										<input type='email' required class="form-control" placeholder="name@example.com" id="mail" name="email" onblur="validmail()"required> 
										
									</div>
										
									
				                <div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> 
											<i class="fa fa-graduation-cap"></i>
											</span>
										</div>
										 <input type="text" required class="form-control" id="nam" name="name" placeholder="Your Qualification" onblur="validname()">
										
									</div> 
									
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> 
											<i class="fa fa-info"></i>
											</span>
										</div>
										<textarea cols='25' rows='4' required class="form-control" name="address"id="comment" placeholder="Description about yourself"required></textarea>
										
										
									</div> 
									
									
				  
				  
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-user"></i>
											</span>
										</div>
										<input type='text' required class="form-control" id="usr" name="usenam" placeholder="username">
										
									</div>
									
									
									
									
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="input-group form-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fa fa-lock"></i>
													</span>
												</div>
												<input type='password' required class="form-control" id="pawd" name="paswd" placeholder="Password" onchange="validpaswd()">
											
											</div>
										</div>  
										<div class="col-xs-6 col-sm-6 col-md-6">	
											<div class="input-group form-group">
												<div class="input-group-prepend">
												
										<input type='password' required class="form-control" id="cpawd" name="confirm" placeholder="confirm password" onchange="validcpass()">
											</div>
										</div>
									</div>			</div>	
									
									
									
											<div class="input-group form-group">
									
									<div class="input-group-prepend">
									<span class="input-group-text">
									<i class="fa fa-image"></i>	</span>				
									<button type="button" class="btn btn-secondary">
									<input type="file" id="img" name="sfile" accept="file/*"></button>
									</div>
									</div>			
									
									
									
						  
									<div class="form-group">
									<h5 style="text-align:center;color:white;font-family:Georgia">

									<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
									<label for="agree-term" class="label-agree-term"><span><span></span></span><B>Accept the terms and conditions </label></h5>
									</div>

                  
									<div class="text-center mt-4"><center>
										<input type="submit" id="bt" value="SUBMIT" class="btn btn-secondary">
	                                 <input type='reset' value='RESET' onclick='location.reload()' class="btn btn-secondary"></center>
										<hr class="hr-light mb-3 mt-4">
					
									</div>
								</div>
							</div>
						</div>
					</div></div></div></div>
				</div>
			</div></header>
			</form>
			
		<script>
function validname()
   {
    var name=document.getElementById("nam").value;
	var letters =/^[a-zA-Z ]*$/;
	if(!name.match(letters))
	{
	 alert("Please enter your name correctly");
	 document.getElementById("nam").value="";
	}
   }
   
   
   function validmail()
   {
    var email=document.getElementById("mail").value;
	var mailexp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(!email.match(mailexp))
	{
	 alert("Please enter your email address correctly");
	 document.getElementById("mail").value="";
	 document.getElementById("bt").focus();
	}
   }
   
   
   
   
    function validpaswd()
   {
    var pass=document.getElementById("pawd").value;
	var passexp =/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        if(!pass.match(passexp))
	{
	 alert("Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
	 document.getElementById("pawd").value="";
	}
   }
   
   function validcpass()
   {
    var pass=document.getElementById("pawd").value;
	var cpass=document.getElementById("cpawd").value;
	if(!(pass==cpass))
	{
	 alert("Password not matching");
	 document.getElementById("cpawd").value="";
	}
   }
   
   
   
   function validate2()
{
var phone = document.getElementById("phno").value;
var phn=/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
if (phone == "")
    {
      alert("Phone number can't be blank ");
      count++;
      return false;
    }
else if(phone.length!=10)
{
alert("Enter your phone number correctly!");
count++;
return false;
}
else if(!phone.match(phn))
{
alert("Please enter valid number");
count++;
return false;
}
else
{
count=0;
}
}
   </script>	
		
	</body>
</html>
