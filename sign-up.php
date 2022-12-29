<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign In Page</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	
	<!-- bootstrap css-->
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
    <!-- CSS only-->
	<link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

    <link rel="stylesheet" href="css/sign-up.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-6">
                 <div class = "left-side">
                    <div class = "home">
						<span class="material-icons-sharp">house</span>
						<a href="landing.php"> Home</a>
					</div>

                    <div class = "left-side-inner">
                        <h2>Welcome Back Our Registration Page</h2>
                        <p>Chocolate is a food product made from roasted and ground cacao seed kernels, 
                            that is available as a liquid, solid or paste, on its own or as a flavoring agent in other foods.</p>
                        
                        <h6>Choco Boom</h6>
                        <h6>chocoboom@gmail.com</h6>
                        <h6> +94412232956</h6>
                    </div>
                 </div>
            </div>
            <div class = "col-lg-6">
                <div class = "right-side">
                     <div id = "frm">
                         <div class = "form-inner">
                            <h4 class = "get-start">Get's Started...</h4>
                            <form class = "form-group" method = "post" action ="backend/signupback.php">
                                <label>Full Name</label>
                                <input type = "text" name = "name" id = "name" placeholder = "enter full name" class = "form-control">
    
                                <label>e-Mail</label>
                                <input type = "email" name = "mail" id = "mail" placeholder = "enter mail address" onInput="checkEmail()" class = "form-control">
                                <span id = "check_email"></span><br>

                                <label>Password</label>
                                <input type = "password" name = "password" id = "password" placeholder = "enter password" onInput="checkpassword()" class = "form-control">
                                <span id = "check_password" style = 'font-size: 13px; color: red !important;'></span>

                                <label>Confirm Password</label>
                                <input type = "password" name = "cpassword" id = "cpassword" placeholder = "enter confirm password" onInput="checkcpassword()" class = "form-control">
                                <span id = "check_cpassword" style="color: red !important; font-size: 13px;"></span>
     
                                <input type = "submit" value = "Get MemberShip" id = "submit" name = "sign_up" class = "form-control">

                                <p class = "account">Already have an account.. <a href="sign-in.php" class = "login">Goto Login</a></p>
                            </form>
                         </div>
                     </div>

                     <hr>
                     <p class = "join-with">or join with</p>
                     <hr>

                     <div class = "social-media">
                        <a href="#" class="fb btn">
                            <i class="fab fa-facebook-f"></i> Login with Facebook
                           </a>
                          <a href="#" class="twitter btn">
                            <i class="fab fa-twitter fa-fw"></i> Login with Twitter
                          </a>
                          <a href="#" class="google btn"><i class="fab fa-google fa-fw">
                            </i> Login with Google+
                          </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

	<!--Javascript Links-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>

    <script src = "js/signUp.js"></script>
    <script src = "https://code.jQuery.com/jquery-3.6.0.min.js"></script>
</body>
</html>